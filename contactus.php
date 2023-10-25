<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <?php include 'head.php'?>
	
</head>
<body>
    <?php include 'navbar.php' ?>
		


	<div class="container-fluid slidercu w-100">
    <div class="row">
    <div class="col-md-6 left-slidecu text-center">
      <h1>Contact Us</h1>
      <p>We would love to hear from you !</p>
      <button type="button" class="btn btn-outline btn-custom">Shop now</button>
      
    </div>
    
    <div class=" col-md-6 right-slidecu ">
      <img class=" mx-auto d-block" src="images/slidecu.png">
    
  </div>

    </div>
  </div>
  
  <div class="container-fluid contact-form rounded">
    <div class="row px-5">
        <div class="col-sm-6">
            <div>
                <p class="text-secondary">Fill up the form and our Team will get back to you within in 24 hours</p>
            </div>
            <div class="links" id="bordering"> <a href="#" class="btn rounded text-white p-3"><i class="fa fa-phone icon text-primary pr-3"></i>+0123 4567 8910</a> <a href="#" class="btn rounded text-white p-3"><i class="fa fa-envelope icon text-primary pr-3"></i>hello@flowbase.com</a> <a href="#" class="btn rounded text-white p-3"><i class="fa fa-map-marker icon text-primary pr-3"></i>102 street 2714 Don</a> </div>
            <div class="pt-lg-4 d-flex flex-row justify-content-start">
                <div class="pad-icon"> <a class="fa fa-facebook text-white" href="#"></a> </div>
                <div class="pad-icon"> <a class="fa fa-twitter text-white" href="#"></a> </div>
                <div class="pad-icon"> <a class="fa fa-instagram text-white" href="#"></a> </div>
            </div>
        </div>
        <div class="col-sm-6 pad">
            <form class="rounded msg-form">
                <div class="form-group"> <label for="name" class="h6">Your Name</label>
                    <div class="input-group border rounded">
                        <div class="input-group-addon px-2 pt-1">
                            <p class="fa fa-user-o text-primary"></p>
                        </div> <input type="text" class="form-control border-0">
                    </div>
                </div>
                <div class="form-group"> <label for="name" class="h6">Email</label>
                    <div class="input-group border rounded">
                        <div class="input-group-addon px-2 pt-1"> <i class="fa fa-envelope text-primary"></i> </div> <input type="text" class="form-control border-0">
                    </div>
                </div>
                <div class="form-group"> <label for="msg" class="h6">Message</label> <textarea name="message" id="msgus" cols="10" rows="5" class="form-control bg-light" placeholder="Message"></textarea> </div>
                <button class="btn btn-outline text-white"><span>Send Messages</span> </button>
            </form>
        </div>
    </div>
</div>

<?php require 'footer.php'?>

</body>
</html>