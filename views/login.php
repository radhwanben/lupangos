<?php

include 'includes/header.php';

?>
<header class="header-main-wrap ">
    <div id="header-section" class="header-desktop header-v1" data-sticky="0">
	<div class="container">
		<div class="header-inner-wrap">
			<div class="navbar d-flex align-items-center">

				

	<div class="logo logo-desktop">
		<a href="http://lupangos.com/">
							<img src="https://i.ibb.co/m8SB35V/Lupangos-Full-Logo-PNG.png" height="80" width="80" alt="logo">
					</a>
    <a href="http://lupangos.com/create-listing/" class="btn btn-lg btn-create-listing "><i class="fa-solid fa-plus" style="border: 3px white solid"></i>Déposer une annonce</a>
	</div>

				<nav class="main-nav on-hover-menu navbar-expand-lg flex-grow-1">
										</nav><!-- main-nav -->

				<div class="login-register on-hover-menu">
	<ul class="login-register-nav dropdown d-flex align-items-center" style="list-style-type: none;">

    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            En savoir +
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
    
				
			<li style="padding-left: 3px;padding-right: 21px;">
			<a class="btn btn-primary" style="border-radius: 12px;" href="http://lupangos.com/create-listing/"> <h5>prix</h5></a>		</li>
			
		
				<li>
			<a href="/login" class=""><i class="fa-solid fa-user" style="  background-color: white;
  border-radius: 50%;
  border: 1px solid grey;
  padding: 10px;"></i> conextion</a>		</li>
		
	</ul>
</div>
			</div><!-- navbar -->
		</div><!-- header-inner-wrap -->
	</div><!-- .container -->    
</div><!-- .header-v1 --><!-- header-mobile --></header>
<div class="container">
  
      <br>
  <div class="global-container">
	<div class="card login-form" style="border: 0px">
	<div class="card-body">
      <h2 class="card-title text-center">bonjour !</h2>
		<div class="card-text">
            <p class="card-title">concter vous pour decouvrir toutes non fonctionnalités</p>


			<!--
			<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
			<form action="/login" method="POST">
				<!-- to error: add class "has-danger" -->
				<div class="form-group">
<label for="exampleInputEmail1" style="padding-bottom: 20px;padding-top: 20px;">E-mail address</label>
          <input type="email" name="email" class="form-control form-control-sm"  required>
				</div>
				<div class="form-group">
					<label for="password"  style="padding-bottom: 2px;padding-top: 5px;">Password</label>
					<input type="password" id="password" class="form-control form-control-sm" name="password" required  >
          <i class="fa-solid fa-eye errspan" id="togglePassword"></i>
        </div>
        <label for="exampleInputPassword1"  style="padding-bottom: 10px;padding-top: 10px;">
        <a href="#" style="float:left;font-size:12px; text-decoration: none;">Forgot password?</a>
        </label>
        <div class="form-group">
        <input type="submit" class="form-control form-control-sm btn btn-primary btn-block" name="btn-login" value="Sign in" />
        </div>
				
			</form>
		</div>
	</div>
</div>
</div>

  <div class="sign-up">
					Don't have an account? <a href="/register" style="text-decoration:none">Create One</a>
				</div>
  </div>
  

  
<script>
   const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });
</script>

</body>