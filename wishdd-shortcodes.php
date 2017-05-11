<?php
/*
* Wishdd GDrive Embed
* Author  -A wordpress plugin to Embed Google Drive Documents.
* Website -  http://wishdd.com/
* Contact - waqas@wishdd.com
* License: GPLv2
*/

function wishdd_gdoc_embed($atts, $content = null)
{ 
	$atts = shortcode_atts(['book_id' => '0B7Ls2KNfpdLdVG1uSk9hVXJ2eTQ', 'btn_txt' => 'Download'], $atts);
	
	global  $sc_title, $sc_placeholer;
	
	$book_id  = esc_html__($atts['book_id']);
	$btn_txt  = esc_html__($atts['btn_txt']);

	$output = '
	<iframe src="https://drive.google.com/file/d/'.$book_id.'/preview" width="640" height="480"></iframe>

&nbsp;
<p style="text-align: center;"><a class="btn btn-default btn-lg" href="https://drive.google.com/file/d/'.$book_id.'/view?usp=sharing">'.$btn_txt.'</a></p>';
	return $output;
}

add_shortcode('wishdd_gdoc' , 'wishdd_gdoc_embed');