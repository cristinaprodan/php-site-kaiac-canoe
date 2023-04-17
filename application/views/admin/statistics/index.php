<?php
?>

<div class="container">

	<h1 class="page-title "  style="padding-top: 7px">Add Statistics</h1>
</div>

<div class="container bg-light">
	<form  method="post">
		<label for="test">Medals</label><br>
		<input type="number" name="Medals"><br>
		<label for="year">Choose a year:</label><br>
		<select  name="Year"  style="width: 200px;">
			<option value="2025">2025</option>
			<option value="2024">2024</option>
			<option value="2023">2023</option>
			<option value="2022">2022</option>
			<option value="2021">2021</option>
			<option value="2020">2020</option>
			<option value="2019">2019</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>

		</select>


		<button type="submit" name="add_statistics" value="add" class="btn btn-primary"  style="float: right;">Save</button>

	</form>
</div>
