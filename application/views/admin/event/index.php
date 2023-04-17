<?php
?>

<div class="container">

	<h1 class="page-title" style="padding-top: 7px" >Events Calendar</h1>
</div>

<div class="container bg-light">
	<form action="" method="post">
		<div class="row" style="padding-left: 20%;">
			<div class="col-md-3"> <!-- Date input -->
				<label class="control-label" for="date">Start Date</label>
				<input class="form-control" id="date" name="start_date" placeholder="MM/DD/YYY" type="text" required/>
			</div>

			<div class="col-md-3"> <!-- Date input -->
				<label class="control-label" for="date">End Date</label>
				<input class="form-control" id="date" name="end_date" placeholder="MM/DD/YYY" type="text" required/>
			</div>

			<div class="col-md-3">
				<label for="inputAddress">Event</label>
				<input type="text" class="form-control" id="inputAddress" name="name_event" required>
			</div>
		</div>


		<div class="row" style="padding-left: 20%;">

			<div class="col-md-3">
				<label for="inputState">Type of Event</label>
				<select id="inputState" class="form-control" name="type_event" required>
					<option value="" selected>Choose...</option>
					<option value="National Championship">National Championship</option>
					<option value="CSS"> CSS</option>
					<option value="Amical">Amical</option>
				</select>
			</div>


			<div class="col-md-3">
				<label for="inputCity">Location</label>
				<input type="text" class="form-control" id="inputCity" name="location" required>
			</div>

			<div class="col-md-12" style="padding-right: 200px">

				<button type="submit" name="add_event" value="add" class="btn btn-primary"  style="float: right;">Add Event</button>
			</div>
		</div>
	</form>
</div>



<section id="team" class="team section-bg">
	<div class="container">

		<div class="section-title">
			<h2 data-aos="fade-up">Upcoming Events</h2>
		</div>
		<div class="row">

			<?php if(isset($eventes)){?>
				<?php foreach ($eventes as $event ):?>
					<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
						<div class="member">
							<div class="member-img">
								<img src="http://localhost/kaiac_canoe/assets/img/event.jpg" class="img-fluid" alt="" style="width: 200px;">
								<div class="social"><?php echo $event['Start_Date'];?>/<?php echo $event['End_Date'];?></div>
							</div>
							<div class="member-info">
								<p><?php echo $event['Event'];?></p>


								<div style="display: inline-flex">
									<a href="http://localhost/kaiac_canoe/adminedit/<?php echo $event['ID_Event'];?>" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3"  title="edit">
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


									<a href="http://localhost/kaiac_canoe/deleventadmin/<?php echo $event['ID_Event'];?>" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3"  title="delete">
							<span class="svg-icon svg-icon-md svg-icon-primary">

								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">

									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

										<rect x="0" y="0" width="24" height="24" />

										<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />

										<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />

									</g>

								</svg>
							</span>

									</a>

								</div>
							</div>


						</div>
					</div>
				<?php endforeach; }?>

			<div class="section-title">
				<h2 data-aos="fade-up">Past Events</h2>
			</div>
			<div class="row">
				<?php if(isset($eve)){?>
					<?php foreach ($eve as $events ):?>
						<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
							<div class="member">
								<div class="member-img">
									<img src="http://localhost/kaiac_canoe/assets/img/event.jpg" class="img-fluid" alt="" style="width: 200px;">
									<div class="social"><?php echo $events['Start_Date'];?>/<?php echo $events['End_Date'];?></div>
								</div>
								<div class="member-info">
									<p><?php echo $events['Event'];?></p>


									<div style="display: inline-flex">
										<a href="http://localhost/kaiac_canoe/adminedit/<?php echo $events['ID_Event'];?>" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3"  title="edit">
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


										<a href="http://localhost/kaiac_canoe/deleventadmin/<?php echo $events['ID_Event'];?>" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3"  title="delete">
							<span class="svg-icon svg-icon-md svg-icon-primary">

								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">

									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

										<rect x="0" y="0" width="24" height="24" />

										<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />

										<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />

									</g>

								</svg>
							</span>

										</a>

									</div>
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
