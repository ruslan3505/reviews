<?php

include_once(ROOT.'/models/home.php');
include_once(ROOT.'/models/reviews.php');

class ReviewController
{
	public function review()
	{
		$categoriesMenu = reviews::getMenuProduct();

		require_once(ROOT. '/views/home.php');
		return true;
	}

	public function saveImage()
	{
		$name = $_FILES['image']['name'];
		$tmp_name = $_FILES['image']['tmp_name'];

		move_uploaded_file($tmp_name, "image/". $name);
	}


	public function addReview()
	{
		if(isset($_POST['email']) and (isset($_POST['fullName'])))
		{

			$dataForReviews = [
				'email' => $_POST['email'],
				'fullName' => $_POST['fullName'],
				'grade' => $_POST['grade'],
				'comment' => $_POST['comment']
			];

			$result = reviews::addReviews($dataForReviews);

			if($result === true)
			{
			header('Content-type: application/json');
			echo json_encode([
				'result' => 'Done'
				]);
			} 
		}
	}
}