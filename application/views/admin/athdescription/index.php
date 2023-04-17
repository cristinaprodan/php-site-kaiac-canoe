<?php
?>

<div class="container">

	<h1 class="page-title "  style="padding-top: 7px">Add Description To Athlete</h1>
</div>

<div class="container bg-light">
	<form  method="post">
		<label for="test">Year</label><br>
		<input type="text" name="Year"><br>
		<label for="cars">Choose an athlete:</label>
		<select id="athelete" name="atheletes" >
			<?php foreach ($athletes as $ath):?>
			<option value="<?php echo $ath['ID_Athletes']?>"><?php echo $ath['Name_Ath']?></option>
			<?php endforeach?>
		</select>


		<label for="test">Description</label><br>
		<textarea name="Description" style="width:100%; height:200px;">

    </textarea>

		<button type="submit" name="add_description" value="add" class="btn btn-primary"  style="float: right;">Add Description</button>

	</form>
</div>

