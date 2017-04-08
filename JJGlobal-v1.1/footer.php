<div class="container-fluid footer">
<div class="row">
   	<div class="col-sm-12 col-md-12 col-xs-12 text-center ebrochure">Download our latest E-Brochure at Just one click  <button type="button" class="btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</button></div>
</div>
	<div class="row ft1"><p class="text-center ft1p">“Our passion is in making, our expertise is in engineering. From startups to Fortune 500s, we consult on product testing and design for mass production.”</p></div>
	<div class="row ft-bg-img ft-ct">
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ft-block">
			<p class="title text-center">products</p>
			<div class="prodTag">

			   <a href="product.php?id={{prod.id}}&&type={{prod.type}}" ng-repeat="prod in products" ng-show="prod.active=='1'">{{prod.name}}</a>
			
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<p class="title text-center">contact us - sales & marketing</p>
			<p class="text"> <i class="fa fa-home"></i> {{profile.address}}</p>
			<p class="text"><i class="fa fa-phone-square"></i> {{profile.phone}}</p>
			<p class="text"><i class="fa fa-phone-square"></i> {{profile.phone_2}}</p>
			<p class="text"><i class="fa fa-envelope"></i> {{profile.email}}</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<p class="title text-center">contact us - production unit</p>
			<p class="text"> <i class="fa fa-home"></i> {{profile.address_2}}</p>
			<p class="text"><i class="fa fa-phone-square"></i> {{profile.phone}}</p>
			<p class="text"><i class="fa fa-phone-square"></i> {{profile.phone_2}}</p>
			<p class="text"><i class="fa fa-envelope"></i> {{profile.email}}</p>
		</div>		
	</div>
	<div class="row ft-last">
		
		<div class="col-sm-12 col-md-6 col-lg-6"><p class="txt text-center">
© 2016 JJGlobalTrade.com. Proudly made by Kishan Dadhania.</p></div>
		<div class="col-sm-12 col-md-6 col-lg-6"><ul class="inline right pull-right">
<li class="facebook"><a href="#">Facebook</a></li>
<li class="twitter"><a href="#">Twitter</a></li>
<li class="linkedin"><a href="#">LinkedIn</a></li>
<li class="google-plus"><a href="#">Google+</a></li>
</ul></div>
	</div>
	
</div>