# Visual Guide - Quick Customer Module

## User Interface Overview

```
┌─────────────────────────────────────────────────────────────────┐
│  Invoice Creation Page                                          │
├─────────────────────────────────────────────────────────────────┤
│                                                                  │
│  Select Customer:                                               │
│  ┌────────────────────────────────┐  ┌──────────────┐         │
│  │ [Dropdown: Select Customer]    │  │ Quick Add    │ ← NEW!  │
│  └────────────────────────────────┘  └──────────────┘         │
│                                                                  │
└─────────────────────────────────────────────────────────────────┘
```

## Modal Layout

```
╔═══════════════════════════════════════════════════════════════╗
║  Add New Customer                                         [X] ║
╠═══════════════════════════════════════════════════════════════╣
║                                                                ║
║  COMPANY INFORMATION                                          ║
║  ─────────────────────────────────────────────────────────── ║
║  Company Name: [________________*]  VAT: [____________]       ║
║  Phone: [________________]  Website: [________________]       ║
║  Country: [Dropdown▼]  Currency: [Dropdown▼]                 ║
║  Address: [_____________________________________]             ║
║  City: [________]  State: [________]  Zip: [________]        ║
║                                                                ║
║  PRIMARY CONTACT                                              ║
║  ─────────────────────────────────────────────────────────── ║
║  First Name: [________________*]  Last Name: [____________*]  ║
║  Email: [________________*]  Phone: [________________]        ║
║                                                                ║
║  ☑ Use company address for billing                            ║
║  ☐ Add shipping address                                       ║
║                                                                ║
╠═══════════════════════════════════════════════════════════════╣
║                                    [Cancel] [Create & Select] ║
╚═══════════════════════════════════════════════════════════════╝
```

## Button States

### Normal State
```
┌──────────────────┐
│ 🔵 Quick Add     │  ← Blue button, clickable
└──────────────────┘
```

### Hover State
```
┌──────────────────┐
│ 🔷 Quick Add     │  ← Darker blue, pointer cursor
└──────────────────┘
```

### Creating State
```
┌──────────────────┐
│ ⏳ Creating...   │  ← Disabled, with spinner
└──────────────────┘
```

## User Flow Diagram

```
START: User on Invoice Page
        │
        ▼
   Click "Quick Add" Button
        │
        ▼
   Modal Opens with Form
        │
        ▼
   Fill Required Fields:
   • Company Name
   • First Name
   • Last Name
   • Email
        │
        ▼
   [Optional] Add More Info:
   • Address
   • Phone
   • VAT
   • Billing/Shipping
        │
        ▼
   Click "Create & Select"
        │
        ▼
   AJAX Request to Server
        │
        ├─── Success ────────┐
        │                    │
        ▼                    ▼
   Show Success Message   Modal Closes
        │                    │
        ▼                    │
   Customer Auto-Selected   │
        │                    │
        └────────┬───────────┘
                 │
                 ▼
   Invoice Ready with Customer
                 │
                 ▼
   Continue Adding Items
                 │
                 ▼
              DONE!
```

## Form Validation

### Required Fields (Red asterisk *)
```
Company Name:     [________________*]  ← Must fill
First Name:       [________________*]  ← Must fill
Last Name:        [________________*]  ← Must fill
Email:            [________________*]  ← Must fill, valid email format
```

### Optional Fields
```
VAT:              [________________]   ← Optional
Phone:            [________________]   ← Optional
Website:          [________________]   ← Optional, URL format if filled
Address:          [________________]   ← Optional
City/State/Zip:   [________________]   ← Optional
```

## Expandable Sections

### Billing Address Section (Initially Hidden)
```
☐ Use company address for billing  ← Unchecked
    │
    ▼
┌───────────────────────────────────┐
│ BILLING ADDRESS                   │
│ ───────────────────────────────  │
│ Street: [___________________]     │
│ City: [_____] State: [_____]     │
│ Country: [Dropdown▼] Zip: [___]  │
└───────────────────────────────────┘
```

### Shipping Address Section (Initially Hidden)
```
☐ Add shipping address  ← Unchecked
    │
    ▼
(Hidden until checked)
    │
    │ (User checks the box)
    ▼
┌───────────────────────────────────┐
│ SHIPPING ADDRESS                  │
│ ───────────────────────────────  │
│ Street: [___________________]     │
│ City: [_____] State: [_____]     │
│ Country: [Dropdown▼] Zip: [___]  │
└───────────────────────────────────┘
```

## Success Flow

```
1. User clicks "Create & Select"
   ┌──────────────────────────┐
   │ ✔ Create & Select        │
   └──────────────────────────┘

2. Button changes to loading
   ┌──────────────────────────┐
   │ ⏳ Creating...           │
   └──────────────────────────┘

3. Success notification appears
   ┌──────────────────────────────────────┐
   │ ✓ Customer created successfully!     │
   └──────────────────────────────────────┘

4. Modal closes automatically

5. Customer dropdown updates
   Before:  [Select Customer        ▼]
   After:   [ACME Corporation       ▼]  ← Auto-selected

6. Billing info auto-fills
   Bill To:
   ─────────
   ACME Corporation
   123 Main Street
   New York, NY 10001
   United States
```

