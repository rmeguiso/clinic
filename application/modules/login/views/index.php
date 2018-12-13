
<!DOCTYPE html>
<html>
<head>
  <meta name="robots" content="noindex, nofollow">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <title>Admin login</title>
</head>


<body>

<section class="hero is-fullheight" style="background-image: linear-gradient(141deg,#1b3c31 0,#08a08a 71%,#0b8284 100%);">
	<div class="hero-body">
		<div class="container">
			<div class="columns is-centered" ">
				<article class="card is-rounded ">
					<div class="card-content ">
						<h1 class="title " style="color:black; ">Login</h1>
						
            <?php echo form_open('login/login_user'); ?>
							<div class="field ">
								<p class="control has-icons-left has-icons-right ">
									<input class="input " type="email " placeholder="Username" name="username" required>
									<span class="icon is-small is-left ">
										<i class="fa fa-user "></i>
									</span>
									<span class="icon is-small is-right ">
										<i class="fa fa-check "></i>
									</span>
								</p>
							</div>
							<div class="field ">
								<p class="control has-icons-left ">
									
									<input class="input" type="password" placeholder="Password" name="password" required>
									<span class="icon is-small is-left ">
										<i class="fa fa-lock "></i>
									</span>
								</p>
							</div>
							<div class="field">
								<div class="control">

									<script src="https://verifypow.com/lib/captcha.min.js" async></script>
									
									<div class="CRLT-captcha"
									data-hashes="256"
									data-key="43a2bc45e589f2e133f29196424f355ccfd40364d1c9"
									data-whitelabel="false"
									data-disable-elements="button[type=submit]"
									
									>
									<em>Loading Captcha...<br>
									If it doesn't load, please disable Adblock or check your internet connection</em>
								</div>

								</div>
							</div>
							<div class="field ">
								<p class="control ">
									<button class="button is-success" type="submit" name="submit">
										Login
									</button>
								</p>
							</div>
						</form>


					</div>
				</article>
			</div>
		</div>
	</div>



</section>

</body>

</html>