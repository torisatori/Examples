<!--
Tori Cox
PHP Website Example

This is the PHP/SQL to query, add, and delete a character from the database
-->

<?php
//Get Heros From Selected Country
function get_characters_by_country($citizenship){
	global $db;
	$query = "SELECT * FROM hero_character WHERE citizenship = :citizenship ORDER BY hero_id";
	$statement = $db->prepare($query);
	$statement ->bindValue(':citizenship', $citizenship);
	$statement ->execute();
	$characters = $statement->fetchAll();
	$statement->closeCursor();
	return $characters;} 
	
//Delete Character
function delete_character($hero_id){
	global $db;
	$query = 'DELETE FROM hero_character WHERE hero_id =:hero_id';
	$statement = $db->prepare($query);
	$statement->bindValue(':hero_id',$hero_id);
	$statement->execute();
	$statement->closeCursor();
} 

//Add Character
function add_character($name, $real_name, $citizenship){
	global $db;
	$query = 'INSERT INTO hero_character (name, real_name, citizenship) VALUES (:name, :real_name, :citizenship)';
	$statement = $db->prepare($query);
	$statement->bindValue(':name',$name);
	$statement->bindValue(':real_name',$real_name);
	$statement->bindValue(':citizenship',$citizenship);
	$statement->execute();
	$statement->closeCursor();
}

?>