## Error Handling

```
Validation Error:
┌────────────────────────────────────────┐
│ ⚠ Please fill all required fields     │
└────────────────────────────────────────┘

Permission Error:
┌────────────────────────────────────────┐
│ ⛔ Access denied                       │
└────────────────────────────────────────┘

Server Error:
┌────────────────────────────────────────┐
│ ❌ Error creating customer            │
└────────────────────────────────────────┘
```

## Mobile View

```
┌────────────────────────┐
│ Invoice Creation       │
├────────────────────────┤
│ Select Customer:       │
│ ┌──────────────────┐  │
│ │ Select Customer ▼│  │
│ └──────────────────┘  │
│ ┌──────────────────┐  │
│ │ 🔵 Quick Add     │  │
│ └──────────────────┘  │
└────────────────────────┘

Modal on Mobile:
┌────────────────────────┐
│ Add Customer      [X]  │
├────────────────────────┤
│ (Full screen mode)     │
│ (Scrollable)          │
│                        │
│ [Company Name*]        │
│ [First Name*]          │
│ [Last Name*]           │
│ [Email*]               │
│ ...                    │
│                        │
├────────────────────────┤
│ [Cancel]               │
│ [Create & Select]      │
└────────────────────────┘
```

## Integration Points

```
┌─────────────────────────────────────────────────────────────┐
│                    Perfex CRM                               │
├─────────────────────────────────────────────────────────────┤
│                                                              │
│  Invoices Module ──┬──> Quick Customer Module               │
│                    │                                        │
│  Estimates Module ─┤    (Can be extended to other modules)  │
│                    │                                        │
│  Proposals Module ─┘                                        │
│                                                              │
│  All use: Clients_model ──> Database                        │
│                                                              │
└─────────────────────────────────────────────────────────────┘
```

## Data Flow

```
User Input in Modal
    ↓
JavaScript (quick_customer.js)
    ↓
AJAX POST → admin/quick_customer/quick_customer/create
    ↓
Controller (Quick_customer.php)
    ↓
Clients_model->add()
    ↓
Database Insert
    ↓
Response (JSON)
    ↓
JavaScript handles response
    ↓
Update UI:
  • Close modal
  • Update dropdown
  • Select customer
  • Fill billing info
  • Show notification
```

## File Structure Visualization

```
modules/quick_customer/
│
├── 📄 quick_customer.php          ← Module registration
├── 📄 install.php                 ← Activation hook
├── 📄 README.md                   ← Full documentation
├── 📄 INSTALL.md                  ← Quick start guide
├── 📄 USAGE.md                    ← Usage examples
├── 📄 CHANGELOG.md                ← Version history
├── 📄 VISUAL_GUIDE.md            ← This file
│
├── 📁 assets/
│   ├── 📄 quick_customer.js       ← Frontend logic
│   └── 📄 quick_customer.css      ← Styles
│
├── 📁 controllers/
│   └── 📄 Quick_customer.php      ← AJAX handler
│
├── 📁 language/
│   └── 📁 english/
│       └── 📄 quick_customer_lang.php  ← Translations
│
└── 📁 views/
    └── 📄 customer_modal.php      ← Modal HTML
```

## Browser Developer Tools

### Check Console for Logs
```
F12 → Console Tab

On Success:
✓ Customer created: ID 123

On Error:
✗ Error: {error details}
```

### Network Tab
```
F12 → Network Tab → XHR

Request:
POST admin/quick_customer/quick_customer/create
Status: 200 OK

Response:
{
  "success": true,
  "message": "Customer created successfully!",
  "customer_id": 123,
  "customer": {...}
}
```

## Permissions Check

```
Setup → Staff → [Select Staff] → Permissions
                                      │
                                      ▼
┌──────────────────────────────────────────────┐
│ Customers                                    │
├──────────────────────────────────────────────┤
│ ☑ View (Own)                                 │
│ ☑ View                                       │
│ ☑ Create      ← MUST BE CHECKED!             │
│ ☑ Edit                                       │
│ ☐ Delete                                     │
└──────────────────────────────────────────────┘
```

## Common UI States

### 1. Initial Load
```
Invoice page loads → Module checks URL → Injects button
```

### 2. Button Click
```
Click → Modal opens → Selectpickers initialize → Focus on company name
```

### 3. Form Filling
```
Type → Real-time validation → Required fields highlighted
```

### 4. Submission
```
Submit → Button disables → Spinner shows → Wait for response
```

### 5. Success
```
Response → Notification → Modal closes → Dropdown updates → Auto-select
```

---

**Legend:**
- 🔵 = Interactive element
- * = Required field
- ▼ = Dropdown menu
- ☑ = Checked checkbox
- ☐ = Unchecked checkbox
- ✓ = Success
- ✗ = Error
- ⚠ = Warning
- → = Flow direction
