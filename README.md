FLIPSTATUS
==========

This software creates a virtual split-flap display (often called a Solari board) in a web browser which is capable of displaying real-time information from various APIs. 

* **Pure Javascript and CSS** All images are sprites and are hidden and shown using jQuery animations.

* **Customizable look** Each line in the display is generated from a customizable backbone.js template.

USAGE
-----

Open `configure.php` in the web browser of your choice. This page generates a the URL used by tweetboard.php to load the appropriate content. Editing the `tweetboard.php` url directly works just as well.

CONFIGURATION OPTIONS
---------------------

**tweetboard.php** 

The number of rows and characters per row are determined in the PHP `switch()` statement at the top of the file. Some common monitor sizes are included; adjust as needed to fit your display.

The refresh interval and delay between rows is set in the `<script>` block near the bottom:

    "refreshInterval": 30000,  // how often to refresh the display (ms)
    "stagger":         1500    // delay between loading rows (ms)

The markup for each row is editable from within this template as well.

PLUGINS
-------

The files in `plugins/` are used to handle different data sources. 

IMAGES
------

The characters are generated using CSS sprites in `img/`. If you change these, be sure and change the relevant class names in `css/split-flap.css`

LICENSE
=======

This project is copyright 2012 by BAS Design Inc., and is released under the [MIT License](LICENSE.txt).