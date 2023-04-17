<?php
?>

<div class="container">

	<h1 class="page-title "  style="padding-top: 7px">Add Home News</h1>
</div>


<div class="container bg-light">
	<form  method="post" enctype="multipart/form-data">
		<label for="test">Title</label><br>
		<input type="text" name="title"><br>
		<label for="test">Description</label><br>
		<textarea name="description" style="width:100%; height:200px;">

    </textarea>
		<div class="row" style="padding-right: 20%;  ">
			<lable>
				<p id="upload_img_profile">
					<img src="http://localhost/kaiac_canoe/assets/img/addimg.jpg" id="profile" class="rounded-circle img-fluid border border-2 border-white" style="width: 150px;">
				</p>
				<img id="output_profile" style="width: 150px;">
				<input  type="file" id="input_profile" name="userfile0[]" onclick="myProfileFunction()" onchange="loadFileProfile(event)" >
			</lable>
		</div>

		<button type="submit" name="submit" value="submit" class="btn btn-primary"  style="float: right;">Add Description</button>

	</form>
</div>
