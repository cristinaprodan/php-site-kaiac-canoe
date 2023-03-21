<?php
?>


<div class="container">

	<h1 class="page-title" style="padding-top: 7px" >Edit event</h1>
</div>
<?php if(isset($event)){?>
	<?php foreach ($event as $event) :?>
		<div class="container bg-light">
			<form action="" method="post">
				<div class="row" style="padding-left: 20%;">
					<div class="col-md-3"> <!-- Date input -->
						<label class="control-label" for="date">Start Date</label>
						<input class="form-control" id="date" name="start_date" placeholder="MM/DD/YYY" type="text" value="<?php echo $event['Start_Date']?>"/>
					</div>

					<div class="col-md-3"> <!-- Date input -->
						<label class="control-label" for="date">End Date</label>
						<input class="form-control" id="date" name="end_date" placeholder="MM/DD/YYY" type="text" value="<?php echo $event['End_Date']?>"/>
					</div>

					<div class="col-md-3">
						<label for="inputAddress">Event</label>
						<input type="text" class="form-control" id="inputAddress" name="name_event" value="<?php echo $event['Event']?>">
					</div>
				</div>


				<div class="row" style="padding-left: 20%;">

					<div class="col-md-3">
						<label for="inputState">Type of Event</label>
						<select id="inputState" class="form-control" name="type_event" value="<?php echo $event['Type_Event']?>">
							<option value="" selected>Choose...</option>
							<option value="National Championship">National Championship</option>
							<option value="CSS"> CSS</option>
							<option value="Amical">Amical</option>
						</select>
					</div>


					<div class="col-md-3">
						<label for="inputCity">Location</label>
						<input type="text" class="form-control" id="inputCity" name="location" value="<?php echo $event['Location']?>">
					</div>

					<div class="col-md-12" style="padding-right: 200px">

						<button type="submit" name="save_events" value="save" class="btn btn-primary"  style="float: right;">Save Event</button>
					</div>
				</div>
			</form>
		</div>

	<?php endforeach; }?>


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



