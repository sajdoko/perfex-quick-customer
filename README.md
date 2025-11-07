<div align="center">

# Quick Customer Module for Perfex CRM

[![Perfex CRM](https://img.shields.io/badge/Perfex%20CRM-2.3.0%2B-blue.svg)](https://www.perfexcrm.com/)
[![License](https://img.shields.io/badge/license-MIT-green.svg)](LICENSE)
[![Version](https://img.shields.io/badge/version-1.1.0-orange.svg)](CHANGELOG.md)
[![PHP](https://img.shields.io/badge/PHP-8.1%2B-777BB4.svg)](https://php.net/)

**Add customers directly from invoice, estimate, and proposal pages—no more switching tabs!**

[Features](#-features) • [Installation](#-installation) • [Usage](#-usage) • [Screenshots](#-screenshots) • [Contributing](#-contributing)

</div>

---

## 📖 Overview

The **Quick Customer** module streamlines your workflow by allowing you to create new customers directly from invoice, estimate, and proposal creation pages via a convenient modal popup. No more navigating away to the customers section—stay focused on your work.

Perfect for:

- Sales teams who need to create invoices, estimates, and proposals quickly
- Accountants managing multiple client documents
- Businesses with high-volume customer onboarding
- Anyone who values workflow efficiency

## Features

- **Quick Add Button** - Adds a "Quick Add" button next to the customer dropdown on invoice, estimate, and proposal pages
- **Modal Form** - Clean, comprehensive modal form for customer creation
- **Full Customer Data** - Capture company info, contact details, billing and shipping addresses
- **Auto-Select** - Automatically selects the newly created customer in the document
- **Auto-Fill Billing** - Updates billing/shipping information immediately
- **Permission Aware** - Respects Perfex CRM's customer creation permissions
- **No Database Changes** - Pure functionality module, no schema modifications
- **Bootstrap 3 Compatible** - Matches Perfex CRM's UI/UX perfectly
- **Translation Ready** - Easy to translate into any language
- **Responsive Design** - Works on desktop and tablet devices

## Installation

### Prerequisites

- Perfex CRM 2.3.0 or higher
- PHP 8.1 or higher
- Administrator access to Perfex CRM
- Staff permission to create customers

### Step 1: Download Module

**Option A: Download from Releases (Recommended)**

Download the latest release from [Releases](https://github.com/sajdoko/perfex-quick-customer/releases). The release archive is pre-configured with the correct folder name (`quick_customer`).

**Option B: Clone Repository**

```bash
git clone https://github.com/sajdoko/perfex-quick-customer.git quick_customer
```

Note: Use `quick_customer` as the target folder name, not `perfex-quick-customer`.

### Step 2: Upload Module Files

1. Navigate to your Perfex CRM installation directory
2. Go to `modules/` folder
3. Upload the entire `quick_customer` folder

⚠️ **Important:** The folder MUST be named exactly `quick_customer` (not `perfex-quick-customer` or `perfex-quick-customer-1.1.0`).

Your structure should look like:

```text
modules/
└── quick_customer/
    ├── quick_customer.php
    ├── install.php
    ├── assets/
    │   ├── quick_customer.js
    │   └── quick_customer.css
    ├── controllers/
    │   └── Quick_customer.php
    ├── language/
    │   └── english/
    │       └── quick_customer_lang.php
    └── views/
        └── customer_modal.php
```

### Step 3: Activate Module

1. Login to Perfex CRM as **Administrator**
2. Go to **Setup → Modules**
3. Find **Quick Customer** in the list
4. Click **Activate**

### Step 4: Verify Installation

1. Go to **Sales → Invoices** (or **Sales → Estimates** or **Sales → Proposals**)
2. Click **Create New Invoice** (or **Create New Estimate** or **Create New Proposal**)
3. You should see a blue **"Quick Add"** button next to the customer dropdown

> **Note:** For detailed installation instructions, see [INSTALL.md](INSTALL.md)

---

## Usage

### Creating a Customer from Invoice/Estimate/Proposal Page

1. **Navigate to Document Creation**
   - Go to Sales → Invoices → Create New Invoice
   - OR Sales → Estimates → Create New Estimate
   - OR Sales → Proposals → Create New Proposal

2. **Click Quick Add Button**
   - Click the blue "Quick Add" button next to the customer dropdown
   - The customer creation modal will open

3. **Fill Customer Information**
   - **Company Name*** (required)
   - VAT Number
   - Phone & Website
   - Address (Street, City, State, Zip, Country)
   - Currency

4. **Add Primary Contact** (required)
   - First Name*
   - Last Name*
   - Email*
   - Contact Phone

5. **Configure Billing Address**
   - By default, uses company address
   - Uncheck "Use company address for billing" to specify separate billing address

6. **Add Shipping Address** (optional)
   - Check "Add shipping address" to enable shipping fields
   - Fill in shipping details if needed

7. **Create & Select**
   - Click "Create & Select" button
   - Customer is created and automatically selected in the document
   - Billing/shipping information is populated automatically

---

## Screenshots

### Quick Add Button on Invoice Page

![Quick Add Button](https://raw.githubusercontent.com/sajdoko/perfex-quick-customer/refs/heads/master/assets/screenshots/Quick_Add_button_next_to_customer_dropdown.png)

*The Quick Add button appears on invoice, estimate, and proposal pages next to the customer dropdown.*

### Customer Creation Modal

![Customer Creation Modal](https://raw.githubusercontent.com/sajdoko/perfex-quick-customer/refs/heads/master/assets/screenshots/Customer_Creation_Modal.png)

### Auto-Selected Customer

![Auto-Selected Customer](https://raw.githubusercontent.com/sajdoko/perfex-quick-customer/refs/heads/master/assets/screenshots/Newly_Created_Customer_Auto_Selected_Customer.png)

> **Want to contribute screenshots?** See [Contributing](#-contributing) section below!

---

## Customization

### Files Explained

#### `quick_customer.php` (Main Module File)

- Registers the module with Perfex CRM
- Defines hooks for injecting assets and modal
- Loads on invoice, estimate, and proposal pages for performance

#### `install.php` (Installation Script)

- Runs when module is activated
- Currently logs activation (no database changes needed)

#### `controllers/Quick_customer.php` (Controller)

- Handles AJAX customer creation
- Validates permissions
- Creates customer with contact
- Returns customer data for auto-fill

#### `views/customer_modal.php` (Modal View)

- Bootstrap 3 modal markup
- Form fields for customer data
- Integrated with Perfex CRM's styling

#### `assets/quick_customer.js` (JavaScript)

- Injects "Quick Add" button into DOM
- Handles modal show/hide
- Processes form submission via AJAX
- Updates customer dropdown and document fields
- Supports invoices, estimates, and proposals

#### `assets/quick_customer.css` (Styles)

- Custom styling for button and modal
- Ensures proper layout and spacing

- English language strings
- Easily translatable to other languages

---

## Customization

## Module Structure

### Files Explained

### Adding More Languages

Create a language file in `modules/quick_customer/language/{language}/`:

```php
<?php
// modules/quick_customer/language/spanish/quick_customer_lang.php
$lang['quick_customer_add_new'] = 'Añadir Cliente Rápido';
$lang['quick_customer_modal_title'] = 'Agregar Nuevo Cliente';
// ... add all translations
```

### Changing Button Appearance

Edit `assets/quick_customer.js` line ~11:

```javascript
// Change button color from info (blue) to success (green)
var quickBtn = '<button type="button" class="btn btn-success tw-ml-2" ...>';

// Change button text
'<i class="fa fa-user-plus"></i> Add New Customer' +
```

### Adding Custom Fields

To add custom fields to the modal, edit `views/customer_modal.php` and `controllers/Quick_customer.php`:

**In customer_modal.php:**

```php
<div class="col-md-6">
    <div class="form-group">
        <label for="qc_custom_field">Custom Field</label>
        <input type="text" class="form-control" name="custom_field" id="qc_custom_field">
    </div>
</div>
```

**In Quick_customer.php controller:**

```php
$customer_data['custom_field'] = $data['custom_field'] ?? '';
```

---

## Troubleshooting

Edit `views/customer_modal.php` to change which fields are required:

```php
<!-- Remove * and required attribute to make optional -->
<label for="qc_company"><?= _l('quick_customer_company_name'); ?></label>
<input type="text" class="form-control" name="company" id="qc_company">
```

### Modifying Required Fields

Edit `views/customer_modal.php` to change which fields are required:

```php
<!-- Remove * and required attribute to make optional -->
<label for="qc_company"><?= _l('quick_customer_company_name'); ?></label>
<input type="text" class="form-control" name="company" id="qc_company">
```

### Common Issues & Solutions

#### Button Not Appearing

**Solution:** Clear browser cache and Perfex CRM cache

- Setup → Settings → Clear Cache
- Hard refresh browser (Ctrl+F5)

### Permission Denied Error

**Solution:** Ensure user has "Create Customers" permission

- Setup → Staff → Select Staff Member → Permissions
- Enable "Customers - Create"

### Modal Not Closing After Creation

**Solution:** Check browser console for JavaScript errors

- Open Developer Tools (F12)
- Check Console tab
- Report errors for support

### Customer Not Auto-Selected

**Solution:** Ensure jQuery and select2 are loaded

- Module requires Perfex CRM's default assets
- Don't remove or modify invoice form scripts

### Styling Issues

**Solution:** Check for CSS conflicts

- Ensure no custom CSS is overriding module styles
- Clear browser cache

---

## Technical Details

### Hooks Used

- `admin_init` - Initialize module on admin load
- `app_admin_head` - Inject CSS/JS assets into page head (on invoice, estimate, and proposal pages)
- `app_admin_footer` - Inject modal HTML into page footer (on invoice, estimate, and proposal pages)

### AJAX Endpoint

**URL:** `admin/quick_customer/quick_customer/create`  
**Method:** POST  
**Returns:** JSON with customer data

**Request Payload:**

```json
{
  "company": "Company Name",
  "vat": "VAT123",
  "phonenumber": "+1234567890",
  "website": "https://example.com",
  "address": "123 Main St",
  "city": "New York",
  "state": "NY",
  "zip": "10001",
  "country": "US",
  "default_currency": "1",
  "firstname": "John",
  "lastname": "Doe",
  "email": "john@example.com",
  "contact_phone": "+1234567890"
}
```

**Response:**

```json
{
  "success": true,
  "customer_id": "123",
  "company": "Company Name",
  "vat": "VAT123",
  "billing_street": "123 Main St",
  "billing_city": "New York",
  "billing_state": "NY",
  "billing_zip": "10001",
  "billing_country": "US",
  "shipping_street": "",
  "shipping_city": "",
  "shipping_state": "",
  "shipping_zip": "",
  "shipping_country": ""
}
```

### Dependencies

- Bootstrap 3 (included in Perfex CRM)
- jQuery (included in Perfex CRM)
- Bootstrap Select (included in Perfex CRM)
- Perfex CRM's `Clients_model`

### Browser Compatibility

- Chrome 60+
- Firefox 60+
- Safari 12+
- Edge 79+

---

## Contributing

We welcome contributions from the community! Here's how you can help:

### Reporting Bugs

1. Check if the issue already exists in [Issues](https://github.com/sajdoko/perfex-quick-customer/issues)
2. Create a new issue with:
   - Clear title and description
   - Steps to reproduce
   - Expected vs actual behavior
   - Screenshots (if applicable)
   - Perfex CRM version
   - PHP version

### Suggesting Features

1. Open an issue with the `enhancement` label
2. Describe the feature and use case
3. Explain why it would be useful

### Submitting Pull Requests

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Make your changes
4. Test thoroughly on a Perfex CRM installation
5. Commit your changes (`git commit -m 'Add amazing feature'`)
6. Push to the branch (`git push origin feature/amazing-feature`)
7. Open a Pull Request

### Code Standards

- Follow PSR-12 coding standards for PHP
- Use meaningful variable and function names
- Comment complex logic
- Test on Perfex CRM 2.3.0+ before submitting

### Adding Translations

We need help translating the module! To add a language:

1. Copy `language/english/quick_customer_lang.php`
2. Create folder `language/{your_language}/`
3. Translate all strings
4. Submit a pull request

**Needed translations:** Spanish, French, German, Portuguese, Italian, Dutch, and more!

---

## Roadmap

- [x] Add support for estimates and proposals pages
- [ ] Add customer templates/presets
- [ ] Bulk customer import from modal
- [ ] Integration with other Perfex modules
- [ ] Enhanced field validation
- [ ] Customer duplicate detection
- [ ] Custom field support in modal
- [ ] Mobile app compatibility

Vote for features or suggest new ones in [Issues](https://github.com/sajdoko/perfex-quick-customer/issues)!

---

## Version History

See [CHANGELOG.md](CHANGELOG.md) for detailed version history.

**Current Version:** 1.1.0

- Added support for estimates and proposals pages
- Quick customer creation now works on invoice, estimate, and proposal pages
- Enhanced JavaScript to support multiple customer dropdown selectors

---

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## Acknowledgments

- Built for [Perfex CRM](https://www.perfexcrm.com/)
- Inspired by the need for streamlined invoice workflows
- Thanks to all contributors and users!

---

## Support

Need help? Here are your options:

1. [Report a Bug](https://github.com/sajdoko/perfex-quick-customer/issues)
2. [Request a Feature](https://github.com/sajdoko/perfex-quick-customer/issues)
3. Star this repo if you find it useful!

---

## Stay Updated

- Star this repository to stay updated
- Watch for new releases
- Fork to contribute

---

<div align="center">

**Made with ❤️ for Perfex CRM users**

[Report Bug](https://github.com/sajdoko/perfex-quick-customer/issues) • [Request Feature](https://github.com/sajdoko/perfex-quick-customer/issues)

</div>
