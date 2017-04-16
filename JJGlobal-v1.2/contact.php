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
<div ng-controller="contact as con">
<div class="container-fluid ab-hcon">
  <h1 class="text-center">Contact Us</h1>
</div>
<div class="alert alert-success alert-dismissable fade in" style="width: 85%;margin: auto;" ng-show="con.alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> we'll call you soon.
</div>
<div class="container" id="aboutus">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="well well-sm">
        <form>
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="name">
                Name</label>
                <input type="text" class="form-control" id="name" ng-model="con.data.name" placeholder="Enter name" required="required" />
              </div>
              <div class="form-group">
                <label for="email">
                Email Address</label>
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                </span>
                <input type="email" class="form-control" id="email" ng-model="con.data.email" placeholder="Enter email" required="required" /></div>
              </div>
              <div class="form-group">
                <label for="subject">Phone</label>
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span>
                </span>
                <input type="text" class="form-control" id="phone" ng-model="con.data.phone" placeholder="Enter Phone number" required="required" /></div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="name">
                Message</label>
                <textarea name="message" id="message" class="form-control" ng-model="con.data.message" rows="9" cols="25" required="required"
                placeholder="Message"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary pull-right" ng-click="con.submit();" id="btnContactUs">
              Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>    
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14766.013232388372!2d70.79522601911587!3d22.296797209000612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca045f584125%3A0xcfd266b856181821!2sJ+J+GLOBAL+TRADE!5e0!3m2!1sen!2sin!4v1482556418851" width="100%" height="400" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
    </div>    
  </div>
</div>
</div>
<script>
  $('[data-page="contact"]').addClass('active');
</script>
<?php include 'footer.php';?>
</body>
</html>