/**
 * Quick Customer Module JavaScript
 * Handles the customer creation modal on invoice page
 */

// Wait for jQuery to be available
(function() {
    'use strict';

    function initQuickCustomer() {
        // Ensure jQuery is loaded
        if (typeof jQuery === 'undefined') {
            setTimeout(initQuickCustomer, 100);
            return;
        }

        var $ = jQuery;

        // Wait for DOM to be ready
        $(function() {
            // Wait a bit for page to fully render
            setTimeout(function() {
                addQuickCustomerButton();
            }, 800);

            function addQuickCustomerButton() {
                // Check if button already exists
                if ($('#quick-customer-btn').length) {
                    return;
                }

                // Find the customer dropdown
                var $clientSelect = $('select[name="clientid"], #clientid');

                if ($clientSelect.length === 0) {
                    // Try again after a delay
                    setTimeout(addQuickCustomerButton, 500);
                    return;
                }

                // Create the button
                var quickBtn = '<button type="button" class="btn btn-info" id="quick-customer-btn" ' +
                    'title="Quick Add Customer">' +
                    '<i class="fa fa-user-plus"></i> Quick Add Customer' +
                    '</button>';

                // Find parent form-group and append button
                var $target = $clientSelect.closest('.form-group');
                if ($target.length) {
                    $target.append(quickBtn);
                } else {
                    // Fallback: insert after select2 container or select element
                    var $select2 = $clientSelect.next('.select2-container');
                    if ($select2.length) {
                        $select2.after(quickBtn);
                    } else {
                        $clientSelect.after(quickBtn);
                    }
                }
            }

            // Show modal when button is clicked
            $(document).on('click', '#quick-customer-btn', function(e) {
                e.preventDefault();
                $('#quick-customer-modal').modal('show');
            });

            // Toggle billing address section
            $(document).on('change', '#qc_billing_same', function() {
                if ($(this).is(':checked')) {
                    $('#qc_billing_section').slideUp();
                } else {
                    $('#qc_billing_section').slideDown();
                    $('#qc_billing_country').selectpicker('refresh');
                }
            });

            // Toggle shipping address section
            $(document).on('change', '#qc_enable_shipping', function() {
                if ($(this).is(':checked')) {
                    $('#qc_shipping_section').slideDown();
                    $('#qc_shipping_country').selectpicker('refresh');
                } else {
                    $('#qc_shipping_section').slideUp();
                }
            });

            // Handle form submission
            $(document).on('submit', '#quick-customer-form', function(e) {
                e.preventDefault();

                var form = $(this);
                var submitBtn = $('#qc_submit_btn');
                var originalBtnHtml = submitBtn.html();

                // Disable button and show loading
                submitBtn.prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Creating...');

                $.ajax({
                    url: admin_url + 'quick_customer/quick_customer/create',
                    type: 'POST',
                    data: form.serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            // Close modal
                            $('#quick-customer-modal').modal('hide');

                            // Show success message
                            alert_float('success', response.message);

                            // Add new option to customer dropdown and select it
                            var newOption = new Option(response.customer.company, response.customer_id, true, true);
                            $('#clientid').append(newOption).trigger('change');

                            // Trigger customer change to load billing/shipping data
                            if (typeof init_billing_and_shipping_details === 'function') {
                                init_billing_and_shipping_details(response.customer_id);
                            }

                            // Update billing and shipping display
                            if (response.customer) {
                                $('.billing_street').html(response.customer.billing_street || '--');
                                $('.billing_city').html(response.customer.billing_city || '--');
                                $('.billing_state').html(response.customer.billing_state || '--');
                                $('.billing_zip').html(response.customer.billing_zip || '--');

                                $('.shipping_street').html(response.customer.shipping_street || '--');
                                $('.shipping_city').html(response.customer.shipping_city || '--');
                                $('.shipping_state').html(response.customer.shipping_state || '--');
                                $('.shipping_zip').html(response.customer.shipping_zip || '--');
                            }

                            // Reset form
                            form[0].reset();
                            $('#qc_billing_same').prop('checked', true).trigger('change');
                            $('#qc_enable_shipping').prop('checked', false).trigger('change');

                            // Refresh selectpickers
                            $('.selectpicker').selectpicker('refresh');
                        } else {
                            alert_float('danger', response.message);
                        }
                    },
                    error: function(xhr) {
                        alert_float('danger', 'An error occurred while creating the customer.');
                    },
                    complete: function() {
                        // Re-enable button
                        submitBtn.prop('disabled', false).html(originalBtnHtml);
                    }
                });
            });

            // Reset form when modal is closed
            $('#quick-customer-modal').on('hidden.bs.modal', function() {
                $('#quick-customer-form')[0].reset();
                $('#qc_billing_same').prop('checked', true).trigger('change');
                $('#qc_enable_shipping').prop('checked', false).trigger('change');
                $('.selectpicker').selectpicker('refresh');
            });

            // Initialize selectpickers when modal is shown
            $('#quick-customer-modal').on('shown.bs.modal', function() {
                $('.selectpicker').selectpicker('refresh');
            });
        });
    }

    // Start initialization
    initQuickCustomer();
})();
