<!--
Tori Cox
PHP Website Example

This is the PHP for the index.  Depending on what button is pushed, this index will incude the code from the appropriate file
-->

<?php
//require database files
require('../model/cox_tori_database.php');
require('../model/cox_tori_country_db.php');
require('../model/cox_tori_character_db.php');

//set action for first time access
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
	$action = filter_input(INPUT_GET, 'action');
	if ($action == NULL){
		$action = 'list_characters';
	} //end if
}//end if

//echo $action;

if ($action == 'list_characters'){
	$citizenship = filter_input(INPUT_GET, 'citizenship');
	if ($citizenship == NULL || $citizenship == FALSE) {
		$citizenship = 'American';	}
	
	//use functions to retrieve character records
	$country_name = get_country_name($citizenship);
	$heroes = get_characters_by_country($citizenship);
	$countries = get_countries();

	//display all characters
	include('cox_tori_character_list.php');

} else if ($action == 'delete_character') {
	$hero_id = filter_input(INPUT_POST, 'hero_id', FILTER_VALIDATE_INT);
	$country = filter_input(INPUT_POST, 'country');
	
	delete_character($hero_id);
	header("Location: .?citizenship=$country");

} else if ($action == 'show_add_form'){
	$countries = get_countries();
	include('cox_tori_character_add.php');

}else if ($action =='add_character'){
	$citizenship = filter_input(INPUT_POST, 'country');
	$name = filter_input(INPUT_POST, 'name');
	$real_name = filter_input(INPUT_POST, 'real_name');

	if ($citizenship == NULL || $citizenship == false  || $name ==null || $real_name == null){

	$error = "Invalid product data.  Check all fields and try again.";
	//echo $error."<br>\n";
	include('../errors/cox_tori_error.php');
	
	} else {
	add_character($name, $real_name, $citizenship);
	header("Location:.?citizenship=$citizenship");
	
	}//end if
} //end if


?>