# Changelog

All notable changes to the Quick Customer module will be documented in this file.

## [1.0.0] - 2025-10-26

### Added

- Initial release of Quick Customer module
- Quick Add button on invoice creation/edit pages
- Modal form for creating customers
- Company information fields (name, VAT, phone, website, address)
- Primary contact creation (first name, last name, email, phone)
- Billing address configuration with option to use company address
- Optional shipping address fields
- Currency selection per customer
- Country selection with live search
- AJAX form submission for seamless user experience
- Auto-selection of newly created customer in invoice
- Auto-fill of billing/shipping information in invoice
- Permission-aware functionality (respects "Create Customers" permission)
- Support for customer admin assignment when staff can't view all customers
- Comprehensive error handling and validation
- Success/error notifications using Perfex's alert system
- Clean modal reset on close
- Bootstrap 3 compatible UI
- English language translations
- Installation documentation (README.md and INSTALL.md)

### Technical Details

- No database schema changes required
- Uses Perfex CRM's existing Clients_model
- Hooks: admin_init, app_admin_head, after_custom_fields_select_options
- Assets loaded only on invoice pages for performance
- Follows Perfex CRM module development standards
- Compatible with CodeIgniter 3.1.11 framework

### Features

- Quick customer creation from invoice page
- Modal-based interface
- Full customer data capture
- Contact information included
- Billing/shipping address support
- Auto-select and auto-fill functionality
- Permission system integration
- Responsive design
- Easy customization

### Known Limitations

- Currently supports English language only (easily extendable)
- Custom fields must be manually added if needed
- Requires JavaScript enabled in browser

### Browser Compatibility

- Chrome 60+
- Firefox 60+
- Safari 12+
- Edge 79+

### Requirements

- Perfex CRM 2.3.0 or higher
- PHP 8.1 or higher
- MySQL/MariaDB database

---

## Future Enhancements (Planned)

### Version 1.1.0 (Planned)

- [ ] Add support for custom fields in modal
- [ ] Add customer groups selection
- [ ] Include option to send welcome email
- [ ] Add customer logo upload
- [ ] Multi-language support (Spanish, French, German)

### Version 1.2.0 (Planned)

- [ ] Add customer template presets
- [ ] Duplicate customer detection
- [ ] Integration with other sales modules (estimates, proposals)
- [ ] Batch customer import via CSV
- [ ] Customer validation rules configuration

### Version 2.0.0 (Planned)

- [ ] Advanced custom fields support
- [ ] Customer creation from other modules
- [ ] API endpoint for external integrations
- [ ] Enhanced UI with modern design
- [ ] Mobile-optimized interface

---

## Upgrade Guide

### From Version X.X.X to 1.0.0

This is the initial release. No upgrade needed.

### Future Upgrades

When upgrading:

1. Backup your current `modules/quick_customer/` folder
2. Replace with new version files
3. Go to Setup → Modules
4. Deactivate and re-activate the module
5. Clear cache: Setup → Settings → Clear Cache

---

## Support

For issues, feature requests, or contributions:

- Check the README.md for detailed documentation
- Review the troubleshooting section
- Ensure you're using the latest version

---

**Note:** Version numbers follow [Semantic Versioning](https://semver.org/)

- MAJOR version for incompatible API changes
- MINOR version for new functionality in a backwards compatible manner
- PATCH version for backwards compatible bug fixes
