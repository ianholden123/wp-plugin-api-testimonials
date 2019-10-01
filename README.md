# WordPress Plugin - API Testimonials8
A simple WordPress plugin to expose testimonial data to the WordPress API

## What does it do?
This plugin will create a custom post type for you to add testimonials to your site. It will then expose these testimonials to the WordPress API.

## Installation
- Download the files from this repository and paste the `wp-plugin-api-testimonials` folder to your local WordPress site's `wp-content/plugins` folder.
- Log into your local WordPress site and you should see this plugin appear deactivated in the Plugins section.
- Activate the plugin from the Plugins page.

## Viewing Testimonials
Once you have activated the plugin, add some testimonials to your site and make sure they are published. Once complete, you should be able to access your testimonials from the API at the following URL: `http://localhost:3000/wp-json/wp/v2/testimonials/`.

NOTE: If your WP-API setup uses access tokens, this may not work.