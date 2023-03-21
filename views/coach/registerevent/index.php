<div class="container bg-light"  style="border-bottom: solid 2px;">

	<h1 class="page-title" style="padding-top: 7px; text-align: center">Event Register</h1>
	<?php if(isset($event)){?>
	<?php foreach ($event as $event ):?>
	<h6 class="social" style="text-align: center" >Last Registration Day: <?php echo date("Y-m-d",strtotime ( '-1 day' , strtotime ( $event['Start_Date'] ) )) ;?></h6>
</div>
<div class="container" style="border-bottom: solid 2px;">
	<h4>Event Date</h4>

	<h6>First Day:  <small><?php echo $event['Start_Date'];?></small></h6>
	<h6>Last day: <small><?php echo $event['End_Date'];?></small></h6>
	<h6>Location: <small><?php echo $event['Location'];?></small></h6>

		<?php endforeach; }?>

</div>

<div class="container" style="padding-top: 20px">

	<h1>Races</h1>



	<form method="post">
		<div class="row">
			<div class="col-md-3">
				<select name="race" onchange="getData()" id="race" required>
					<option value="0">Choose </option>
					<option value="1">Kaiac </option>
					<option value="3">Canoe </option>

				</select>
			</div>
			<div class="col-md-3">
		<select name="category" onchange="getData()" id="category" required>
			<option value="0">Choose </option>
			<option value="1">U12</option>
			<option value="1"> Jun III</option>
			<option value="2">Jun II</option>
			<option value="3">Jun I</option>
			<option value="4">U23</option>
			<option value="5">Senior</option>
		</select>
		</div>
			<div class="col-md-3">
				<select name="distance" required >
					<option value="0">Choose </option>
					<option value="1">200m</option>
					<option value="1">500m</option>
					<option value="2">1000m</option>
					<option value="3">2000m</option>
				</select>
			</div>

		<div class="col-md-3">
		<select name="gender" onchange="getData()" id="distance" required>
			<option value="0">Choose </option>
			<option value="2">Women</option>
			<option value="1">Man</option>
		</select>
		</div>
		</div>
		<div class="row" style="padding-top: 10px;">
		<div id="divID"></div>
		</div>
		<div class="col-sm-4" style="padding-right: 175px" >
			<button type="submit" name="submit" value="submit" class="btn btn-secondary" style="float: right;">Register</button>
		</div>
	</form>
	<?php if(isset($eventes)){?>
	<?php foreach ($eventes as $event ):?>

	<a href="http://localhost/kaiac_canoe/startlist/<?php echo $event['ID_Event'];?>" class="button" type="submit" style="color: azure;">View Start list</a>
		<?php endforeach; }?>



</div>
<script>
	function checkfunction() {
		var check = document.getElementById("check");
		var message = document.getElementById("message");
		if (check.checked == true) {
			message.style.display = "block";
		}
		else {
			message.style.display = "none";
		}
	}
</script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	function getData() {

		race= document.getElementById("race").value;
		category= document.getElementById("category").value;
		distance= document.getElementById("distance").value;
		$.ajax({
			url: 'http://localhost/kaiac_canoe/index.php/Search/get_data/'+ race + category + distance,
			type: 'GET',

			success: function (res) {
				$("#divID").html(res);
			}
		});

	}
</script>
