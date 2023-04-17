<?php
?>

<!-- Footer -->


<footer class="bg-dark py-2">


	<div class="container">
		<div class="row text-center">
			<div class="col-md-1" style="padding-top: 30px;"></div>
			<div class="col-md-1">
				<a href="#" title="FRKC">

						<img style="width: 90px" src="./assets/img/frkc.png" ; class="img-responsive">

				</a>
			</div>
			<div class="col-md-2" style="padding-top: 30px;">Events</div>
			<div class="col-md-2"style="padding-top: 30px;">Teams</div>
			<div class="col-md-2"style="padding-top: 30px;">Athletes</div>
			<div class="col-md-2"style="padding-top: 30px;">About</div>
			<div class="col-md-1" style="padding-top: 30px;"></div>
		</div><!-- /.row -->

		<div class="row text-center">
			<div class="col-md-12 social segment">
				<h4>Stay Connected</h4>
				<a href="https://www.facebook.com/Kaiac-Canoe-Romania-140628855983688"><i class="fa fa-facebook fa-3x"></i></a>
				<a href="https://twitter.com/icf"><i class="fa fa-twitter fa-3x"></i></a>
				<a href="#"><i class="fa fa-linkedin fa-3x"></i></a>
			</div><!-- /.col-md-12 -->
		</div><!-- /.row -->

	</div><!-- /.container -->

	<div class="copynote">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					&copy; 2022. All rights reserved.
				</div><!-- /.col-md-12 -->

			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.copynote -->





</footer><!-- /.footer -->
<script src="<?php echo base_url('assets/js/kc.js')?>"></script>
<script src="<?php echo base_url('assets/js/Chart.js')?>"></script>
<script src="<?php echo base_url('assets/js/chart-area-demo.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
<script src="https://kit.fontawesome.com/572b75ccf1.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

	// Area Chart Example
	var ctx = document.getElementById("myAreaChart");
	var myLineChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020", "2021"],
			datasets: [{
				label: "Medals",
				lineTension: 0.3,
				backgroundColor: "rgba(78, 115, 223, 0.05)",
				borderColor: "rgba(78, 115, 223, 1)",
				pointRadius: 3,
				pointBackgroundColor: "rgba(78, 115, 223, 1)",
				pointBorderColor: "rgba(78, 115, 223, 1)",
				pointHoverRadius: 3,
				pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
				pointHoverBorderColor: "rgba(78, 115, 223, 1)",
				pointHitRadius: 10,
				pointBorderWidth: 2,
				data: [<?php echo $statistics2012;?>, <?php echo $statistics2013;?>, <?php echo $statistics2014;?>, <?php echo $statistics2015;?>, <?php echo $statistics2016;?>, <?php echo $statistics2017;?>, <?php echo $statistics2018;?>, <?php echo $statistics2019;?>, <?php echo $statistics2020;?>, <?php echo $statistics2021;?>],
			}],
		},
		options: {
			maintainAspectRatio: false,
			layout: {
				padding: {
					left: 10,
					right: 25,
					top: 25,
					bottom: 0
				}
			},
			scales: {
				xAxes: [{
					time: {
						unit: 'date'
					},
					gridLines: {
						display: false,
						drawBorder: false
					},
					ticks: {
						maxTicksLimit: 7
					}
				}],
				yAxes: [{
					ticks: {
						maxTicksLimit: 5,
						padding: 10,
						// Include a dollar sign in the ticks
						callback: function(value, index, values) {
							return number_format(value);
						}
					},
					gridLines: {
						color: "rgb(234, 236, 244)",
						zeroLineColor: "rgb(234, 236, 244)",
						drawBorder: false,
						borderDash: [2],
						zeroLineBorderDash: [2]
					}
				}],
			},
			legend: {
				display: false
			},
			tooltips: {
				backgroundColor: "rgb(255,255,255)",
				bodyFontColor: "#858796",
				titleMarginBottom: 10,
				titleFontColor: '#6e707e',
				titleFontSize: 14,
				borderColor: '#dddfeb',
				borderWidth: 1,
				xPadding: 15,
				yPadding: 15,
				displayColors: false,
				intersect: false,
				mode: 'index',
				caretPadding: 10,
				callbacks: {
					label: function(tooltipItem, chart) {
						var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
						return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
					}
				}
			}
		}
	});

</script>
<script>
	function initMap() {
		// The location of Uluru
		const uluru = { lat: 44.31503951941943, lng: 23.83783833734021 };
		// The map, centered at Uluru
		const map = new google.maps.Map(document.getElementById("map"), {
			zoom: 10,
			center: uluru,
		});
		// The marker, positioned at Uluru
		const marker = new google.maps.Marker({
			position: uluru,
			map: map,
		});
	}
</script>

<script>
	var loadFileProfile = function(event) {
		var output = document.getElementById('output_profile');
		output.src = URL.createObjectURL(event.target.files[0]);
		output.onload = function() {
			URL.revokeObjectURL(output.src) // free memory
		}
	};

	document.getElementById("upload_img_profile").addEventListener("click", myProfileFunction);

	function myProfileFunction(){
		$("#upload_img_profile").hide();
	}
</script>

<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		slideIndex++;
		if (slideIndex > slides.length) {slideIndex = 1}
		slides[slideIndex-1].style.display = "block";
		setTimeout(showSlides, 7000); // Change image every 2 seconds
	}

</script>
</body>

</html>

