<?php
?>

<div class="container">

	<h1 class="page-title "  style="padding-top: 7px">Add a Clubs </h1>
</div>

<div class="content d-flex flex-column flex-column-fluid" style="padding-left: 30px; padding-bottom: 100px; background-color: #eeee;" >

	<form action="http://localhost/kaiac_canoe/admin/Admin/index" method="post" enctype="multipart/form-data">

			<div class="row">
					<div class="col-md-4">
						<label for="inputAddress">Club Name</label>
						<input type="text" class="form-control" id="inputAddress" name="team_name">
					</div>




					<div class="col-md-4">
						<label for="inputState">Teams type</label>
						<select id="inputState" class="form-control" name="team_type">
							<option value="" selected>Choose...</option>
							<option value="css">Club Sportiv</option>
							<option value="csm">Club Municipal</option>
							<option value="Other">Other</option>
						</select>
					</div>


					<div class="col-md-4" style="padding-right: 175px" >
						<button type="submit" name="submit" value="add" class="btn btn-primary " style="float: right;">Add Clubs</button>
					</div>
			</div>

	</form>

</div>





<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

	<!--begin::Entry-->

	<div class="d-flex flex-column-fluid">

		<!--begin::Container-->

		<div class="container-xxl">

			<!--begin::Card-->

			<!--begin::Advance Table Widget 1-->

			<div class="card card-custom card-stretch card-shadowless gutter-b">

				<!--begin::Header-->

				<div class="card-header border-0 py-5">

					<h3 class="card-title align-items-start flex-column">

						<span class="card-label font-weight-bolder text-dark" style="padding-left: 50px;">All Clubs</span>

						<br>

					</h3>


				</div>

				<!--end::Header-->


			</div>

			<!--begin::Body-->

			<div class="card card-body py-0" style="padding-left: 60px;">

				<!--begin::Table-->

				<div class="table-responsive">

					<table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">

						<thead>

						<tr class="text-center">


							<th class="pr-0" style="width: 50px">Club Name</th>
							<th style="min-width: 10px">Club Type</th>
							<th style="min-width: 10px">Action</th>


						</tr>

						</thead>






						<?php if(isset($teams)){ ?>
						<?php foreach ($teams as $team): ?>

							<tr class="text-center">

								<td>
									<span class="text-dark-75 font-weight-bolder d-block"><?php echo $team['Name_Team']?></span>

								</td>


								<td>
									<span class="text-dark-75 font-weight-bolder d-block"><?php echo $team['Team_Type']?></span>

								</td>


								<td class="pr-0 text-right" style="display:inline-flex">






									<a href="http://localhost/kaiac_canoe/editteam/<?php echo $team['ID_Team']?>" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3"  title="edit">
																		<span class="svg-icon svg-icon-md svg-icon-primary">

																			<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->

																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">

																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

																					<rect x="0" y="0" width="24" height="24" />

																					<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />

																					<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />

																				</g>

																			</svg>

																			<!--end::Svg Icon-->

																		</span>

									</a>



									<a href="http://localhost/kaiac_canoe/delteam/<?php echo $team['ID_Team'];?>" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3"  title="delete">


										<span class="svg-icon svg-icon-md svg-icon-primary">

											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">

												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

													<rect x="0" y="0" width="24" height="24" />

													<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />

													<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />

												</g>

											</svg>

									</span>
								</td>


							</tr>




						<?php endforeach;} ?>




					</table>

				</div>

				<!--end::Table-->

			</div>

			<!--end::Body-->

		</div>
	</div>
</div>




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
