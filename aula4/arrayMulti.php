<?php

echo "<pre>";

$temp = [
	'2018' => [
			'Janeiro' => 28,
			'Feveiro' => 29,
			'Marco'	=> 28
		],
	'2017' => [
			'Janeiro' => 27,
			'Feveiro' => 26,
			'Marco' => 30
		]


];
print_r($temp ['2017']['Feveiro']);
