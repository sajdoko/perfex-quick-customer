# Quick Installation Guide

## Quick Start (5 Minutes)

### 1. Upload Module

Upload the `quick_customer` folder to your Perfex CRM `modules/` directory.

### 2. Activate Module

1. Login as Administrator
2. Go to **Setup → Modules**
3. Find **Quick Customer**
4. Click **Activate**

### 3. Start Using

1. Go to **Sales → Invoices → New Invoice**
2. Click the blue **"Quick Add"** button next to customer dropdown
3. Fill in customer details
4. Click **"Create & Select"**

That's it! The customer is created and automatically selected.

## What This Module Does

Adds a "Quick Add" button on invoice creation/edit pages
Opens a modal form to create new customers
Automatically selects the new customer in the invoice
Auto-fills billing and shipping information
Works with existing Perfex CRM permissions

## Requirements

- Perfex CRM 2.3.0 or higher
- PHP 8.1 or higher
- Staff permission: "Create Customers"

## Folder Structure

```
modules/quick_customer/
├── quick_customer.php           # Main module registration
├── install.php                  # Activation hook
├── README.md                    # Full documentation
├── INSTALL.md                   # This file
├── assets/
│   ├── quick_customer.js        # JavaScript functionality
│   └── quick_customer.css       # Custom styles
├── controllers/
│   └── Quick_customer.php       # AJAX handler
├── language/
│   └── english/
│       └── quick_customer_lang.php  # Translations
└── views/
    └── customer_modal.php       # Modal template
```

## Troubleshooting

**Button not showing?**

- Clear cache: Setup → Settings → Clear Cache
- Hard refresh browser (Ctrl+F5)

**Permission error?**

- Ensure staff has "Create Customers" permission
- Check: Setup → Staff → [Your Staff] → Permissions

**Need help?**

- See full README.md for detailed documentation
- Check browser console for errors (F12)

## Next Steps

- Read the full **README.md** for customization options
- Add translations for other languages
- Customize button text or styling
- Add custom fields as needed

Enjoy faster invoice creation! 🚀
