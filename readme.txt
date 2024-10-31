=== PxFinder-Box ===
Contributors: munimumu
Tags: photos, photo, images, image, gallery, jquery, javascript, pxfinderbox, lightbox
Requires at least: 3.8
Tested up to: 3.8
Stable tag: 0.2

Simple photo viewer. Enables PxFinder-Box on jpg and png image links.

== Description ==

Large image viewer.
Simple photo gallery.

= Demo =
[PxFinder-Box Demo](http://pxfinder.com/pxfinder-box)

= Trigger of PxFinder-Box =

1. is_single() //Single post,
2. added wp_footer() //Hook wp_footer ,
3. jQuery(".entry-content").find("a[href$='.jpg'], a[href$='.png'], a[href$='.jpeg']") //Add click event

= Supported browsers =

* Modern browser

== Installation ==

1. Upload `pxfinder-box` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. PC [screenshot-1.jpg]
1. Smartphone [screenshot-2.jpg]
