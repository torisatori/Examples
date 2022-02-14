<!--
Tori Cox
PHP Website Example

This is the PHP/SQL to get the country names for the dropdown menu, and to match the country name to the correct citizenship
-->

<?php

//Get Country Name
function get_country_name($citizenship) { 
	global $db;
	$query = 'SELECT * FROM country WHERE citizenship = :citizenship';
	$statement = $db->prepare($query);
	$statement ->bindValue(':citizenship', $citizenship);
	$statement ->execute();
	$country = $statement->fetch();
	$country_name = $country['country_name'];
	$statement->closeCursor();
	return $country_name; 
} //end function get_country_name


//Get All the Countries
function get_countries(){ 
	global $db;
	$query = 'SELECT * FROM country ORDER BY citizenship';
	$statement = $db->prepare($query);
	$statement ->execute();
	$countries = $statement->fetchAll();
	$statement->closeCursor();
	return $countries; 
}
?>