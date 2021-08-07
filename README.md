# herbalfit-child
HerbalFit Child Theme for BenSemangat Theme Framework: https://github.com/amrikarisma/bensemangat

## How it works
Bensemangat Child Theme shares with the parent theme all PHP files and adds its own functions.php on top of the BenSemangat parent theme's functions.php.

**IT DOES NOT LOAD THE PARENT THEMES CSS FILE(S)!** Instead it uses the BenSemangat Parent Theme as a dependency via npm and compiles its own CSS file from it.

Bensemangat Child Theme uses the Enqueue method to load and sort the CSS file the right way instead of the old @import method.

## Installation
1. Install the parent theme BenSemangat first: `https://github.com/amrikarisma/bensemangat`
   - IMPORTANT: If you download BenSemangat from GitHub make sure you rename the "bensemangat-master.zip" file to "bensemangat.zip" or you might have problems using this child theme!
1. Upload the herbalfit-child folder to your wp-content/themes directory
1. Go into your WP admin backend 
1. Go to "Appearance -> Themes"
1. Activate the BenSemangat Child theme

## Editing
Add your own CSS styles to `/sass/theme/_child_theme.scss`
or import you own files into `/sass/theme/herbalfit-child.scss`

To overwrite Bootstrap's or BenSemangat's base variables just add your own value to:
`/sass/theme/_child_theme_variables.scss`

For example, the "$brand-primary" variable is used by both Bootstrap and BenSemangat.

Add your own color like: `$brand-primary: #ff6600;` in `/sass/theme/_child_theme_variables.scss` to overwrite it. This change will automatically apply to all elements that use the $brand-primary variable.

It will be outputted into:
`/css/herbalfit-child.min.css` and `/css/herbalfit-child.css`

So you have one clean CSS file at the end and just one request.

## Developing With NPM, Gulp, SASS and Browser Sync

### Installing Dependencies
- Make sure you have installed Node.js, Gulp, and Browser-Sync [1] on your computer globally
- Open your terminal and browse to the location of your BenSemangat copy
- Run: `$ npm install` then: `$ gulp copy-assets`

### Running
To work and compile your Sass files on the fly start:

- `$ gulp watch`

Or, to run with Browser-Sync:

- First change the browser-sync options to reflect your environment in the file `/gulpconfig.json` in the beginning of the file:
```javascript
  "browserSyncOptions" : {
    "proxy": "localhost/wordpress/",
    "notify": false
  }
};
```
- then run: `$ gulp watch-bs`

[1] Visit [https://browsersync.io/](https://browsersync.io/) for more information on Browser Sync
