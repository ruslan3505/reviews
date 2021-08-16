<?php

include_once(ROOT.'/models/home.php');
include_once(ROOT.'/models/reviews.php');

class HomeController
{
	public function home()
	{
		$categoriesMenu = Home::getMenu();

		require_once(ROOT. '/views/home.php');
		return true;
	}	
}