# Typekit Provider for custom-fonts

A WordPress plugin that adds Typekit fonts to the
[custom-fonts](https://github.com/Automattic/custom-fonts) plugin.

# Installation

You must have the [custom-fonts](https://github.com/Automattic/custom-fonts)
plugin installed and active for this plugin to work.

Download or clone this repository into the `plugins/` directory of your
WordPress installation.

Visit the **Plugins** page in wp-admin and Activate the "Custom Fonts Typekit"
plugin.

Open the Customizer (**Appearance > Customize**) and you should see the `Fonts`
section in the sidebar.  Typekit fonts should be included in the list of
available fonts.

# Testing

For running the tests, you will need to have [phpunit](https://phpunit.de/) installed, as well as
[composer](https://getcomposer.org/).

If you are on the Mac OS, you can install both with [Homebrew](http://brew.sh/)
by typing: `brew install phpunit` and `brew install composer`.

You will also need [npm](https://www.npmjs.com/).

Then run `npm install` to be sure that all the required packages are ready.

Finally run `grunt test` to run the tests.
