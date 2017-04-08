<!DOCTYPE html>
<html lang="en">
    <!-- head start -->
    <?php include 'head.php'; ?>

    <!-- Body part start -->
    <body ng-app="myApp" ng-controller="company"> 

        <!-- page lodader -->
        <div class="loader">Loading...</div>
        <div id="hider"></div>

        <!-- Header start  -->
        <?php include 'header.php'; ?>

        <!-- Menu start  -->
        <?php include 'Menu.php'; ?>
        <!-- Menu End -->

        <!-- Slider start -->
        <?php include 'slider.php'; ?>    
        <!-- Slider End -->

        <div class="container about-container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center title">Welcome to JJ Global Pvt. Ltd.</h2>
                </div>
                <div class="col-md-12 content">
                    <p class="text-justify">“J J GLOBAL TRADE”, is a reputable Manufacturer and Merchant Exporter company.J J Global Trade are a family owned organization engaged in manufacturing and exporting of Agriculture & Mining Machinery.</p>
                    <p class="text-justify">Involved in exporting of various Indian Spices & Foods products, Safety Products. Theseproducts are manufactured at the vendor's premises as per the quality standards of the industry.Our range is appreciated in international markets.</p>
                    <p class="text-justify">J J Global Trade set-up a state-of-the-art manufacturing unit based on latest technology & world class manufacturing facility. These Machinery are appreciated for their excellent functionality, high speed, handling capacity, sturdy construction and energy saving features.</p>
                    <p class="text-justify">Our tie-ups with the leading vendors have helped us in serving optimum quality products to our clients worldwide. We are capable of understanding the specific requirements of our clients. We carry stringent quality test right from the sourcing procedure until the final dispatch. Meeting the requirements of various industries, we have become a leading exporter.</p>
                    <p class="text-justify">Our wide distribution network assists us in maintaining the healthy relation with our clients by delivering these products in a prompt manner. Ethical business dealings and timely delivery of our organization make us competent to maintain healthy relationship with our clients. In order to meet the specific requirements of our clients, we also provide customized product range.</p>
                </div>
            </div>
        </div>


        <div class="container about-container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center title">OUR LATEST PRODUCTS</h2>
                </div>
            </div>
        </div>

        <div class="container special-product">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Shoes/Safety Shoes Products 400 - 267 (1).jpg" alt="shose">
                        <div class="caption">
                            <h3 class="title">Safety Shoes</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh </p>
                            <p><a href="#" class="btn btn-primary" role="button">More Details</a> <a href="#" class="btn btn-default" role="button">Related Products</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Spices/Turmeric Powder (1).jpg" alt="Turmeric Powder">
                        <div class="caption">
                            <h3 class="title">Turmeric Powder</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh </p>
                            <p><a href="#" class="btn btn-primary" role="button">More Details</a> <a href="#" class="btn btn-default" role="button">Related Products</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="images/Spices/Chilli Powder (3).jpg" alt="shose">
                        <div class="caption">
                            <h3 class="title">chilli powder</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh </p>
                            <p><a href="#" class="btn btn-primary" role="button">More Details</a> <a href="#" class="btn btn-default" role="button">Related Products</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="push">
        </div>

        <?php include 'footer.php'; ?>
        <script>$('[data-page="home"]').addClass('active');</script>
    </body>

</html>
