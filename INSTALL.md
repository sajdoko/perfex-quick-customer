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

1. Go to **Sales → Invoices → New Invoice** (or **Sales → Estimates → New Estimate**, or **Sales → Proposals → New Proposal**)
2. Click the blue **"Quick Add"** button next to customer dropdown
3. Fill in customer details
4. Click **"Create & Select"**

That's it! The customer is created and automatically selected.

## What This Module Does

Adds a "Quick Add" button on invoice, estimate, and proposal creation/edit pages
Opens a modal form to create new customers
Automatically selects the new customer in the document
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

## Important: GitHub Release Installation

If you download from GitHub Releases, the ZIP file will extract as `perfex-quick-customer-x.x.x/` instead of `quick_customer/`.

**You must rename the folder:**

1. Extract the ZIP file
2. Rename `perfex-quick-customer-x.x.x` to `quick_customer`
3. Upload the `quick_customer` folder to `modules/`

**Correct structure:**
```
modules/
└── quick_customer/          ← Must be named exactly this
    ├── quick_customer.php
    └── ...
```

**Wrong structure (will not work):**
```
modules/
└── perfex-quick-customer-1.1.0/   ← Wrong! Module won't load
    ├── quick_customer.php
    └── ...
```

## Troubleshooting

**Module not showing in Setup → Modules?**

- Check folder name is exactly `quick_customer` (not `perfex-quick-customer`)
- Ensure it's in the `modules/` directory
- Check file permissions (755 for folders, 644 for files)

**Button not showing?**

- Clear cache: Setup → Settings → Clear Cache
- Hard refresh browser (Ctrl+F5)

**Permission error?**

- Ensure staff has "Create Customers" permission
- Check: Setup → Staff → [Your Staff] → Permissions

**"No migration found" error?**

- This shouldn't happen with v1.1.0+
- If it does, deactivate and reactivate the module

**Need help?**

- See full README.md for detailed documentation
- Check browser console for errors (F12)
- Report issues: https://github.com/sajdoko/perfex-quick-customer/issues