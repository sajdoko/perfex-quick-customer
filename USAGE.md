# Quick Customer Module - Usage Examples

## Example 1: Basic Customer Creation

### Scenario

You're creating an invoice, estimate, or proposal and need to add a new customer quickly.

### Steps

1. **Open Document Creation**
   - Navigate to: Sales → Invoices (or Estimates, or Proposals)
   - Click "New Invoice" (or "New Estimate", or "New Proposal")

2. **Click Quick Add Button**
   - Find the customer dropdown field
   - Click the blue "Quick Add" button next to it

3. **Fill Basic Information**

   ```
   Company Name: ACME Corporation
   VAT Number: GB123456789
   Phone: +1 555-0100
   Website: https://acme.com
   Country: United States
   Currency: USD
   ```

4. **Add Primary Contact**

   ```
   First Name: John
   Last Name: Doe
   Email: john.doe@acme.com
   Contact Phone: +1 555-0101
   ```

5. **Save**
   - Leave "Use company address for billing" checked
   - Click "Create & Select"

6. **Result**
   - Customer created instantly
   - Automatically selected in invoice/estimate/proposal
   - Ready to add document items

---

## Example 2: Customer with Full Address Details

### Scenario

Creating a customer with complete billing and shipping addresses.

### Steps

1. **Company & Contact Info**

   ```
   Company: Tech Solutions Ltd
   First Name: Sarah
   Last Name: Johnson
   Email: sarah.j@techsolutions.com
   ```

2. **Company Address**

   ```
   Address: 123 Innovation Drive, Suite 100
   City: San Francisco
   State: California
   Zip: 94102
   Country: United States
   ```

3. **Billing Address (Different)**
   - Uncheck "Use company address for billing"
   - Fill separate billing address:

   ```
   Billing Street: 456 Finance Boulevard
   Billing City: New York
   Billing State: NY
   Billing Zip: 10001
   Billing Country: United States
   ```

4. **Add Shipping Address**
   - Check "Add shipping address"
   - Fill shipping details:

   ```
   Shipping Street: 789 Warehouse Road
   Shipping City: Los Angeles
   Shipping State: CA
   Shipping Zip: 90001
   Shipping Country: United States
   ```

5. **Create**
   - Click "Create & Select"
   - All addresses are now available in the document

---

## Example 3: International Customer

### Scenario

Adding a customer from another country with VAT.

### Steps

1. **Company Details**

   ```
   Company: European Trading GmbH
   VAT: DE987654321
   Website: https://eurotrading.de
   Country: Germany
   Currency: EUR (Euro)
   ```

2. **Address**

   ```
   Address: Hauptstraße 45
   City: Berlin
   Zip: 10115
   State: (leave empty for Germany)
   ```

3. **Contact**

   ```
   First Name: Hans
   Last Name: Schmidt
   Email: h.schmidt@eurotrading.de
   Phone: +49 30 12345678
   ```

4. **Create & Use**
   - Invoice/Estimate/Proposal automatically uses EUR currency
   - VAT number included for EU compliance

---

## Example 4: Quick B2B Customer

### Scenario

Fast creation during a phone call with a new business customer.

### Minimal Required Fields

```
Company Name: QuickBuy Industries
First Name: Mike
Last Name: Brown
Email: mike@quickbuy.com
```

**That's it!** Leave everything else empty and click "Create & Select".

### What Happens

- Customer created with minimal info
- Can add more details later from Customers section
- Invoice/Estimate/Proposal can proceed immediately

---

## Example 5: Customer for Drop Shipping

### Scenario

Customer needs product shipped to end-customer address.

### Steps

1. **Customer Info**

   ```
   Company: Retail Partners Inc
   Contact: Lisa Wong
   Email: lisa@retailpartners.com
   ```

