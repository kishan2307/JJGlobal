<!--    <div class="container menu-container">
                                        <ul>
                                                                                <li><a class="active" href="http://www.jjglobaltrade.com/"><span>HOME</span></a></li>
                                                                                <li><a href="http://www.jjglobaltrade.com/"><span>Coming Soon</span></a></li>
                                        </ul>
</div> -->
<div id="menu-container" class="container ">
    <nav class="navbar navbar-inverse">
        <div class="container"> <div class="navbar-header">
                <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">JJ Group</a></div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
                <ul class="nav navbar-nav">
                    <li data-page="home"><a href="home">Home</a></li>
                    <li data-page="about"><a href="about">About Us</a></li>
                    <li data-page="contact"><a href="contact">Contact Us</a></li>
                    <li class="dropdown" data-page="aproduct">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Machinery<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="products?cat=4">Agricultural Machinery</a></li>							
                            <li><a href="products?cat=5">Mining Machinery</a></li>							
                        </ul>
                    </li>

                    <li class="dropdown" data-page="product">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Food & Spices<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li ng-repeat="prod in products" ng-if="prod.product_cat=='2'"><a href="products?id={{prod.id}}&cat={{prod.product_cat}}">{{prod.name}}</a></li>                            								
                        </ul>
                    </li>

                    <li class="dropdown" data-page="product">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Safety Products<span class="caret"></span></a>
                        <ul class="dropdown-menu">								
                            <li><a href="product?name=Safety Shoes">Safety Shoes</a></li>						
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>