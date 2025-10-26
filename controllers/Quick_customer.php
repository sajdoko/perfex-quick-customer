<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Quick_customer extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('clients_model');
    }

    /**
     * Create a new customer via AJAX
     */
    public function create()
    {
        if (!$this->input->is_ajax_request()) {
            show_404();
        }

        if (staff_cant('create', 'customers')) {
            echo json_encode([
                'success' => false,
                'message' => _l('access_denied'),
            ]);
            return;
        }

        $data = $this->input->post();

        // Prepare customer data
        $customer_data = [
            'company'          => $data['company'] ?? '',
            'vat'              => $data['vat'] ?? '',
            'phonenumber'      => $data['phonenumber'] ?? '',
            'website'          => $data['website'] ?? '',
            'address'          => $data['address'] ?? '',
            'city'             => $data['city'] ?? '',
            'state'            => $data['state'] ?? '',
            'country'          => $data['country'] ?? 0,
            'zip'              => $data['zip'] ?? '',
            'default_currency' => $data['default_currency'] ?? 0,
        ];

        // Billing address (use company address if checkbox is checked)
        if (isset($data['billing_same_as_company']) && $data['billing_same_as_company'] == '1') {
            $customer_data['billing_street']  = $data['address'] ?? '';
            $customer_data['billing_city']    = $data['city'] ?? '';
            $customer_data['billing_state']   = $data['state'] ?? '';
            $customer_data['billing_country'] = $data['country'] ?? 0;
            $customer_data['billing_zip']     = $data['zip'] ?? '';
        } else {
            $customer_data['billing_street']  = $data['billing_street'] ?? '';
            $customer_data['billing_city']    = $data['billing_city'] ?? '';
            $customer_data['billing_state']   = $data['billing_state'] ?? '';
            $customer_data['billing_country'] = $data['billing_country'] ?? 0;
            $customer_data['billing_zip']     = $data['billing_zip'] ?? '';
        }

        // Shipping address (if enabled)
        if (isset($data['enable_shipping']) && $data['enable_shipping'] == '1') {
            $customer_data['shipping_street']  = $data['shipping_street'] ?? '';
            $customer_data['shipping_city']    = $data['shipping_city'] ?? '';
            $customer_data['shipping_state']   = $data['shipping_state'] ?? '';
            $customer_data['shipping_country'] = $data['shipping_country'] ?? 0;
            $customer_data['shipping_zip']     = $data['shipping_zip'] ?? '';
        }

        // Contact data
        $customer_data['firstname']  = $data['firstname'] ?? '';
        $customer_data['lastname']   = $data['lastname'] ?? '';
        $customer_data['email']      = $data['contact_email'] ?? '';
        $customer_data['contact_phonenumber'] = $data['contact_phonenumber'] ?? '';
        $customer_data['is_primary'] = 1;

        // Don't send welcome email for quick creation
        $customer_data['donotsendwelcomeemail'] = true;

        // Create customer with contact
        $customer_id = $this->clients_model->add($customer_data, true);

        if ($customer_id) {
            // Assign current staff as customer admin if they can't view all customers
            if (staff_cant('view', 'customers')) {
                $assign['customer_admins']   = [];
                $assign['customer_admins'][] = get_staff_user_id();
                $this->clients_model->assign_admins($assign, $customer_id);
            }

            // Get customer data for response
            $customer = $this->clients_model->get($customer_id);

            echo json_encode([
                'success'     => true,
                'message'     => _l('quick_customer_success'),
                'customer_id' => $customer_id,
                'customer'    => [
                    'id'      => $customer_id,
                    'company' => $customer->company,
                    'vat'     => $customer->vat,
                    'billing_street'   => $customer->billing_street,
                    'billing_city'     => $customer->billing_city,
                    'billing_state'    => $customer->billing_state,
                    'billing_country'  => $customer->billing_country,
                    'billing_zip'      => $customer->billing_zip,
                    'shipping_street'  => $customer->shipping_street,
                    'shipping_city'    => $customer->shipping_city,
                    'shipping_state'   => $customer->shipping_state,
                    'shipping_country' => $customer->shipping_country,
                    'shipping_zip'     => $customer->shipping_zip,
                ],
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => _l('quick_customer_error'),
            ]);
        }
    }
}
