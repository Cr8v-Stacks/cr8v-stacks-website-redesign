#!/usr/bin/env pwsh
<#
.SYNOPSIS
    Deploys the Tropos (cr8v-stacks) theme to your Local WP devplayground install.
    Run this any time you want to push changes live to Local WP.

.USAGE
    Right-click → Run with PowerShell
    OR in terminal: .\deploy-to-local.ps1
#>

$src  = "C:\Users\HP\Downloads\Mega Menu\wp-theme\cr8v-stacks"
$dest = "C:\Users\HP\Local Sites\devplayground\app\public\wp-content\themes\cr8v-stacks"

Write-Host ""
Write-Host "Deploying Tropos theme to Local WP..." -ForegroundColor Cyan

# Remove old copy
if (Test-Path $dest) {
    Remove-Item $dest -Recurse -Force
}

# Copy fresh
Copy-Item $src $dest -Recurse -Force

# Verify
$count = (Get-ChildItem $dest -Recurse -File).Count
Write-Host "Done! $count files deployed to:" -ForegroundColor Green
Write-Host $dest -ForegroundColor White
Write-Host ""
Write-Host "Refresh your browser — changes are live." -ForegroundColor Yellow
