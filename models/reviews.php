<?php

class reviews
{
	public static function getMenuProduct()
	{
		return [
			[
				'id' => 2,
				'icon' => 'review',
				'href' => 'review'
			]
		];
	}

	public static function addReviews($dataForReviews)
	{

	$pdo = db::connect();

	$sql = ("INSERT INTO reviews (email, userName, grade, comment)
			VALUES (:email, :userName, :grade, :comment)");
	$query = $pdo->prepare($sql);
	$query->bindParam(':email', $dataForReviews['email'], PDO::PARAM_STR);
	$query->bindParam(':userName', $dataForReviews['fullName'], PDO::PARAM_STR);
	$query->bindParam(':grade', $dataForReviews['grade'], PDO::PARAM_INT);
	$query->bindParam(':comment', $dataForReviews['comment'], PDO::PARAM_STR);

	$result = $query->execute();

	return $result;
	}
}