<?php

require "config.php";

use App\Pet;

try {
	pet::register('Lorenzo', 'Male', '2002-05-03', 'Lorenzo Sangalang', 'kovlor13@gmail.com', 'Balibago City Square', '0932 325 321');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Geppy',
			'gender' => 'Male',
			'birthdate' => '2020-02-12',
			'owner' => 'Servero',
			'email' => 'ServerolLandaya.com',
			'address' => 'Moscow',
			'contact_number' => '0919 092 9330'
		],
		[
			'name' => 'Ditin',
			'gender' => 'Female',
			'birthdate' => '2021-06-12',
			'owner' => 'Tingya',
			'email' => 'Tingya@yuvy.com',
			'address' => 'Beijing',
			'contact_number' => '0939 410 3050'
		],
		[
			'name' => 'Pepe',
			'gender' => 'Male',
			'birthdate' => '1798-08-12',
			'owner' => 'Fwein',
			'email' => 'alberto@einstein.com',
			'address' => 'Bamban Tarlac',
			'contact_number' => '0909 421 3400'
		]
	];
	Pet::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

