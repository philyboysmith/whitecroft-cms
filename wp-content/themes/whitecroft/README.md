# [Calm](https://www.thecalmzone.net/)

A Wordpress theme build using [Sage](https://roots.io/sage/).

## Features

* Sass for stylesheets
* Modern JavaScript
* [Webpack](https://webpack.github.io/) for compiling assets, optimizing images, and concatenating and minifying files
* [Browsersync](http://www.browsersync.io/) for synchronized browser testing
* [Blade](https://laravel.com/docs/5.6/blade) as a templating engine
* [Controller](https://github.com/soberwp/controller) for passing data to Blade templates
* [Tailwind](https://tailwindcss.com/)


## Requirements

Make sure all dependencies have been installed before moving on:

* [WordPress](https://wordpress.org/) >= 4.7
* [PHP](https://secure.php.net/manual/en/install.php) >= 7.1.3 (with [`php-mbstring`](https://secure.php.net/manual/en/book.mbstring.php) enabled)
* [Composer](https://getcomposer.org/download/)
* [Node.js](http://nodejs.org/) >= 8.0.0
* [Yarn](https://yarnpkg.com/en/docs/install)

## Theme installation

Clone this repository into your themes folder.

Install Sage using Composer from your WordPress themes directory (replace `your-theme-name` below with the name of your theme):

```shell
# @ wp-content/themes/calm-theme
$ composer install
```

## Theme structure

```shell
themes/your-theme-name/      # → Root of your Sage based theme
├── app/                     # → Theme PHP
│   ├── Controllers/         # → Controller files
│   ├── admin.php            # → Theme customizer setup
│   ├── custom-post-type.php # → Register Calm specific custom post-type
│   ├── filters.php          # → Theme filters
│   ├── helpers.php          # → Helper functions
│   └── setup.php            # → Theme setup
├── composer.json            # → Autoloading for `app/` files
├── composer.lock            # → Composer lock file (never edit)
├── dist/                    # → Built theme assets (never edit)
├── node_modules/            # → Node.js packages (never edit)
├── package.json             # → Node.js dependencies and scripts
├── resources/               # → Theme assets and templates
│   ├── assets/              # → Front-end assets
│   │   ├── config.json      # → Settings for compiled assets
│   │   ├── build/           # → Webpack and ESLint config
│   │   ├── fonts/           # → Theme fonts
│   │   ├── images/          # → Theme images
│   │   ├── scripts/         # → Theme JS
│   │   └── styles/          # → Theme stylesheets
│   ├── functions.php        # → Composer autoloader, theme includes
│   ├── index.php            # → Never manually edit
│   ├── screenshot.png       # → Theme screenshot for WP admin
│   ├── style.css            # → Theme meta information
│   └── views/               # → Theme templates
│       ├── layouts/         # → Base templates
│       └── partials/        # → Partial templates
└── vendor/                  # → Composer packages (never edit)
```

## Theme setup

Edit `app/setup.php` to enable or disable theme features, setup navigation menus, post thumbnail sizes, and sidebars.

## Theme development

* Run `yarn` from the theme directory to install dependencies
* Update `resources/assets/config.json` settings:
  * `devUrl` should reflect your local development hostname
  * `publicPath` should reflect your WordPress folder structure (`/wp-content/themes/calm-theme`) installs)

### Build commands

* `yarn start` — Compile assets when file changes are made, start Browsersync session
* `yarn build` — Compile and optimize the files in your assets directory
* `yarn build:production` — Compile assets for production

## Documentation

* [Sage documentation](https://roots.io/sage/docs/)
* [Tailwind documentation](https://tailwindcss.com/docs/what-is-tailwind/)
* [Controller documentation](https://github.com/soberwp/controller#usage)

<img src="https://www.amillionmonkeys.co.uk/icons/icon-144x144.png?v=fa8cea03474667f7f8f4515a2af28653" alt="amillionmonkeys">
