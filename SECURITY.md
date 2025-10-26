# Security Policy

## Supported Versions

We release patches for security vulnerabilities for the following versions:

| Version | Supported          |
| ------- | ------------------ |
| 1.0.x   | :white_check_mark: |

## Reporting a Vulnerability

We take the security of Quick Customer module seriously. If you believe you have found a security vulnerability, please report it to us as described below.

### Please Do NOT:

- Open a public GitHub issue for security vulnerabilities
- Discuss the vulnerability in public forums or social media

### Please DO:

1. **Email us directly** at [your-email@example.com] with:
   - A description of the vulnerability
   - Steps to reproduce the issue
   - Potential impact
   - Suggested fix (if you have one)

2. **Give us reasonable time** to address the issue before public disclosure (typically 90 days)

3. **Act in good faith** towards our users and the project

### What to Expect:

- **Initial Response:** Within 48 hours
- **Status Update:** Within 7 days
- **Fix Timeline:** Depends on severity
  - Critical: Within 48 hours
  - High: Within 7 days
  - Medium: Within 30 days
  - Low: Next scheduled release

### Security Best Practices

When using this module:

1. **Keep Updated:** Always use the latest version
2. **Restrict Permissions:** Only give customer creation permission to trusted staff
3. **Monitor Logs:** Regularly check Perfex CRM logs for suspicious activity
4. **Validate Input:** The module validates input, but ensure your Perfex CRM is also updated
5. **Use HTTPS:** Always use HTTPS in production environments

### Known Security Considerations

- This module respects Perfex CRM's staff permission system
- Customer creation requires `customers - create` permission
- All inputs are sanitized using Perfex CRM's security functions
- CSRF protection is handled by Perfex CRM framework
- XSS protection via proper output escaping

### Disclosure Policy

Once a security vulnerability is fixed:

1. We will release a patched version
2. Update CHANGELOG.md with security fix notice
3. Credit the reporter (if they wish) in release notes
4. Publish a security advisory on GitHub

## Security Hall of Fame

We recognize and thank security researchers who help keep our users safe:

- None yet - be the first!

---

**Note:** This security policy is subject to change. Please check back regularly for updates.

Last updated: October 26, 2025
