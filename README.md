# WP Snippet: Floating Bottom Banner

A lightweight WordPress snippet that adds a fixed position banner at the bottom of your page. Perfect for displaying promotions, delivery information, announcements, or any important messages to your visitors.

## Features

- Fixed position banner at bottom of page
- Customizable text and styling via code
- Lightweight CSS solution (no JavaScript)
- Works with any WordPress theme
- Universal - can display any content (promotions, delivery info, announcements)
- No dependencies required
- Unique prefixes (torwald45_floban_) to prevent conflicts

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher

## Installation

### Method 1: functions.php

1. Open your theme's `functions.php` file
2. Copy the entire content from `floating-bottom-banner.php`
3. Paste at the end of your `functions.php`
4. Save the file

### Method 2: Code Snippets Plugin

1. Install and activate the [Code Snippets](https://wordpress.org/plugins/code-snippets/) plugin
2. Go to Snippets → Add New
3. Copy content from `floating-bottom-banner.php` **WITHOUT the opening `<?php` tag**
4. Paste into the Code field
5. Activate the snippet

## Usage

After installation, a banner will automatically appear at the bottom of all pages on your site.

### Customizing the Message

Edit the HTML content inside the banner div:
```php
<div class="torwald45-floban-banner">
  <!-- Your custom message here -->
  🎉 <strong>Special Offer!</strong> | Get 20% off today only!
</div>
```

### Customizing Colors

Modify the CSS styles in the snippet:
```css
.torwald45-floban-banner {
  background-color: #2c3e50; /* Change background color */
  color: #ffffff;            /* Change text color */
  /* Add more custom styles here */
}
```

### Examples

**Delivery Information:**
```html
🚚 <strong>Free delivery!</strong> | Processing time: 10-14 business days.
```

**Promotion:**
```html
🎉 <strong>Black Friday Sale!</strong> | Up to 50% off - Limited time only!
```

**Announcement:**
```html
📢 <strong>New products available!</strong> | Check out our latest collection.
```

**Cookie Notice:**
```html
🍪 This site uses cookies. By continuing, you accept our <a href="/privacy" style="color: #fff;">Privacy Policy</a>.
```

## Technical Details

### HTML Elements
- Element class: `torwald45-floban-banner`

### Hooks Used
- `wp_footer` (render banner in footer)

### CSS Properties
- `position: fixed` - keeps banner visible while scrolling
- `z-index: 1000` - ensures banner appears above most content

## Compatibility

**Tested with:**
- Elementor

**Needs testing:**
- Oxygen Builder
- Breakdance
- Bricks Builder

If you test with other page builders, please report compatibility in the Issues section.

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for version history.

## License

GPL v2 or later

## Author

[Torwald45](https://github.com/Torwald45)
