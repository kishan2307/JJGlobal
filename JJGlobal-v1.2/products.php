<?php
$id = NULL;
$type = 2;
if (isset($_GET['cat'])) {
    $type = $_GET["cat"];
} else {
    header("Location: http://jjglobaltrade.com/");
    die();
}
if (isset($_GET['id'])) {
    $id = $_GET["id"];
}
?>

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
        <div ng-controller="allProducts as prod" ng-init="prod.initProduct('<?php echo $type; ?>', '<?php echo $id; ?>')">
            <div class="container-fluid ab-hcon">
                <h1 class="text-center" ng-bind="prod.activeProduct.name"></h1>
            </div>
            <div class="container" >
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xs-12">
                        <div class="vertical-menu">    
                            <a style="background: #3c763d;margin-bottom:10px; color: aliceblue; font-weight: 800;text-align: center;">Related Products</a>
                            <a ng-click="prod.changeProd(cat)" ng-repeat="cat in prod.data track by $index" ng-if="cat.name != null" ng-class="{'active':cat.id == prod.activeProduct.id}" style="cursor:pointer;">{{cat.name}}</a>
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-9 col-xs-12"> 
                        <div class="container" ng-if="prod.activeProduct == null">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xs-12 commingsoon">
                                    comming soon
                                </div>
                            </div>
                        </div>
                        <div ng-if="prod.activeProduct != null"  ng-init="prod.initData(prod.activeProduct.data)">                            
                            <div><img class="img-responsive product-mainimg"  ng-src="images/product/{{prod.productInfo.image}}" alt="Description" /></div>
                            <div class="prod-heading" ng-if="prod.activeProduct.description != ''"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Description</div>
                            <div class="prod-dec">
                                <p  class="text-justify" ng-repeat="dec in prod.getDec(prod.activeProduct.description) track by $index">{{dec}}</p>
                            </div>
                            <div ng-if="prod.productInfo != null && prod.productInfo.tabels != null" ng-repeat="tabel in prod.productInfo.tabels track by $index">
                                <div class="prod-heading"><i class="fa fa-hand-o-right" aria-hidden="true"></i> {{tabel.title}}</div>                                    
                                <div class="prod-table">
                                    <table class="table">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th>{{tabel.prop.name}}</th>
                                                <th>{{tabel.prop.value}}</th>      
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat="pdt in tabel.data track by $index">
                                                <td>{{pdt.name}}</td>
                                                <td>{{pdt.value}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div ng-if="prod.productInfo.view != null" ng-repeat="view in prod.productInfo.view">
                                <hr>
                                <div class="prod-heading" style="margin-bottom:10px;"><i class="fa fa-hand-o-right" aria-hidden="true"></i> {{view.title}}</div>
                                <div><img class="img-responsive product-mainimg"  ng-src="images/product/{{view.img}}" alt="Description" /></div>                                
                            </div>
                            <div ng-if="prod.ext != null && prod.ext != ''">
                                <div class="prod-heading" ng-if="prod.ext.advantages != null"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Advantages</div>
                                <div class="prod-dec" ng-if="prod.ext.advantages != null">
                                    <p  class="text-justify" ng-repeat="dec in prod.ext.advantages track by $index" style="color: #12a253;">{{$index + 1}}. {{dec}}</p>
                                </div>
                                <div ng-if="prod.ext.custom != null">
                                    <div class="prod-heading"><i class="fa fa-hand-o-right" aria-hidden="true"></i> {{prod.ext.custom.title}}</div>
                                    <div class="prod-dec" ng-if="prod.ext.custom.data != null">
                                        <p  class="text-justify" ng-repeat="dec in prod.ext.custom.data track by $index" style="color: #12a253;">{{$index + 1}}. {{dec}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
        <script>
                    $('[data-page="aproduct"]').addClass('active');</script>
        <?php include 'footer.php'; ?>
    </body>
</html>