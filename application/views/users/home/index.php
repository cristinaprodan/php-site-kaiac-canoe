<?php
?>
<style>
	.space{
		padding-bottom: 0px;
	}
</style>
<!-- Header-->
<header class="bg-dark py-1">
	<div class="slideshow-container">

		<?php if(isset($descriptionhome)){?>
			<?php foreach ($descriptionhome as $desc):?>
				<div class="mySlides">
					<div class="row gx-5 align-items-center justify-content-center">
						<div class="col-lg-8 col-xl-7 col-xxl-6">
							<div class="my-5 text-center text-xl-start">
								<h1 class="display-5 fw-bolder text-white mb-2"><?php echo $desc['Title'];?></h1>
								<p class="lead fw-normal text-white-50 mb-4" style="color: #939aa1;"><?php echo $desc['Descriptionh'];?></p>
							</div>
						</div>
						<div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="<?php echo $desc['Img'];?>" alt="..." /></div>
					</div>
				</div>

			<?php endforeach; }?>


	</div>
	<br>


</header>
<br>
<section>

	<p><iframe width="560" height="315" src="https://www.youtube.com/embed/Itli1jWSUJ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>

</section>


<script>let slideIndex = 0;
	showSlides();

	function showSlides() {
		let i;
		let slides = document.getElementsByClassName("mySlides");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		slideIndex++;
		if (slideIndex > slides.length) {slideIndex = 1}
		slides[slideIndex-1].style.display = "block";
		setTimeout(showSlides, 8000); // Change image every 2 seconds
	}</script>

