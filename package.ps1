# Quick Customer Module - Package Script
# Creates a properly named release archive for Perfex CRM

$VERSION = "1.1.0"
$MODULE_NAME = "quick_customer"
$ARCHIVE_NAME = "$MODULE_NAME-v$VERSION"

Write-Host "Creating release archive: $ARCHIVE_NAME.zip" -ForegroundColor Green

# Files to exclude
$excludeFiles = @(
    ".git",
    ".github",
    ".gitattributes",
    ".gitignore",
    "CONTRIBUTING.md",
    "SECURITY.md",
    "package.ps1",
    "package.sh",
    "*.zip"
)

# Create temporary directory with correct name
$tempDir = Join-Path $env:TEMP $MODULE_NAME
if (Test-Path $tempDir) {
    Remove-Item $tempDir -Recurse -Force
}
New-Item -ItemType Directory -Path $tempDir | Out-Null

# Copy files
Write-Host "Copying files..." -ForegroundColor Yellow
Get-ChildItem -Path . -Recurse | ForEach-Object {
    $shouldExclude = $false
    foreach ($exclude in $excludeFiles) {
        if ($_.FullName -like "*$exclude*") {
            $shouldExclude = $true
            break
        }
    }
    
    if (-not $shouldExclude) {
        $relativePath = $_.FullName.Substring($PWD.Path.Length + 1)
        $targetPath = Join-Path $tempDir $relativePath
        
        if ($_.PSIsContainer) {
            New-Item -ItemType Directory -Path $targetPath -Force | Out-Null
        } else {
            Copy-Item $_.FullName -Destination $targetPath -Force
        }
    }
}

# Create archive with quick_customer folder at root
Write-Host "Creating ZIP archive..." -ForegroundColor Yellow
$archivePath = Join-Path $PWD "$ARCHIVE_NAME.zip"
if (Test-Path $archivePath) {
    Remove-Item $archivePath -Force
}

# Compress from parent directory to include the folder name
$parentTemp = Split-Path $tempDir -Parent
Compress-Archive -Path $tempDir -DestinationPath $archivePath

# Cleanup
Remove-Item $tempDir -Recurse -Force

Write-Host "`nSuccess! Created: $archivePath" -ForegroundColor Green
Write-Host "`nThe archive extracts to a folder named '$MODULE_NAME' (required by Perfex CRM)" -ForegroundColor Cyan
Write-Host "`nTo test extraction:" -ForegroundColor Yellow
Write-Host "  Expand-Archive -Path $ARCHIVE_NAME.zip -DestinationPath ./test" -ForegroundColor Gray
