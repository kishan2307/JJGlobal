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

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET["type"]) && !empty($_GET["id"])) {
            $id = $_GET["id"];
            $type = $_GET["type"];
            ?>
            <div ng-controller="singleProduct">
                <div class="container-fluid ab-hcon">
                    <h1 class="text-center">{{productInfo.name}}</h1>
                </div>
                <div class="container">
                    <div class="row" ng-init="initProduct('<?php echo $id; ?>', '<?php echo $type; ?>')">
                        <div class="col-md-3 col-lg-3 col-xs-12">
                            <div class="vertical-menu">                  
                                <a ng-class="{'active':prod.id == productInfo.id}" href="product.php?name={{prod.name}}&&id={{prod.id}}&&type={{prod.type}}" ng-repeat="prod in products" ng-if="prod.product_cat == productInfo.product_cat">{{prod.name}}</a>
                            </div>
                        </div>
                        <div class="col-md-9 col-lg-9 col-xs-12">        
                            <div><img class="img-responsive product-mainimg" ng-if="productInfo.image != null" ng-src="images/product/{{productInfo.image}}" alt="Description" /></div>
                            <div class="prod-heading">Description</div>
                            <div class="prod-dec">
                                <p class="text-justify" ng-repeat="dec in getDec(productInfo.description) track by $index">{{dec}}</p>
                            </div>
                            <div class="prod-heading" ng-if="productSpe.length > 0">SPECIFICATIONS</div>
                            <div class="prod-table" ng-if="productSpe.length > 0">
                                <table class="table">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Parameters</th>
                                            <th>Value</th>      
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat="pdt in productSpe">
                                            <td>{{pdt.name}}</td>
                                            <td>{{pdt.value}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="prod-heading" ng-if="productPkg.length > 0">PACKING</div>
                            <div class="prod-table" ng-if="productPkg.length > 0">
                                <table class="table">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Type of Bags</th>
                                            <th>Quantity</th>      
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat="pdt in productPkg">
                                            <td>{{pdt.name}}</td>
                                            <td>{{pdt.value}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php } else { ?>
            <div class="container-fluid ab-hcon">
                <h1 class="text-center"><?php if (!empty($_GET["name"])) {
        echo $_GET["name"];
    } ?></h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xs-12 commingsoon">
                        comming soon
                    </div>
                </div>
            </div>
<?php } ?>

        <script>
                    $('[data-page="products"]').addClass('active');
        </script>
<?php include 'footer.php'; ?>
    </body>
</html>