# Changelog

All notable changes to the Quick Customer module will be documented in this file.

## [1.1.0] - 2025-11-07

### Added

- Support for estimates pages - Quick Add button now appears on estimate creation/edit pages
- Support for proposals pages - Quick Add button now appears on proposal creation/edit pages
- Enhanced JavaScript selector to support multiple customer dropdown types (invoices, estimates, proposals)
- Updated documentation to reflect new functionality across all document types

### Changed

- Module description updated to reflect support for invoices, estimates, and proposals
- Updated README.md with comprehensive documentation for all supported pages
- Updated USAGE.md with new examples for estimates and proposals workflows
- Enhanced asset loading logic to include estimates and proposals pages
- Modal injection now occurs on estimates and proposals pages

### Technical Details

- Extended `quick_customer_add_assets()` function to check for estimates and proposals URL segments
- Extended `quick_customer_add_modal()` function to load on estimates and proposals pages
- Updated JavaScript customer dropdown selector to support `select[name="rel_id"]` for proposals
- Maintained backward compatibility with existing invoice functionality
- No database schema changes required

### Improvements

- Unified customer creation experience across invoices, estimates, and proposals
- Consistent UI/UX across all supported document types
- Better workflow efficiency for sales and accounting teams
- Reduced context switching when creating different document types

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

### Version 1.2.0 (Planned)

- [ ] Add support for custom fields in modal
- [ ] Add customer groups selection
- [ ] Include option to send welcome email
- [ ] Add customer logo upload
- [ ] Multi-language support (Spanish, French, German)

### Version 1.3.0 (Planned)

- [ ] Add customer template presets
- [ ] Duplicate customer detection
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

### From Version 1.0.0 to 1.1.0

1. Backup your current `modules/quick_customer/` folder
2. Replace with new version files
3. Go to Setup → Modules
4. Deactivate and re-activate the module
5. Clear cache: Setup → Settings → Clear Cache
6. Verify functionality on invoices, estimates, and proposals pages

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
