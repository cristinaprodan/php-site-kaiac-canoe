
<style>
	.space{
		padding-bottom: 0px;
	}
</style>


<div class="container" style="padding-top: 30px; padding-bottom: 50px;">


<h1 class="page-title" style="text-align: center;">Athletes</h1>

<div class="athletes-search-wrapper" style="padding-top: 30px;">




	<div class="container">

		<form action="" method="post">

			<div class="input-group">
				<input type="search" name="search" class="form-control rounded" placeholder="Type athlete name" aria-label="Search" aria-describedby="search-addon" />
				<button type="submit" name="cautare" value="cautare" class="btn btn-outline-primary">Search</button>
			</div>
		</form>




		<div class="row" style="padding-top: 30px;">


		<?php if(isset($athletes)){ ?>

			<?php foreach ($athletes as $ath ):?>
				<div class="col md-4">
					<div class="gallery">

						<img src="<?php echo $ath['Img'];?>"title= "<?php echo $ath['Name_Ath'];?>" alt="img" width="200" height="200">
						<div class="desc">Name: <?php echo $ath['Name_Ath'];?></div>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $ath['ID_Athletes'];?>">
							View
						</button>
					</div>
				</div>
			<?php  endforeach; }?>

		</div>
</div>
</div>
</div>

<?php foreach ($athletesdesc as $ath ):?>

<div class="modal fade" id="exampleModal<?php echo $ath['ID_Athletes'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><?php echo $ath['Name_Ath'];?></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">

				<p><?php echo $ath['Year'];?></p>
				<p><?php echo $ath['Description'];?></p>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<?php endforeach;?>





