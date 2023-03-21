

<style>
	@keyframes ex2_anim {
		0% { margin-left: 0;
			padding-top: 80px;
			padding-bottom: 50px;}
		30% {
			border-radius: 100%;
			transform: scale(1.5);
		}
		55% {
			transform: rotate(180deg);
		}
		100% {
			background-color: #0000e0;
			margin-left: 85%;
			transform: rotate(360deg);
		}
	}

	#anim_ex2 {
		animation-name: ex2_anim;
		animation-duration: 5s;
		background-color: #695eff;
		padding: 20px 0;
		width: 90px;

	}


</style>

<style>
	@keyframes slideInFromLeft {
		0% {
			transform: translateX(-100%);
		}
		100% {
			transform: translateX(0);
		}
	}

	.container-fluid {
		/* This section calls the slideInFromLeft animation we defined above */
		animation: 1s ease-out 0s 1 slideInFromLeft;

		background: #333;
		padding: 30px;
	}
</style>

<div class="container">
	<div id='anim_ex2'>Animation</div>
</div>
<div class="container-fluid" style="padding-top: 100px;">
	<div class="row portfolio-gallery">
		<div class="col-lg-4 col-md-6">
			<div class="portflio-item position-relative mb-4">
				<a href="./assets/img/fuksa2.jpg" class="popup-gallery">
					<img src="./assets/img/fuksa2.jpg" alt="portfolio" class="img-fluid w-100">

					<i class="ti-plus overlay-item"></i>
					<div class="portfolio-item-content">
						<p class="text-white-50">Normal</p>
					</div>
				</a>
			</div>
		</div>

		<div class="col-lg-4 col-md-6">
			<div class="portflio-item position-relative mb-4">
				<a href="./assets/img/fuksa2.jpg" class="popup-gallery">
					<img src="./assets/img/fuksa2.jpg" style="filter: blur(3px);" alt="portfolio" class="img-fluid w-100">

					<i class="ti-plus overlay-item"></i>
					<div class="portfolio-item-content">
						<p class="text-white-50">Blurred</p>
					</div>
				</a>
			</div>
		</div>

		<div class="col-lg-4 col-md-6">
			<div class="portflio-item position-relative mb-4">
				<a href="./assets/img/fuksa2.jpg" class="popup-gallery">
					<img src="./assets/img/fuksa2.jpg" style="transform: rotate(20deg);" alt="portfolio" class="img-fluid w-100">

					<i class="ti-plus overlay-item"></i>
					<div class="portfolio-item-content">

						<p class="text-white-50">Rotate</p>
					</div>
				</a>
			</div>
		</div>

		<div class="col-lg-4 col-md-6">
			<div class="portflio-item position-relative mb-4">
				<a href="./assets/img/fuksa2.jpg" class="popup-gallery">
					<img src="./assets/img/fuksa2.jpg" style=" transform: scaleY(1.2);" alt="portfolio" class="img-fluid w-100">

					<i class="ti-plus overlay-item"></i>
					<div class="portfolio-item-content">
						<br>
						<p class="text-white-50">Scaling</p>
					</div>
				</a>
			</div>
		</div>

		<div class="col-lg-4 col-md-6">
			<div class="portflio-item position-relative  mb-4">
				<a href="./assets/img/fuksa2.jpg" class="popup-gallery">
					<img src="./assets/img/fuksa2.jpg" style="width: 300px; height: 100px; object-fit: cover;
    object-position: 20% 10%;" alt="portfolio" class="img-fluid w-100">

					<i class="ti-plus overlay-item"></i>
					<div class="portfolio-item-content">

						<p class="text-white-50">Crop</p>
					</div>
				</a>
			</div>
		</div>

		<div class="col-lg-4 col-md-6">
			<div class="portflio-item position-relative mb-4">
				<a href="./assets/img/fuksa2.jpg" class="popup-gallery">
					<img src="./assets/img/fuksa2.jpg" alt="portfolio" class="img-fluid w-100">

					<i class="ti-plus overlay-item"></i>
					<div class="portfolio-item-content">
						<p class="text-white-50">Normal</p>
					</div>
				</a>
			</div>
		</div>
	</div>

</div>





<div class="container">
<audio controls>
	<source src="./assets/img/audio.mp3" type="audio/ogg">

	Your browser does not support the audio tag.
</audio>
</div>

<div class="container">
<video width="320" height="240" controls>
	<source src="./assets/img/video.mp4" type="video/mp4">

	Your browser does not support the video tag.
</video>
</div>



<div class="container">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/Csot6qn3304" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


