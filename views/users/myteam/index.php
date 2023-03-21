

<div class="container">


	<h1 class="page-title" >My team</h1>
</div>

<div class="container bg-light">
	<form action="" method="post">
		<div class="row" style="padding-left: 20%;">

			<div class="col-md-3">
				<label for="inputAddress">First Name</label>
				<input type="text" class="form-control" id="inputAddress" name="first_name">
			</div>
			<div class="col-md-3">
				<label for="inputAddress">Last Name</label>
				<input type="text" class="form-control" id="inputAddress" name="last_name">
			</div>
			<div class="col-md-3"> <!-- Date input -->
				<label class="control-label" for="date">Date of birth</label>
				<input class="form-control" id="date" name="date_birth" placeholder="MM/DD/YYY" type="text"/>
			</div>

		</div>

		<div class="row" style="padding-left: 20%;">

			<div class="col-md-3">
				<label for="inputState">Gender</label>
				<select id="inputState" class="form-control" name="gender">
					<option value="" selected>Choose...</option>
					<option value="Male">Male</option>
					<option value="Famale">Famale</option>
					<option value="Other">Other</option>
				</select>
			</div>


				<div class="col-md-3">
					<label for="inputCity">SSN</label>
					<input type="text" class="form-control" id="inputCity" name="SSN">
				</div>
			<div class="col-md-3">
				<label for="inputState">Discipline</label>
				<select id="inputState" class="form-control" name="Discipline">
					<option value="" selected>Choose...</option>
					<option value="1">Kaiac Men</option>
					<option value="2">Kaiac Women</option>
					<option value="3">Canoe Men</option>
					<option value="4">Canoe Women</option>

				</select>
			</div>




			<div class="col-md-3">
					<label for="inputCity" style="width: 100%;height: 40%;"></label>
					<button type="submit" name="submit" value="submit" class="btn btn-primary">Add Athletes</button>
				</div>
				</div>
	</form>
</div>


<section id="team" class="team section-bg">
	<div class="container">

		<div class="section-title">
			<h2 data-aos="fade-up">My team</h2>
		</div>
		<div class="row">
			<?php if(isset($myteam)){?>
			<?php foreach ($myteam as $myteam):?>

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
						<div class="member">
							<div class="member-img">
								<img src="http://localhost/kaiac_canoe/assets/img/img.png" class="img-fluid" alt="" style="width: 200px;">
								<div class="social"><?php echo $myteam['first_name'];?>-<?php echo $myteam['last_name'];?></div>
							</div>

					</div>
					</div>
	<?php endforeach; }?>
		</div>
</section>


<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


<script>
	$(document).ready(function(){
		var date_input=$('input[name="date_birth"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		var options={
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		};
		date_input.datepicker(options);
	})
</script>

