<?php
?>

<div class="container">

	<h1 class="page-title "  style="padding-top: 7px">Update Teams </h1>
</div>

<div class="container bg-light" >
	<?php if(isset($teams)){?>
	<?php foreach ($teams as $team) :?>
	<form action="" method="post">
		<div class="row" style="padding-top: 20px;">
			<div class="col-md-3">

			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-3">
						<label for="inputAddress">Club Name</label>
						<input type="text" class="form-control" id="inputAddress" name="team_name" value="<?php echo $team['Name_Team']?>">
					</div>

				</div>


				<div class="row">


					<div class="col-md-3">
						<label for="inputState">Clubs type</label>
						<select id="inputState" class="form-control" name="team_type" value="<?php echo$team['Team_Type']?>">
							<option value="" selected>Choose...</option>
							<option value="css">Club Sportiv</option>
							<option value="csm">Club Municipal</option>
							<option value="Other">Other</option>
						</select>
					</div>


				</div>


				<div class="col-md-12" style="padding-right: 175px" >
					<button type="submit" name="save_team" value="save" class="btn btn-primary " style="float: right;">Edit Clubs</button>
				</div>
			</div>
		</div>
	</form>
<?php endforeach;}?>
</div>
</div>
