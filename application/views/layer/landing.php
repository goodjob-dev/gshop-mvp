<!-- Header -->
<header>
	<div class="container">
		<nav class="navbar navbar-fixed-top">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand in-page-link" href="#main">
					<img src="images/logo.png">
				</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav page-scroll">
					<li>
						<a href="#about-us">Մեր մասին</a>
					</li>
					<li>
						<a href="#feedbacks">Կարծիքներ</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<!-- ./End Header -->

<!-- Main Section -->
<div class="container-fluid page-block" id="main">
	
	<div class="container">
		<div class="text-center vertical-center">

			<div class="row">
				<div class="top-logo">
					<img src="images/logo-orange.png" />
				</div>	
				<div class="top-description heading col-xs-8 col-xs-offset-2">
					<p>Ստացեք ձեր տնտեսական ապրանքների փաթեթը մեկ կոճակի սեղմումով</p>
				</div>
			</div>

			<div class="row">
				<button data-toggle="modal" data-target="#order-modal" class="btn btn-success order-now">Պատվիրել հիմա</button>	
			</div>
			
		</div>
	</div>

</div>
<!-- ./End Main Section -->

<!-- About us Section -->
<div class="container-fluid page-block" id="about-us">
	<div class="container">
		<div class="text-center vertical-center">
			<h1 class="orange body-font">Մեր Մասին</h1>
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<div class="row">
						<h3 class="body-font text-left">Ի՞նչ է gShop-ը</h3>
						<blockquote class="answer">
							gShop-ը առաքման համակարգ է որը հնարավորություն է տալիս ստանալ 
							ձեզ անհրաժեշտ տնտեսական ապրանքներն ընդհամենը մեկ զանգով
						</blockquote>
					</div>
					<div class="row">
						<h3 class="body-font text-left">Առցանց տարբերակ</h3>
						<blockquote class="answer">
							Մեր բազմաթիվ հաճախորդների խնդրանքով gShop-ը շուտով հասանելի կլինի նաև առցանց տարբերակով։<br>
							Եթե ցանկանում եք կարող ենք <u class="orange">տեղեկացնել</u> ձեզ կայքի բացման մասին։
							<div class="get-notified">
								<div class="form-horizontal">
									<div class="form-group">
										<div class="col-xs-12 col-lg-7 top-margin">
											<input type="e-mail" class="e-mail form-control" placeholder="Մուտքագրեք ձեր էլ. հասցեն" id="get-notified" />
										</div>
										<div class="col-xs-12 col-lg-5 top-margin">
											<input type="button" class="btn btn-success send-email col-xs-12 col-lg-5" value="Ուղարկել">
										</div>
									</div>
								</div>								
							</div>
						</blockquote>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<!-- ./End About us Section -->

<!-- Feedbacks section -->

<div class="container-fluid page-block" id="feedbacks">
	<div class="container">
		<div class="container text-center vertical-center">
			<h1 class="orange body-font">Կարծիքներ</h1>
			<div class="row">
				<div></div>
			</div>
			<div class="row">
				<button data-toggle="modal" data-target="#order-modal" class="btn btn-success order-now">Պատվիրել հիմա</button>	
			</div>
		</div>
	</div>
</div>

<!-- ./End Feedbacks section -->


<!-- Order popup -->

<div class="modal fade in" role="dialog" id="order-modal" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<p class="heading modal-title">Պատվիրել</p>
			</div>
			<div class="modal-body">
				Խնդրում ենք զանգահարել <u class="orange">096-516-526</u> համարով և մենք կառաքենք ձեր փափեթը ձեր նշած ժամին:

				<p class="order-description">Բազմաթիվ հաճախորդների խնդրանքով մեր ծառայությունները շուտով հասանելի կլինեն նաև առցանց տարբերակով։ <a href="#about-us" class="orange know-more">իմանալ ավելին</a></p>
				
			</div>
			<div class="modal-footer">
				<span class="pull-left">Շնորհակալություն:</span>
				<button type="button" class="btn btn-default" data-dismiss="modal">Փակել</button>
			</div>
		</div>
	</div>
</div>