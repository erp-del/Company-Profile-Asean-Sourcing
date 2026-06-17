# Troubleshooting Guide - Excellencial Website

## Common Issues & Solutions

---

## 🔴 CSS Not Loading (Blank/Unstyled Page)

### Issue
Page appears without any styling (like in the screenshot provided)

### Cause
CSS file path incorrect or not being served by Laravel

### Solutions

#### Solution 1: Clear Laravel Cache
```bash
php artisan view:clear
php artisan cache:clear
php artisan config:clear
```

#### Solution 2: Publish Assets
```bash
php artisan vendor:publish --force
```

#### Solution 3: Check Asset Path
Make sure in `app.blade.php`, the CSS link uses correct Laravel asset path:
```blade
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
```

#### Solution 4: Verify File Exists
Ensure `public/css/main.css` exists with content (should be ~4000 lines)

#### Solution 5: Check .htaccess (if using Apache)
Make sure `.htaccess` in public folder is configured correctly:
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ index.php [L]
</IfModule>
```

---

## 🔴 JavaScript Not Working

### Issue
Mobile menu doesn't toggle, scrolling not smooth, no animations

### Cause
JavaScript file not loading or errors in console

### Solutions

#### Solution 1: Check Browser Console
- Open DevTools (F12)
- Go to Console tab
- Look for error messages

#### Solution 2: Verify Script Tag
Check `app.blade.php` has correct script link:
```blade
<script src="{{ asset('js/main.js') }}"></script>
```

#### Solution 3: Check File Permissions
```bash
chmod 644 public/js/main.js
chmod 644 public/css/main.css
```

#### Solution 4: Clear Browser Cache
- Press Ctrl+Shift+Delete (Cmd+Shift+Delete on Mac)
- Clear cache and cookies
- Reload page

---

## 🔴 Mobile Menu Not Working

### Issue
Hamburger menu appears but doesn't open/close

### Cause
JavaScript initialization failed or HTML structure mismatch

### Solutions

#### Solution 1: Verify HTML Structure
Ensure navbar has exact structure:
```html
<div class="hamburger">
    <span></span>
    <span></span>
    <span></span>
</div>
<ul class="nav-links">
    ... nav items
