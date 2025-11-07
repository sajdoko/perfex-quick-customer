# Creating GitHub Releases for Perfex CRM Modules

## The Problem

When you create a GitHub release, the source code archive is named after the repository:

- Repository: `perfex-quick-customer`
- Release archive: `perfex-quick-customer-v1.1.0.zip`
- Extracted folder: `perfex-quick-customer-1.1.0/`

But Perfex CRM requires the module folder to be named exactly `quick_customer`.

## Solutions

### Option 1: Automated GitHub Actions (Recommended)

We've included a GitHub Actions workflow that automatically creates properly named releases when you push a tag.

**How to use:**

1. Update version in `quick_customer.php` and `install.php`
2. Update `CHANGELOG.md`
3. Commit changes:

   ```bash
   git add .
   git commit -m "Release v1.1.0"
   ```

4. Create and push a tag:

   ```bash
   git tag -a v1.1.0 -m "Version 1.1.0"
   git push origin v1.1.0
   ```

5. GitHub Actions will automatically:
   - Create a release
   - Build properly named archives (`quick_customer-v1.1.0.zip`)
   - Add release notes
   - Attach the archives

### Option 2: Manual Packaging Scripts

Use the included scripts to create properly named archives:

**Windows (PowerShell):**

```powershell
.\package.ps1
```

**Linux/Mac:**

```bash
chmod +x package.sh
./package.sh
```

These scripts will create archives that extract to `quick_customer/` instead of `perfex-quick-customer-v1.1.0/`.

### Option 3: Manual Instructions for Users

If you just want to document the manual process, add this to your release notes:

```markdown
## Installation from GitHub

⚠️ **Important:** After extracting the ZIP, you must rename the folder:

1. Download and extract `perfex-quick-customer-v1.1.0.zip`
2. Rename the extracted folder from `perfex-quick-customer-1.1.0` to `quick_customer`
3. Upload to `modules/quick_customer/`
```

## What We've Set Up

1. **`.github/workflows/release.yml`** - Automated release creation with proper naming
2. **`package.ps1`** - Windows packaging script
3. **`package.sh`** - Linux/Mac packaging script  
4. **`.gitattributes`** - Excludes development files from release archives
5. **Updated documentation** - Clear warnings about folder naming

## Testing a Release

Before creating a real release, test the workflow:

1. Create a test tag:

   ```bash
   git tag -a v1.1.0-test -m "Test release"
   git push origin v1.1.0-test
   ```

2. Check GitHub Actions tab for workflow execution

3. Download the release archive and test extraction:

   ```bash
   unzip quick_customer-v1.1.0-test.zip
   ls -la  # Should show 'quick_customer' folder
   ```

4. Delete the test release and tag if successful

## Best Practices

1. **Always test locally** with the packaging scripts before pushing tags
2. **Follow semantic versioning** (v1.1.0, v1.2.0, etc.)
3. **Update CHANGELOG.md** before every release
4. **Keep version numbers consistent** across:
   - `quick_customer.php` (Module header and constant)
   - `install.php` (version parameter)
   - Git tag
   - Release title

## Troubleshooting

**Workflow not running?**

- Check GitHub Actions is enabled in repository settings
- Verify the workflow file is in `.github/workflows/`

**Wrong folder name in archive?**

- Check the workflow's zip/tar commands
- Ensure scripts use `$MODULE_NAME` correctly

**Manual download still shows wrong name?**

- GitHub's automatic source code archives can't be customized
- Always use the release assets (attachments), not source code links
