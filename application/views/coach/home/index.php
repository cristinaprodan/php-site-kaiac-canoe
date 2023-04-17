
<div class="container">

	<h1 class="page-title "  style="padding-top: 7px">Atheletes </h1>
</div>

<div class="container bg-light" >

	<form action="http://localhost/kaiac_canoe/myteam" method="post" enctype="multipart/form-data">
		<div class="row" style="padding-top: 20px;">
		<div class="col-md-3">
		<div class="row" style="padding-right: 20%;  ">
			<lable>
				<p id="upload_img_profile">
					<img src="http://localhost/kaiac_canoe/assets/img/athletes/add_img.jfif" id="profile" class="rounded-circle img-fluid border border-2 border-white" style="width: 150px;">
				</p>
				<img id="output_profile" style="width: 150px;">
				<input  type="file" id="input_profile" name="userfile0[]" onclick="myProfileFunction()" onchange="loadFileProfile(event)"required >
			</lable>
		</div>
	 </div>
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-3">
					<label for="inputAddress">First Name</label>
					<input type="text" class="form-control" id="inputAddress" name="first_name" required>
				</div>
				<div class="col-md-3">
					<label for="inputAddress">Last Name</label>
					<input type="text" class="form-control" id="inputAddress" name="last_name" required>
				</div>
				<div class="col-md-3">
					<label for="inputCity">SSN</label>
					<input type="text" class="form-control" id="inputCity" name="SSN" required>
				</div>

			</div>


			<div class="row">


			<div class="col-md-3">
				<label for="inputState">Gender</label>
				<select id="inputState" class="form-control" name="gender" required>
					<option value="" selected>Choose...</option>
					<option value="1">Male</option>
					<option value="2">Famale</option>
					<option value="Other">Other</option>
				</select>
			</div>



				<div class="col-md-3"> <!-- Date input -->
					<label class="control-label" for="date">Date of birth</label>
					<input class="form-control" name="date_birth" placeholder="MM/DD/YYY" type="date" required/>
				</div>

			<div class="col-md-3">
				<label for="inputState">Discipline</label>
				<select id="inputState" class="form-control" name="Discipline" required>
					<option value="" selected>Choose...</option>
					<option value="1">Kaiac</option>
					<option value="3">Canoe</option>

				</select>
			</div>
		</div>


			<div class="col-md-12" style="padding-right: 175px" >
				<button type="submit" name="submit" value="submit" class="btn btn-primary " style="float: right; background-color: gray;">Add Athletes</button>
			</div>
		</div>
	</div>
	</form>

	</div>
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
								<img src="<?php echo $myteam['URL_Img']?>" class="img-fluid" alt="" style="width: 200px;">
								<div class="social"><?php echo $myteam['first_name'];?>-<?php echo $myteam['last_name'];?></div>
							</div>

						</div>
					</div>
				<?php endforeach; }?>
		</div>
</section>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script src="<?php echo base_url('assets/js/kc.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
<script src="https://kit.fontawesome.com/572b75ccf1.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src=
		"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>

<!--  jQuery -->

<script>
	var loadFileProfile = function(event) {
		var output = document.getElementById('output_profile');
		output.src = URL.createObjectURL(event.target.files[0]);
		output.onload = function() {
			URL.revokeObjectURL(output.src) // free memory
		}
	};

	//document.getElementById("upload_img_profile").addEventListener("click", myProfileFunction);

	function myProfileFunction(){
		$("#upload_img_profile").hide();
	}
</script>