2. **Billing Address** (Customer's office)

   ```
   Street: 100 Business Park
   City: Chicago
   State: IL
   Zip: 60601
   ```

3. **Shipping Address** (End customer)
   - Check "Add shipping address"

   ```
   Street: 25 Residential Lane
   City: Austin
   State: TX
   Zip: 73301
   ```

4. **Result**
   - Invoice bills to Chicago office
   - Products ship to Austin address
   - All in one customer record

---

## Example 6: Creating Estimate with New Customer

### Scenario

Creating a project estimate for a potential client that doesn't exist in the system yet.

### Steps

1. **Navigate to Estimates**
   - Go to Sales → Estimates
   - Click "New Estimate"

2. **Click Quick Add**
   - Click the "Quick Add" button next to the customer dropdown

3. **Enter Customer Details**
   ```
   Company: Future Client Corp
   First Name: Jane
   Last Name: Smith
   Email: jane@futureclient.com
   Phone: +1 555-9999
   Country: United States
   ```

4. **Create & Estimate**
   - Click "Create & Select"
   - Customer is now selected in the estimate
   - Continue building your estimate

### Result

- New customer created in system
- Customer auto-selected in estimate
- Can convert to invoice later when deal closes

---

## Example 7: Creating Proposal for New Lead

### Scenario

You're preparing a proposal for a lead you just spoke with on the phone.

### Steps

1. **Navigate to Proposals**
   - Go to Sales → Proposals
   - Click "New Proposal"

2. **Quick Add Customer**
   - Click "Quick Add" button

3. **Fill Minimal Info**
   ```
   Company: StartupXYZ Inc
   First Name: Tom
   Last Name: Wilson
   Email: tom@startupxyz.com
   Phone: +1 555-7777
   ```

4. **Save & Continue**
   - Click "Create & Select"
   - Customer is now in the system
   - Proposal is linked to customer

### Result

- Lead is now a customer in Perfex
- Proposal can be sent immediately
- Future communication tracked under this customer

---

## Example 8: Multi-Document Workflow

### Scenario

Creating estimate, then proposal, then invoice for same new customer.

### Steps

1. **Create Customer via Estimate**
   - Create new estimate
   - Use Quick Add to create customer "ABC Services"
   - Complete and send estimate

2. **Create Proposal (Same Customer)**
   - Create new proposal
   - Select existing "ABC Services" from dropdown
   - No need to recreate customer

3. **Convert to Invoice**
   - Customer accepts
   - Create invoice
   - "ABC Services" already in system
   - All documents linked to same customer

### Result

- Single customer record
- Full history: estimate → proposal → invoice
- Clean customer relationship management

---

## Workflow Comparisons

### OLD WAY (Without Module)

1. Click away from invoice/estimate/proposal
2. Navigate to Customers section
3. Click "New Customer"
4. Fill customer form
5. Save customer
6. Navigate back to Invoices/Estimates/Proposals
7. Click "New Invoice/Estimate/Proposal"
8. Search for customer
9. Select customer
10. Continue with document

**Time:** ~2-3 minutes

### NEW WAY (With Quick Customer Module)

1. On invoice/estimate/proposal page, click "Quick Add"
2. Fill customer form in modal
3. Click "Create & Select"
4. Continue with document

**Time:** ~30 seconds

**Time Saved:** 75-85% faster! ⚡

---

## Tips & Best Practices

### 1. Use Keyboard Shortcuts

- **Tab** to move between fields
- **Enter** to submit form (when in text input)
- **ESC** to close modal

### 2. Required Fields Only

For fastest creation, fill only:

- Company Name
- First Name
- Last Name
- Email

Add other details later if needed.

### 3. Copy/Paste from Email

If customer info is in an email:

- Copy company name → Paste in Company field
- Copy email → Paste in Email field
- Copy phone → Paste in Phone field

### 4. Use Default Country

Set your default country in:

- Setup → Settings → Company
- Saves time for local customers

### 5. Currency Auto-Select

Choose customer's currency first:

- Document will use correct currency
- Prevents errors later

### 6. VAT Number Format

Include country code:

- Good: `GB123456789`
- Bad: `123456789`

### 7. Billing Same as Company

Keep checked for most B2B customers:

- Saves time
- Reduces data entry errors

### 8. Add Shipping Only When Needed

Don't enable shipping address unless:

- Product is being shipped
- Address differs from billing

---

## Common Use Cases

### Retail/E-commerce

Quick customer creation for online orders

- Company: Customer's business name (or "Individual" + their name)
- Email: For invoice/document delivery
- Shipping: End customer address

### Service Business

Creating client records during consultations

- Minimal info to start
- Add details during project

### Wholesale

Adding retail partners quickly

- Full business details
- Multiple addresses common
- VAT numbers required

### Freelance/Consulting

Quick customer records for new clients

- Often just name + email needed
- Billing address for legal compliance

---

## Troubleshooting Examples

### Problem: Can't See Quick Add Button

**Solution:**

1. Verify module is activated (Setup → Modules)
2. Clear cache (Setup → Settings → Clear Cache)
3. Hard refresh browser (Ctrl+F5)

### Problem: "Access Denied" Error

**Solution:**

1. Go to Setup → Staff
2. Select your staff account
3. Enable "Customers - Create" permission

### Problem: Customer Not Auto-Selected

**Solution:**

1. Wait for success message
2. Dropdown should update automatically
3. If not, manually select from dropdown

### Problem: Billing Address Not Filling

**Solution:**

1. Customer was created successfully
2. Refresh the page
3. Select customer again
4. Billing details should appear

---

## Advanced Examples

### Using with Estimates

1. Create customer via Quick Add on estimate page
2. Customer auto-selected in estimate
3. Build estimate with line items
4. Send estimate to customer
5. Customer record available for future documents

### Using with Proposals

1. Create customer via Quick Add on proposal page
2. Customer auto-selected in proposal
3. Build proposal content
4. Send proposal to customer
5. Convert to invoice when accepted

### With Projects

1. Create customer with Quick Add
2. Set up document normally
3. Create project for customer
4. Link invoices/estimates to project

### Recurring Invoices

1. Create customer with Quick Add
2. Set up invoice normally
3. Enable recurring billing
4. Customer reused for all recurring invoices

### Multiple Contacts

1. Create customer with primary contact
2. Later: Go to Customers → [Customer] → Contacts
3. Add additional contacts as needed
4. Quick Add creates the first contact only

---

## Integration Examples

### Cross-Document Usage

- Create customer via invoice Quick Add
- Use same customer in estimates
- Use same customer in proposals
- Consistent customer data across all documents

### With Estimates Module

- Quick Add available on estimate pages
- Create customer while building estimate
- Customer shared across all modules

### With Proposals Module

- Quick Add available on proposal pages
- Create customer while drafting proposal
- Customer data synchronized system-wide

### With Projects Module

- Customer created for invoice
- Can create project immediately
- Link invoices to projects

---

**Remember:** Quick Customer module is about speed and convenience during invoice, estimate, and proposal creation. You can always edit and add more details to the customer record later from the Customers section!
