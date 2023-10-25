<?php require 'head.php'?>

<div class="container">
		<div class="navbar nav1 ">
			<ul class="nav justify-content-center ">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php#aboutus">About Us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php#portfolio">Categories</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contactus.php">Contact Us</a>
  </li>
  </ul>
  <ul class=" nav justify-content-center">
   <li class="nav-item">
    <a  class="nav-link" href="#myModal" class="trigger-btn" data-toggle="modal">Sign In</a>
  </li>  
  <li class="nav-item">
    <a class="nav-link" href="#myModa2" class="trigger-btn" data-toggle="modal">Sign Up</a>
  </li>
</ul>
<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">
            
        <h4 class="modal-title">Sign in</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <form action="/examples/actions/confirmation.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" required="required">   
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required"> 
          </div>        
          <div class="form-group">
            <button type="submit" class="btn btn-outline btn-lg btn-block login-btn">Signin</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="#">Forgot Password?</a>
      </div>
    </div>
  </div>
</div>  

<div id="myModa2" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">
            
        <h4 class="modal-title">Sign Ups</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <form action="/examples/actions/confirmation.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" required="required">   
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email" required="required">   
          </div>
          
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required"> 
          </div>        
          <div class="form-group">
            <button type="submit" class="btn btn-outline btn-lg btn-block login-btn">Signup</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div> 





		</div>

		<div class="navbar nav2">
			<ul class=" nav justify-content-center">
            <li class="nav-item">
                <a class="navbar-brand" href="#">Online Order For Photo Print</a>
            </li>
			</ul>
			<form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline" type="submit">Search</button>
    </form>
		</div>
  </div>