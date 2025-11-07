#!/bin/bash
# Quick Customer Module - Package Script
# Creates a properly named release archive for Perfex CRM

VERSION="1.1.0"
MODULE_NAME="quick_customer"
ARCHIVE_NAME="${MODULE_NAME}-v${VERSION}"

echo "Creating release archive: ${ARCHIVE_NAME}.zip"

# Create temporary directory with correct name
TEMP_DIR="/tmp/${MODULE_NAME}"
rm -rf "$TEMP_DIR"
mkdir -p "$TEMP_DIR"

# Copy files, excluding development files
echo "Copying files..."
rsync -av --progress . "$TEMP_DIR" \
  --exclude='.git' \
  --exclude='.github' \
  --exclude='.gitattributes' \
  --exclude='.gitignore' \
  --exclude='CONTRIBUTING.md' \
  --exclude='SECURITY.md' \
  --exclude='package.ps1' \
  --exclude='package.sh' \
  --exclude='*.zip' \
  --exclude='*.tar.gz'

# Create ZIP archive
echo "Creating ZIP archive..."
cd /tmp
zip -r "${ARCHIVE_NAME}.zip" "$MODULE_NAME/"

# Create tar.gz archive
echo "Creating tar.gz archive..."
tar -czf "${ARCHIVE_NAME}.tar.gz" "$MODULE_NAME/"

# Move archives to original directory
mv "${ARCHIVE_NAME}.zip" "$OLDPWD/"
mv "${ARCHIVE_NAME}.tar.gz" "$OLDPWD/"

# Cleanup
rm -rf "$TEMP_DIR"

echo ""
echo "Success! Created:"
echo "  - ${ARCHIVE_NAME}.zip"
echo "  - ${ARCHIVE_NAME}.tar.gz"
echo ""
echo "The archives extract to a folder named '$MODULE_NAME' (required by Perfex CRM)"
echo ""
echo "To test extraction:"
echo "  unzip ${ARCHIVE_NAME}.zip -d ./test"
