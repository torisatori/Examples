<!--
Tori Cox
PHP Website Example

This is the HTML/PHP for the "Add Characters" form that will add the character to the database
-->

<?php include('../view/cox_tori_header.php');?>

<main>
	<h1>Add Character</h1>
	<form method="post" action="index.php" id="add_character_form">
		<input type = "hidden" name = "action" value = "add_character">
		
		<label>Country:</label>
		<select name="country">
			<?php
			foreach ($countries as $country):
			?>
			<option value="<?php echo $country['citizenship']; ?>"><?php echo $country['country_name'];?></option>
			<?php
			endforeach;
			?>
		</select>
		<br>
		<label>Name:</label>
		<input name="name" type="text">
		<br>
		<label>Real Name:</label>
		<input name="real_name" type="text">
		<br>
		<label>&nbsp;</label>
		<input type="submit" value="Add Character">
		<br>
		<p>
			<a href="index.php?action=list_characters">View All Characters</a>
		</p>
	</form>
</main>

<?php include('../view/cox_tori_footer.php');?>