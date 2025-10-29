<?php

function gamestore_styles() {
	wp_enqueue_style(
		'gamestore-general',
		get_template_directory_uri().'/assets/css/gamestore.css',
		[],
		wp_get_theme()->get( 'Version' )
	);
	wp_enqueue_script(
		'gamestore-theme-relates',
		get_template_directory_uri().'/assets/js/gamestore-theme-related.js',
		[],
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'gamestore_styles' );

function gamestore_google_font(){
	$fonturl = '';
	$font = 'Urbanist';
	$font_extra= 'ital,wght@0,400;0,700;1,400;1,700';

	if ('off' !== _x('on', 'Google font: on or off', 'gamestore')) {
			$query_args = array(
				'family' => urldecode($font.':'. $font_extra),
				'subset' => urldecode('latin, latin-ext'),
				'display' => urldecode('swap')
			);
			$font_url = add_query_arg( $query_args, '//fonts.googleapis.com/css2');
		}

		return $font_url;
}
function gamestore_google_font_scripts(){
	wp_enqueue_style('gamesotre-google-font', gamestore_google_font(),[],'1.0.0');
}
add_action('wp_enqueue_scripts','gamestore_google_font_scripts');


function gamestore_enqueue_icons() {
    // Latest free Font Awesome CDN link
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css',
        [],
        '6.6.0'
    );
}
add_action('wp_enqueue_scripts', 'gamestore_enqueue_icons');
