
setTimeout(function () {
    $('.loader,#hider').hide();
    $('body').css('overflow', 'auto');
}, 3000);


/*angular js code Modual */

var app = angular.module("myApp", []);

//controler 

(function () {
    /*Main controller*/
    app.controller("company", function ($scope, infoServices) {
        $scope.name = "JJ Global Trade";
        $scope.lastName = "Doe";
        $scope.products = [];
        var getprofile = infoServices.getInfo({type: 'profile'}, function (data) {
            var obj = {};
            $.each(data, function (index, el) {
                obj[el.name] = el.value;
            });
            $scope.profile = obj;
        });

        infoServices.getInfo({type: 'products'}, function (data) {
            $scope.products = data;
        });
    });

    /*Contact Us page Controller*/
    app.controller("contact", function ($scope, infoServices, dataServices) {
        this.data = {};
        this.alert = false;
        this.submit = function () {
            if (dataServices.isNotEmpty(this.data.name) && dataServices.isNotEmpty(this.data.email) && dataServices.isNotEmpty(this.data.phone)) {
                this.data.type = 'contact';
                this.data.mode = 'insert';
                var self = this;
                infoServices.getInfo(this.data, function (data) {
                    self.data = {};
                    self.alert = true;
                });
            }
        }
    });

    /*product page Controller*/
    app.controller("singleProduct", function ($scope, infoServices, dataServices) {
        $scope.productInfo = {};
        $scope.productSpe = [];
        $scope.productPkg=[];

        $scope.getDec = function (dec) {
            if (dataServices.isNotEmpty(dec)) {
                var ar = [];
                ar = dec.split("|")
                return ar;
            }
        }
                     
        $scope.initProduct = function (id, type) {
//            infoServices.getInfo({type: 'products_info', id: id}, function (data) {
//                if (data && data.length > 0) {
//                    $scope.productInfo = data[0];
//                }
//            });

            infoServices.getInfo({type: 'products_spe', id: id}, function (data) {
                if (data && data.length > 0) {
                    $scope.productInfo.description=data[0].description;
                    $scope.productInfo.name=data[0].name;
                    $scope.productInfo.product_cat=data[0].product_cat;
                    $scope.productInfo.id=data[0].id;
                    if (data[0] && data[0].data) {
                        var spe = JSON.parse(data[0].data);
                        if(spe){                            
                            $scope.productInfo.image=spe.image;
                        }
                        if (spe && spe.prop) {
                            $scope.productSpe = spe.prop;
                        }
                        if (spe && spe.packing){
                            $scope.productPkg = spe.packing;
                        }
                    }
                }
            });
        };
    });

})(app);

// Services
(function () {
    app.service('infoServices', function ($http) {
        this.getInfo = function (data, callback) {
            $http({
                method: "GET",
                params: data,
                url: "config/getInfo.php"
            }).then(function mySucces(response) {
                callback(response.data);
            }, function myError(response) {
                console.log('fail to get company info');
            });
        }
    });

    app.service('dataServices', function () {
        this.isNotEmpty = function (data) {
            if (data != null && data != '') {
                return true;
            }
            return false;
        }
    });
})(app);