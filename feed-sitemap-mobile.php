<?php
/**
 * XML Sitemap Feed Template for displaying an XML Sitemap feed.
 *
 * @package Google Mobile Sitemap Feed With Multisite Support plugin for WordPress
 */

status_header('200'); // force header('HTTP/1.1 200 OK') for sites without posts
header('Content-Type: text/xml; charset=' . get_bloginfo('charset'), true);

echo '<?xml version="1.0" encoding="' . get_bloginfo('charset') . '"?>
<!-- Created by Google Mobile Sitemap Feed With Multisite Support by Art Project Group (http://www.artprojectgroup.es/plugins-para-wordpress/google-mobile-sitemap-feed-with-multisite-support) -->
<!-- generated-on="' . date('Y-m-d\TH:i:s+00:00') . '" -->
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:mobile="http://www.google.com/schemas/sitemap-mobile/1.0">' . "\n";

$entradas = $wpdb->get_results ("SELECT id, post_modified_gmt FROM $wpdb->posts WHERE post_status = 'publish' AND (post_type = 'post' OR post_type = 'page') ORDER BY post_date"); //Consulta
	
global $wp_query;
$wp_query->is_404 = false;	// force is_404() condition to false when on site without posts
$wp_query->is_feed = true;	// force is_feed() condition to true so WP Super Cache includes the sitemap in its feeds cache

if (empty($entradas)) return false;
else 
{
	foreach ($entradas as $entrada) 
	{
		echo "\t" . '<url>' . "\n";
		echo "\t\t" . '<loc>' . get_permalink($entrada->id) . '</loc>' . "\n";
		echo "\t\t" . '<lastmod>' . date(DATE_W3C, strtotime($entrada->post_modified_gmt)) . '</lastmod>' . "\n";
		echo "\t\t" . '<mobile:mobile />' . "\n";
		echo "\t" . '</url>' . "\n";
	}
}
echo "</urlset>";
?>
