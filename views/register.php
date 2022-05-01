<?php

    include 'includes/header.php';
    include 'class/user.php';

    $user=new user();
    session_start();
    
    if($user->is_loggedin() !="")
    {
        $user->redirect('/dashbord');
    }

?>


<header class="header-main-wrap ">
    <div id="header-section" class="header-desktop header-v1" data-sticky="0">
	<div class="container">
		<div class="header-inner-wrap">
			<div class="navbar d-flex align-items-center">

				

	<div class="logo logo-desktop">
		<a href="http://lupangos.com/">
							<img src="https://i.ibb.co/m8SB35V/Lupangos-Full-Logo-PNG.png"  width="50px" alt="logo">
					</a>
          <a href="http://lupangos.com/create-listing/" class="btn btn-lg btn-create-listing "><i class="fa-solid fa-plus" style="border: 3px white solid"> </i> Déposer une annonce</a>
	</div>

				<nav class="main-nav on-hover-menu navbar-expand-lg flex-grow-1">
										</nav><!-- main-nav -->

				<div class="login-register on-hover-menu">
	<ul class="login-register-nav dropdown d-flex align-items-center" style="list-style-type: none;">
				
			
				<li     style="border: 3px solid grey;">
			<a href="/login" class=""><i class="fa-solid fa-user" style="  background-color: white;
  border-radius: 50%;
  border: 1px solid grey;
  padding: 10px;"></i> conextion</a>		</li>
		
	</ul>
</div>
</header>
<br>
<br>
<div class="container">
<div class="row justify-content-md-center">
<form action="/register" method="POST">
  <div class="form-group" >
    <label for="NomUtilisateur">Nom' Utilisateur</label>
    <small id="NomUtilisateur" class="form-text text-muted">require</small>
    <input type="text"  id="profileinput" class="form-control" id="NomUtilisateur" aria-describedby="NomUtilisateur" name="uname" placeholder="Nom' Utilisateur" required>
  </div>
  <div class="form-group">
  <small id="emailHelp" class="form-text text-muted">require</small>
    <label for="exampleInputEmail">E-mail</label>
    <input type="email"   id="profileinput" class="form-control" id="email" name="email" placeholder="E-mail" required>
  </div>
  <div class="form-group">
    <label for="exampleInputpassword">mot de passe</label>
    <small id="emailHelp" class="form-text text-muted">require</small>
    <input type="password"   class="form-control" id="password" aria-describedby="passwordHelp" name="password" placeholder="mot de passe" required>
    <i class="fa-solid fa-eye errspan" id="togglePassword"></i>

  </div>
  <div class="form-group">
    <label for="exampleInputphone">Téléphone portable</label>
    <small id="emailHelp" class="form-text text-muted">require</small>
  <div class="form-group">
    <input type="text"   class="form-control" id="phone"  name="phone" type="number" aria-describedby="phoneHelp" placeholder="Téléphone portable" required>
    

  </div>
<br>

  </div>

  <input type="submit" name="btn-signup" class="btn btn-primary" value="register" />
</form>


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

        // prevent form submit

            var input = document.querySelector("#phone");
            window.intlTelInput(input, {
                separateDialCode: true,
                excludeCountries: ["in", "il"],
                preferredCountries: ["cm", "us", "ru", "jp"]
            });
        </script>


</div>
</div>
