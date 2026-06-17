#!/bin/bash
# Quick verification script for Excellencial website

echo "==== Excellencial Website Setup Verification ===="
echo ""

echo "1. Checking file structure..."
if [ -f "public/css/main.css" ]; then
    echo "✓ CSS file found (public/css/main.css)"
else
    echo "✗ CSS file missing!"
fi

if [ -f "public/js/main.js" ]; then
    echo "✓ JavaScript file found (public/js/main.js)"
else
    echo "✗ JavaScript file missing!"
fi

if [ -f "resources/views/home.blade.php" ]; then
    echo "✓ Home view found (resources/views/home.blade.php)"
else
    echo "✗ Home view missing!"
fi

if [ -f "resources/views/layouts/app.blade.php" ]; then
    echo "✓ Layout found (resources/views/layouts/app.blade.php)"
else
    echo "✗ Layout missing!"
fi

echo ""
echo "2. Checking routes..."
if grep -q "view('home')" routes/web.php; then
    echo "✓ Route configured for home view"
else
    echo "✗ Route not properly configured!"
fi

echo ""
echo "3. Checking CSS variable definitions..."
if grep -q "accent: #d4af37" public/css/main.css; then
    echo "✓ CSS variables defined"
else
    echo "✗ CSS variables not found!"
fi

echo ""
echo "4. Checking JavaScript initialization..."
if grep -q "DOMContentLoaded" public/js/main.js; then
    echo "✓ JavaScript initialization code found"
else
    echo "✗ JavaScript initialization missing!"
fi

echo ""
echo "==== Verification Complete ===="
echo ""
echo "To run the development server:"
echo "  php artisan serve"
echo ""
echo "Then visit: http://localhost:8000"
