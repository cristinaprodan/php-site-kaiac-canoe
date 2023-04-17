<style>
	.space{
		padding-bottom: 0px;
	}
</style>

<div class="section">
	<div>
		<div class="row full-height justify-content-center">
			<div class="col-12 text-center align-self-center">
				<div>


					<label for="reg-log"></label>
					<div class="card-3d-wrap mx-auto">
						<div class="card-3d-wrapper">
							<div class="card-front">

									<?php echo validation_errors(); ?>

									<?php echo form_open('http://localhost/kaiac_canoe/verify'); ?>
									<div class="text-center">
										<h4 class="mb-4 pb-3" style="color: #6d7579"> Log In</h4>
										<div class="form-group">
											<input type="email" name="username" class="form-style" placeholder="Your Email" >
											<i class="input-icon uil uil-at"></i>
										</div>
										<div class="form-group mt-2">
											<input type="password" name="password" class="form-style" placeholder="Your Password" >
											<i class="input-icon uil uil-lock-alt"></i>
										</div>
										<button type="submit" class="btn btn-primary block full-width m-b">Login</button>
										<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
									</div>

								</form>
								</div>
							</div>
							<div class="card-back">
								<div class="center-wrap">
									<?php echo validation_errors(); ?>

									<?php echo form_open('http://localhost/kaiac_canoe/verify'); ?>


								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


