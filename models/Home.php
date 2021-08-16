<?php

class Home
{
	public static function getMenu()
	{
		return [
			[
				'id' => 1,
				'icon' => 'home',
				'href' => '/'
			],
			[
				'id' => 2,
				'icon' => 'review',
				'href' => 'review'
			]
		];
	}
}