</ul>
```

#### Solution 2: Check JavaScript Console
Look for class `MobileMenu` initialization errors

#### Solution 3: Rebuild Layout
Delete old HTML and use new `app.blade.php`

---

## 🔴 Animations Not Running

### Issue
Elements don't fade in on scroll, counters don't animate

### Cause
Intersection Observer not working or animations disabled

### Solutions

#### Solution 1: Check Browser Support
IntersectionObserver needs modern browser (all modern browsers support it)

#### Solution 2: Verify CSS Animations
Check if animations are defined:
```bash
grep -n "fadeInUp\|@keyframes" public/css/main.css
```

#### Solution 3: Check JavaScript Errors
Open console (F12) and check for errors

---

## 🔴 Form Not Submitting

### Issue
Contact form button doesn't work or shows errors

### Cause
Form handler JavaScript not properly initialized

### Solutions

#### Solution 1: Verify Form Names
Ensure form inputs have name attributes:
```html
<input name="name" type="text" ... >
<input name="email" type="email" ... >
<input name="company" type="text" ... >
<textarea name="message" ... ></textarea>
```

#### Solution 2: Check Form Class
Form must have class `contact-form`:
```html
<form class="contact-form">
```

#### Solution 3: Check JavaScript Initialization
Verify FormHandler class initializes:
```javascript
// In console, type:
new FormHandler()
```

---

## 🔴 Styling Issues (Colors, Spacing)

### Issue
Colors don't match design, spacing is wrong

### Cause
CSS variables not updating or cascade issues

### Solutions

#### Solution 1: Check CSS Variables
Edit top of `public/css/main.css`:
```css
:root {
    --accent: #d4af37;
    --primary-dark: #001f3f;
}
```

#### Solution 2: Hard Refresh
Press Ctrl+Shift+R (Cmd+Shift+R on Mac) to hard refresh

#### Solution 3: Check Media Queries
For mobile issues, verify breakpoints:
```css
@media (max-width: 768px) { ... }
@media (max-width: 480px) { ... }
```

---

## 🔴 Mobile Responsiveness Issues

### Issue
Mobile layout broken, elements overflow, text too small/large

### Cause
Viewport meta tag missing or CSS media queries not working

### Solutions

#### Solution 1: Verify Viewport Meta Tag
Check `app.blade.php` has:
```html
<meta name="viewport" content="width=device-width, initial-scale=1.0">
```

#### Solution 2: Test Responsive Mode
- Open DevTools (F12)
- Click device toggle (toggle device toolbar icon)
- Test at different breakpoints

#### Solution 3: Check Mobile CSS
Verify media queries in `public/css/main.css`:
```bash
grep "@media" public/css/main.css
```

---

## 🔴 Navbar Sticks Wrong Position

### Issue
Navbar covers content or appears in wrong place

### Cause
Body padding or navbar positioning issue

### Solutions

#### Solution 1: Verify Body Padding
CSS should include:
```css
body {
    padding-top: 60px; /* Match navbar height */
}
```

#### Solution 2: Check Navbar CSS
```css
.navbar {
    position: fixed;
    top: 0;
    z-index: 1000;
}
```

#### Solution 3: Test Hero Section
Hero should have:
```css
.hero {
    margin-top: -60px;
    padding-top: 60px;
}
```

---

## 🔴 Slow Performance / Lagging

### Issue
Website feels slow, animations stutter

### Cause
Too many animations or unoptimized code

### Solutions

#### Solution 1: Check CPU Usage
Open DevTools Performance tab and record

#### Solution 2: Reduce Animation Count
Comment out animations in `public/css/main.css` to test

#### Solution 3: Enable Hardware Acceleration
```css
/* Add to elements that animate */
.service-card {
    will-change: transform;
    transform: translateZ(0);
}
```

#### Solution 4: Disable Debug Logging
Remove console.log statements from `public/js/main.js`

---

## 🔴 Images Not Showing

### Issue
Placeholder boxes appear but images don't load

### Cause
Image paths incorrect or images missing

### Solutions

#### Solution 1: Add Images
Replace placeholder divs with actual img tags:
```html
<img src="{{ asset('images/project.jpg') }}" alt="Project">
```

#### Solution 2: Check Image Path
Images should be in `public/images/`:
```
public/
├── images/
│   ├── team-1.jpg
│   ├── project-1.jpg
```

#### Solution 3: Lazy Loading
Use `data-src` for lazy loading:
```html
<img data-src="{{ asset('images/photo.jpg') }}" alt="Photo">
```

---

## 🔴 Form Styles Broken

### Issue
Form inputs look wrong, buttons misaligned

### Cause
CSS specificity issue or missing form CSS

### Solutions

#### Solution 1: Check Form CSS
Search for `.contact-form` in `public/css/main.css`

#### Solution 2: Browser DevTools
- Right-click form input
- Select "Inspect"
- Check which CSS rules apply

#### Solution 3: Reset & Reapply
Clear browser cache and refresh

---

## 🔴 Links Not Working

### Issue
Navigation links don't scroll to sections

### Cause
Section IDs missing or scroll JavaScript not working

### Solutions

#### Solution 1: Verify Section IDs
All sections must have matching IDs:
```html
<section id="services">...</section>
<a href="#services">Services</a>
```

#### Solution 2: Check JavaScript
SmoothScroll class should handle scrolling

Verify in console:
```javascript
document.querySelector('#services')
```

#### Solution 3: Test Manually
In console, run:
```javascript
smoothScrollToElement('#services')
```

---

## 🔴 Font Issues

### Issue
Text doesn't look right, wrong font family

### Cause
System fonts not available or font stack issue

### Solutions

#### Solution 1: Verify Font Stack
CSS includes:
```css
font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', ...
```

#### Solution 2: Check Google Fonts
If using custom fonts:
```html
<link href="https://fonts.googleapis.com/css2?family=..." rel="stylesheet">
```

---

## 🟡 Performance Optimization Tips

### Reduce CSS Size
```bash
# Minify CSS
php artisan minify
```

### Optimize Images
```bash
# Use ImageOptim or TinyPNG
convert image.jpg -resize 50% -quality 85 image-optimized.jpg
```

### Enable Caching
```bash
php artisan config:cache
php artisan route:cache
```

### Use CDN
Move assets to CDN service (Cloudflare, AWS CloudFront)

---

## 🟢 Verification Checklist

- [ ] CSS file exists: `public/css/main.css`
- [ ] JS file exists: `public/js/main.js`
- [ ] Layout file updated: `resources/views/layouts/app.blade.php`
- [ ] Home view exists: `resources/views/home.blade.php`
- [ ] Routes configured: `routes/web.php`
- [ ] No console errors (F12)
- [ ] Mobile menu works
- [ ] Forms submit
- [ ] Colors match design
- [ ] Mobile responsive works
- [ ] Animations play

---

## 📞 Additional Resources

- [MDN Web Docs - CSS](https://developer.mozilla.org/en-US/docs/Web/CSS)
- [MDN Web Docs - JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
- [Laravel Asset Management](https://laravel.com/docs/blade#introducing-blade)
- [Can I Use - Browser Support](https://caniuse.com)

---

## 🆘 Still Having Issues?

1. Check browser console (F12) for error messages
2. Review this entire troubleshooting guide
3. Verify all files are in correct locations
4. Clear cache and restart Laravel server
5. Try different browser to isolate issue

---

**Last Updated**: March 12, 2026  
**Version**: 2.0
