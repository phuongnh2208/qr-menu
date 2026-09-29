<?php
ob_start();
session_start();
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
include "db.inc.config.php";

date_default_timezone_set(USER_TIME_ZONE);
if(!empty(USER_TIME_ZONE) && USER_TIME_ZONE == 'Europe/Rome')
{
	setlocale(LC_TIME, "it_IT.utf8");
}

$current_date = date('d-m-Y');
$current_time = date('H:i:s');

$currency= "&euro;";

/**
 * Return an image URL for both new remote URLs and legacy local filenames.
 */
function product_photo_url($photo, $legacy_path = 'upload/', $placeholder = 'upload/noimage.jpg') {
	$photo = trim((string)$photo);

	if($photo === '') {
		return $placeholder;
	}

	if(preg_match('/^https?:\/\//i', $photo)) {
		return $photo;
	}

	return rtrim($legacy_path, '/') . '/' . ltrim($photo, '/');
}

$conn = mysqli_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD,DATABASE_NAME);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}




?>