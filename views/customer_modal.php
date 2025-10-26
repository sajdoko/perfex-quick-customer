<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- Quick Add Customer Button (will be injected via JS) -->
<div id="quick-customer-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">
                    <i class="fa fa-user-plus"></i> <?= _l('quick_customer_modal_title'); ?>
                </h4>
            </div>
            <?= form_open('#', ['id' => 'quick-customer-form']); ?>
            <div class="modal-body">
                <div class="row">
                    <!-- Company Information -->
                    <div class="col-md-12">
                        <h4 class="tw-font-semibold tw-text-base tw-text-neutral-700">
                            <?= _l('client_company_info'); ?>
                        </h4>
                        <hr class="tw-my-3" />
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="qc_company" class="control-label">
                                <?= _l('quick_customer_company_name'); ?> <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="company" id="qc_company" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="qc_vat" class="control-label">
                                <?= _l('quick_customer_vat'); ?>
                            </label>
                            <input type="text" class="form-control" name="vat" id="qc_vat">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="qc_phone" class="control-label">
                                <?= _l('quick_customer_phone'); ?>
                            </label>
                            <input type="text" class="form-control" name="phonenumber" id="qc_phone">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="qc_website" class="control-label">
                                <?= _l('quick_customer_website'); ?>
                            </label>
                            <input type="url" class="form-control" name="website" id="qc_website">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="qc_country" class="control-label">
                                <?= _l('quick_customer_country'); ?>
                            </label>
                            <select class="form-control selectpicker" name="country" id="qc_country" data-live-search="true">
                                <option value=""><?= _l('dropdown_non_selected_tex'); ?></option>
                                <?php foreach (get_all_countries() as $country) { ?>
                                    <option value="<?= $country['country_id']; ?>" 
                                        <?= get_option('customer_default_country') == $country['country_id'] ? 'selected' : ''; ?>>
                                        <?= $country['short_name']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="qc_currency" class="control-label">
                                <?= _l('quick_customer_currency'); ?>
                            </label>
                            <select class="form-control selectpicker" name="default_currency" id="qc_currency">
                                <?php foreach ($currencies as $currency) { ?>
                                    <option value="<?= $currency['id']; ?>" 
                                        <?= $currency['isdefault'] == 1 ? 'selected' : ''; ?>>
                                        <?= $currency['name']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="qc_address" class="control-label">
                                <?= _l('quick_customer_address'); ?>
                            </label>
                            <textarea class="form-control" name="address" id="qc_address" rows="2"></textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="qc_city" class="control-label">
                                <?= _l('quick_customer_city'); ?>
                            </label>
                            <input type="text" class="form-control" name="city" id="qc_city">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="qc_state" class="control-label">
                                <?= _l('quick_customer_state'); ?>
                            </label>
                            <input type="text" class="form-control" name="state" id="qc_state">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="qc_zip" class="control-label">
                                <?= _l('quick_customer_zip'); ?>
                            </label>
                            <input type="text" class="form-control" name="zip" id="qc_zip">
                        </div>
                    </div>

                    <!-- Primary Contact Information -->
                    <div class="col-md-12">
                        <h4 class="tw-font-semibold tw-text-base tw-text-neutral-700 tw-mt-4">
                            <?= _l('quick_customer_contact_info'); ?>
                        </h4>
                        <hr class="tw-my-3" />
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="qc_firstname" class="control-label">
                                <?= _l('quick_customer_firstname'); ?> <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="firstname" id="qc_firstname" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="qc_lastname" class="control-label">
                                <?= _l('quick_customer_lastname'); ?> <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="lastname" id="qc_lastname" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="qc_contact_email" class="control-label">
                                <?= _l('quick_customer_email'); ?> <span class="text-danger">*</span>
                            </label>
                            <input type="email" class="form-control" name="contact_email" id="qc_contact_email" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="qc_contact_phone" class="control-label">
                                <?= _l('quick_customer_contact_phone'); ?>
                            </label>
                            <input type="text" class="form-control" name="contact_phonenumber" id="qc_contact_phone">
                        </div>
                    </div>

                    <!-- Billing Address -->
                    <div class="col-md-12">
                        <div class="checkbox checkbox-primary">
                            <input type="checkbox" name="billing_same_as_company" id="qc_billing_same" value="1" checked>
                            <label for="qc_billing_same">
                                <?= _l('quick_customer_billing_same_as_company'); ?>
                            </label>
                        </div>
                    </div>

                    <div id="qc_billing_section" class="col-md-12" style="display:none;">
                        <h5 class="tw-font-semibold tw-text-sm tw-text-neutral-700">
                            <?= _l('billing_address'); ?>
                        </h5>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="qc_billing_street"><?= _l('billing_street'); ?></label>
                                    <textarea class="form-control" name="billing_street" id="qc_billing_street" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qc_billing_city"><?= _l('billing_city'); ?></label>
                                    <input type="text" class="form-control" name="billing_city" id="qc_billing_city">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qc_billing_state"><?= _l('billing_state'); ?></label>
                                    <input type="text" class="form-control" name="billing_state" id="qc_billing_state">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qc_billing_zip"><?= _l('billing_zip'); ?></label>
                                    <input type="text" class="form-control" name="billing_zip" id="qc_billing_zip">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="qc_billing_country"><?= _l('billing_country'); ?></label>
                                    <select class="form-control selectpicker" name="billing_country" id="qc_billing_country" data-live-search="true">
                                        <option value=""><?= _l('dropdown_non_selected_tex'); ?></option>
                                        <?php foreach (get_all_countries() as $country) { ?>
                                            <option value="<?= $country['country_id']; ?>">
                                                <?= $country['short_name']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Shipping Address -->
                    <div class="col-md-12 tw-mt-3">
                        <div class="checkbox checkbox-primary">
                            <input type="checkbox" name="enable_shipping" id="qc_enable_shipping" value="1">
                            <label for="qc_enable_shipping">
                                <?= _l('quick_customer_enable_shipping'); ?>
                            </label>
                        </div>
                    </div>

                    <div id="qc_shipping_section" class="col-md-12" style="display:none;">
                        <h5 class="tw-font-semibold tw-text-sm tw-text-neutral-700">
                            <?= _l('shipping_address'); ?>
                        </h5>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="qc_shipping_street"><?= _l('shipping_street'); ?></label>
                                    <textarea class="form-control" name="shipping_street" id="qc_shipping_street" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qc_shipping_city"><?= _l('shipping_city'); ?></label>
                                    <input type="text" class="form-control" name="shipping_city" id="qc_shipping_city">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qc_shipping_state"><?= _l('shipping_state'); ?></label>
                                    <input type="text" class="form-control" name="shipping_state" id="qc_shipping_state">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qc_shipping_zip"><?= _l('shipping_zip'); ?></label>
                                    <input type="text" class="form-control" name="shipping_zip" id="qc_shipping_zip">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="qc_shipping_country"><?= _l('shipping_country'); ?></label>
                                    <select class="form-control selectpicker" name="shipping_country" id="qc_shipping_country" data-live-search="true">
                                        <option value=""><?= _l('dropdown_non_selected_tex'); ?></option>
                                        <?php foreach (get_all_countries() as $country) { ?>
                                            <option value="<?= $country['country_id']; ?>">
                                                <?= $country['short_name']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <?= _l('quick_customer_btn_cancel'); ?>
                </button>
                <button type="submit" class="btn btn-primary" id="qc_submit_btn">
                    <i class="fa fa-check"></i> <?= _l('quick_customer_btn_create'); ?>
                </button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
