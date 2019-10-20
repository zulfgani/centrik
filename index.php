<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a ClassicPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FeatherLite
 */

get_header(); 

	do_action( 'featherlite_index' );

get_footer();
