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
        
        <script>
                    $('[data-page="aproduct"]').addClass('active');
        </script>
<?php include 'footer.php'; ?>
    </body>
</html>