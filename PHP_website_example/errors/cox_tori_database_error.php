<!--
Tori Cox
PHP Website Example

This is the HTML/PHP for an error message to display if there is an issue connecting to the database
-->

<?php include('../view/cox_tori_header.php');?>

	<main>
		<h1>Database Error</h1>
		<p>There was an error conencting to the database</p>
		<p>Error message: <?php echo $error_message;?></p>
	</main>
	
<?php include('../view/cox_tori_footer.php');?>