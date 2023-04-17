

<style>
	.space{
		padding-bottom: 0px;
	}
</style>

<?php if($id_user != 0){?>
<div class="container">


	<h1 class="page-title" >Events Calendar</h1>
</div>

<div class="container bg-light">
	<form action="" method="post">
		<div class="row" style="padding-left: 20%;">
			<div class="col-md-3"> <!-- Date input -->
				<label class="control-label" for="date">Start Date</label>
				<input class="form-control" id="date" name="start_date" placeholder="MM/DD/YYY" type="text"/>
			</div>

			<div class="col-md-3"> <!-- Date input -->
				<label class="control-label" for="date">End Date</label>
				<input class="form-control" id="date" name="end_date" placeholder="MM/DD/YYY" type="text"/>
			</div>

			<div class="col-md-3">
				<label for="inputAddress">Event</label>
				<input type="text" class="form-control" id="inputAddress" name="name_event">
			</div>
		</div>


		<div class="row" style="padding-left: 20%;">

			<div class="col-md-3">
				<label for="inputState">Type of Event</label>
				<select id="inputState" class="form-control" name="type_event">
					<option value="" selected>Choose...</option>
					<option value="National Championship">National Championship</option>
					<option value="CSS"> CSS</option>
					<option value="Amical">Amical</option>
				</select>
			</div>


				<div class="col-md-3">
					<label for="inputCity">Location</label>
					<input type="text" class="form-control" id="inputCity" name="location">
				</div>

				<div class="col-md-3">
					<label for="inputCity" style="width: 100%;height: 40%;"></label>
					<button type="submit" name="submit" value="submit" class="btn btn-primary">Add Event</button>
				</div>
				</div>
	</form>
</div>
<?php } ?>


<section id="team" class="team section-bg">
	<div class="container">

		<div class="section-title">
			<h2 data-aos="fade-up">Upcoming Events</h2>
		</div>
		<div class="row">

			<?php if(isset($events)){?>
			<?php foreach ($events as $event ):?>
			<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
				<div class="member">
					<div class="member-img">
						<img src="http://localhost/kaiac_canoe/assets/img/event.jpg" class="img-fluid" alt="" style="width: 200px;">
						<div class="social"><?php echo $event['Start_Date'];?>/<?php echo $event['End_Date'];?></div>
					</div>
					<div class="member-info">
						<p><?php echo $event['Addeventmodel'];?></p>
						<form action="http://localhost/kaiac_canoe/registerevent">
							<button class="button" type="submit">Register</button>
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
			var date_input=$('input[name="start_date"]'); //our date input has the name "date"
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
<script>
	$(document).ready(function(){
		var date_input=$('input[name="end_date"]'); //our date input has the name "date"
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
