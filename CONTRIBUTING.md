# Contributing to Quick Customer Module

First off, thank you for considering contributing to the Quick Customer module! It's people like you that make this module better for everyone.

## Code of Conduct

By participating in this project, you are expected to uphold our Code of Conduct:

- Be respectful and inclusive
- Welcome newcomers
- Focus on what is best for the community
- Show empathy towards other community members

## How Can I Contribute?

### Reporting Bugs

Before creating bug reports, please check existing issues as you might find that you don't need to create one. When you are creating a bug report, please include as many details as possible:

- **Use a clear and descriptive title**
- **Describe the exact steps to reproduce the problem**
- **Provide specific examples**
- **Describe the behavior you observed and what you expected**
- **Include screenshots if relevant**
- **Include your environment details:**
  - Perfex CRM version
  - PHP version
  - Browser and version
  - Operating system

### Suggesting Features

Feature suggestions are tracked as GitHub issues. When creating a feature suggestion:

- **Use a clear and descriptive title**
- **Provide a detailed description of the suggested feature**
- **Explain why this feature would be useful**
- **List any alternatives you've considered**

### Pull Requests

1. Fork the repository
2. Create a new branch from `main`:
   ```bash
   git checkout -b feature/your-feature-name
   ```
3. Make your changes
4. Test thoroughly on a Perfex CRM installation
5. Commit your changes with clear commit messages:
   ```bash
   git commit -m "Add feature: description of feature"
   ```
6. Push to your fork:
   ```bash
   git push origin feature/your-feature-name
   ```
7. Open a Pull Request

## Development Guidelines

### PHP Code Standards

- Follow PSR-12 coding standards
- Use meaningful variable and function names
- Add comments for complex logic
- Keep functions focused and small
- Use type hints where appropriate

Example:
```php
/**
 * Create a new customer from modal form
 *
 * @return void Outputs JSON response
 */
public function create()
{
    // Implementation
}
```

### JavaScript Code Standards

- Use ES5 syntax for maximum compatibility
- Use semicolons
- Use meaningful variable names
- Add comments for complex logic
- Wrap code in IIFE or jQuery ready function

Example:
```javascript
(function($) {
    'use strict';
    
    // Your code here
    
})(jQuery);
```

### CSS Code Standards

- Use meaningful class names
- Prefix custom classes to avoid conflicts
- Keep specificity low
- Add comments for sections

Example:
```css
/* Quick Customer Modal Styles */
.quick-customer-modal .form-group {
    margin-bottom: 15px;
}
```

### Testing Checklist

Before submitting a pull request, ensure:

- [ ] Code works on Perfex CRM 2.3.0+
- [ ] Tested on PHP 8.1+
- [ ] No JavaScript errors in console
- [ ] Module activates/deactivates properly
- [ ] Permissions are respected
- [ ] Works in Chrome, Firefox, Safari
- [ ] Responsive design works on tablet
- [ ] No conflicts with other modules
- [ ] Language strings are translatable

## Adding Translations

We welcome translations! To add a new language:

1. Copy `language/english/quick_customer_lang.php`
2. Create folder: `language/{language_code}/`
3. Translate all strings in the file
4. Test the translation in Perfex CRM
5. Submit a pull request

Example language codes:
- Spanish: `spanish`
- French: `french`
- German: `german`
- Portuguese: `portuguese`

## Commit Message Guidelines

Use clear and meaningful commit messages:

- `feat:` New feature
- `fix:` Bug fix
- `docs:` Documentation changes
- `style:` Code style changes (formatting)
- `refactor:` Code refactoring
- `test:` Adding or updating tests
- `chore:` Maintenance tasks

Examples:
```
feat: Add duplicate customer detection
fix: Modal not closing after creation
docs: Update installation instructions
style: Format code according to PSR-12
```

## Project Structure

Understanding the module structure will help you contribute:

```
quick_customer/
├── quick_customer.php          # Main module file
├── install.php                 # Activation hook
├── assets/
│   ├── quick_customer.js      # Frontend JavaScript
│   └── quick_customer.css     # Styles
├── controllers/
│   └── Quick_customer.php     # AJAX controller
├── language/
│   └── english/
│       └── quick_customer_lang.php  # Translations
└── views/
    └── customer_modal.php     # Modal HTML
```

## Questions?

Feel free to open an issue with the `question` label if you have any questions about contributing.

## Recognition

Contributors will be recognized in the README.md file. Thank you for your contributions! 🎉
