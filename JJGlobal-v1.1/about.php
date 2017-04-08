<!DOCTYPE html>
<html lang="en">
<!-- head start -->
<?php include 'head.php';?>

<!-- Body part start -->
<body ng-app="myApp" ng-controller="company"> 

<!-- page lodader -->
<div class="loader">Loading...</div>
<div id="hider"></div>

<!-- Header start  -->
<?php include 'header.php';?>
 <!-- Menu start  -->
<?php include 'Menu.php';?>
<!-- Menu End -->

<div class="container-fluid ab-hcon">
	<h1 class="text-center">About</h1>
</div>

<div class="container" id="aboutus">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<p>“J J GLOBAL TRADE”, is a reputable Manufacturer and Merchant Exporter company.J J Global Trade are a family owned organization engaged in manufacturing and exporting of Agriculture & Mining Machinery.</p>
			<p>Involved in exporting of various Indian Spices & Foods products, Safety Products. Theseproducts are manufactured at the vendor's premises as per the quality standards of the industry.Our range is appreciated in international markets.</p>
			<p>J J Global Trade set-up a state-of-the-art manufacturing unit based on latest technology & world class manufacturing facility. These Machinery are appreciated for their excellent functionality, high speed, handling capacity, sturdy construction and energy saving features.</p>
			<p>Our tie-ups with the leading vendors have helped us in serving optimum quality products to our clients worldwide. We are capable of understanding the specific requirements of our clients. We carry stringent quality test right from the sourcing procedure until the final dispatch. Meeting the requirements of various industries, we have become a leading exporter.</p>
			<p>Our wide distribution network assists us in maintaining the healthy relation with our clients by delivering these products in a prompt manner. Ethical business dealings and timely delivery of our organization make us competent to maintain healthy relationship with our clients. In order to meet the specific requirements of our clients, we also provide customized product range.</p>
		</div>
<!-- 		<div class="col-sm-12 col-md-4 col-lg-4">
	<div id="myCarousel" class="carousel slide img-crsl">        
                <div class="carousel-inner">           
                    <div class="item active"> 
                    	<a href="#"><img class="thumbnail" src="http://placehold.it/600x400/" alt="Slide1"></a>
                        <div class="caption">
                       	  <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                        </div>
                    </div>
                    <div class="item"> 
                    	<a href="#"><img class="thumbnail" src="http://placehold.it/600x400/" alt="Slide2"></a>
                        <div class="caption">
                       	  <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                        </div>                                                           
                     </div>  
                    <div class="item"> 
                    	<a href="#"><img class="thumbnail" src="http://placehold.it/600x400/" alt="Slide3"></a>
                        <div class="caption">
                       	  <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</h4>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                        </div>                        
                    </div>                                                                                   
                </div>
                 Indicators
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>                                                                 
            </div>End Carousel
</div> -->
</div>
</div>
<script>
$('[data-page="about"]').addClass('active');
	$('#myCarousel').carousel({
    	interval:  4000
	});
</script>
<?php include 'footer.php';?>

</body>

</html>