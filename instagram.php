<?php
function instagram($count = 10, $width = 640, $height = 640) {

	$user_id = 123456789;
	$access_token = '123456789';
	$size = wp_is_mobile() ? 'low_resolution' : 'standard_resolution';
	$url = 'https://api.instagram.com/v1/users/'.$user_id.'/media/recent/?access_token='.$access_token.'&count='.$count;
	$cache_location = './'.sha1($url).'.json';
	$cache_time = '-1 hour';

	if (file_exists($cache_location) && filemtime($cache_location) > strtotime($cache_time)) {
		// If a cache file exists, and it is newer than 1 hour, use it
		$jsonData = json_decode(file_get_contents($cache_location));
	} else {
		$jsonData = json_decode((file_get_contents($url)));
		file_put_contents($cache_location,json_encode($jsonData));
	}

	foreach ($jsonData->data as $key=>$value) {
		echo '<div>';
		echo '<img src="'.$value->images->$size->url.'"/>';
		echo '</div>';
	}
}
