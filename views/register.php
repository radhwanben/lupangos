<?php

    include '../includes/header.php';

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
				
			
				<li     style="border: 3px solid grey;">
			<a href="http://lupangos.com/create-listing/" class=""><i class="fa-solid fa-user" style="  background-color: white;
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
<form>
  <div class="form-group">
    <label for="NomUtilisateur">Nom' Utilisateur</label>
    <small id="NomUtilisateur" class="form-text text-muted">require</small>
    <input type="text" class="form-control" id="NomUtilisateur" aria-describedby="NomUtilisateur" placeholder="Nom' Utilisateur">
  </div>
  <div class="form-group">
  <small id="emailHelp" class="form-text text-muted">require</small>
    <label for="exampleInputEmail">E-mail</label>
    <input type="email" class="form-control" id="exampleInputemail" placeholder="E-mail">
  </div>
  <div class="form-group">
    <label for="exampleInputpassword">mot de passe</label>
    <small id="emailHelp" class="form-text text-muted">require</small>
    <input type="password" class="form-control" id="exampleInputpassword" aria-describedby="emailHelp" placeholder="mot de passe">
    <i class="fa-solid fa-eye errspan"></i>

  </div>
  <div class="form-group">
    <label for="exampleInputphone">Téléphone portable</label>
    <small id="emailHelp" class="form-text text-muted">require</small>
    <input type="email" class="form-control" id="exampleInputphone aria-describedby="phoneHelp" placeholder="Téléphone portable">
    <i class="fa-solid fa-eye errspan"></i>

  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
</div>
