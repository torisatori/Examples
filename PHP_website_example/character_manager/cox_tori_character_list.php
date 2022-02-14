<!--
Tori Cox
PHP Website Example

This is the HTML/PHP for the table that displays the characters' information from the database
-->

<?php include('../view/cox_tori_header.php');?>

<main>
		<h1>Character List</h1>
		<aside>
			<h2>Countries</h2>
			<nav>
				<ul>
				<?php
				foreach ($countries as $country):
				?>
					<li><a href="?citizenship=<?php echo $country['citizenship'];?>"><?php echo $country['country_name']; ?></a></li>
				<?php
				endforeach;
				?>
				</ul>
			</nav>
		</aside>
		
		<section>
			<h2><?php echo $country_name;?></h2>
			
			<table style="width: 100%">
			<tr>
				<th>Character ID</th>
				<th>Name</th>
				<th>Real Name</th>
				<th>Citizenship</th>
				<th>&nbsp;</th>
			</tr>
			
			<?php
			foreach($heroes as $hero){
			?>
			<tr>
				<td><?php echo $hero['hero_id']; ?></td>
				<td><?php echo $hero['name'];?></td>
				<td><?php echo $hero['real_name'];?></td>
				<td><?php echo $hero['citizenship'];?></td>
				<td>
					<form action="." method="post">
						<input type="hidden" name = "action" value = "delete_character">
						<input type="hidden" name="hero_id" value="<?php echo $hero['hero_id'];?>">
						<input type="hidden" name="country" value="<?php echo $hero['citizenship'];?>">
						<input type="Submit" Value="Delete">
					</form>
				</td>
			</tr>
			<?php
			}//end foreach
			?>
			
			</table>
			<br>
			<p><a href="?action=show_add_form">Add Character</a></p>
			
		</section>
		
	</main>

<?php include('../view/cox_tori_footer.php');?>