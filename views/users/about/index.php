<?php
?>


<div class="container px-5">
	<div class="row">
		<div class="col-md-6">
			<iframe width="450" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Budeasa&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
		</div>
		<div class="col-md-6">
	<form action="" method="post">
		<div class="row">
			<div class="col-25">
				<label for="fname">First Name</label>
			</div>
			<div class="col-75">
				<input type="text" id="fname" name="firstname" placeholder="Your name..">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="lname">Last Name</label>
			</div>
			<div class="col-75">
				<input type="text" id="lname" name="lastname" placeholder="Your last name..">
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="country">Country</label>
			</div>
			<div class="col-75">
				<select id="country" name="country">
					<option value="romania">Romanian</option>
					<option value="canada">Canada</option>
					<option value="usa">USA</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="subject">Subject</label>
			</div>
			<div class="col-75">
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
			</div>
		</div>
		<div class="row">
			<input type="submit" name="contact" value="Submit">
		</div>
	</form>
		</div>
	</div>
</div>
</div>
