<?php

include 'includes/header.php';
include 'class/checkingusers.php' ;


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
                  <div class="input-group">
                  <div class="input-group-addon">
                  <i class="fa-brands fa-searchengin"></i>
                  </div>
                  <input class="form-control  shadow-none" id="searchinput" type="text" placeholder="recherche"  />
                </div>
                </div>
               
               <!-- main-nav -->
               <div class="login-register on-hover-menu">
                  <ul class="login-register-nav dropdown d-flex align-items-center" style="list-style-type: none;">

                     <li style="padding-left: 3px;padding-right: 21px;">
                     
                        <a class="nav-link" href="http://lupangos.com/create-listing/">
                        <i class="fa-solid fa-heart"></i> Favoirs
                        </a>
                     </li>
                     <li>
                        <a href="/login" class="nav-link"><i class="fa-solid fa-message"></i> conextion</a>		
                     </li>
                     <li>
                        <a href="/login" class="nav-link"><i class="fa-solid fa-user"></i> <?php echo $data['username'] ;?></a>		
                     </li>
                  </ul>
               </div>
            </div>
            <!-- navbar -->
         </div>
         <!-- header-inner-wrap -->
      </div>
      <!-- .container -->    
   </div>
   <!-- .header-v1 --><!-- header-mobile -->
</header>

<br>


<div class="container">
<div class="row justify-content-md-center">
        <div class="col-md-12  ">
            <div class="card-body">
<h3>Parameters</h3>
<form action="" class="form-group">
    <input type="radio" name="" id=""> Monsieur 
    <input type="radio" name="" id=""> Madame 
    <input type="radio" name="" id=""> Societé 
    <div class="col-6">
        <input type="text" name="" placeholder="Nom" class="form-group" id="">
 
    <input type="text" name="" placeholder="Prenom" class="form-group" id="">
    </div>
    <div class="col-6">
        <input type="text"  placeholder="Télepone" name="" class="form-group" id="">
 
    <input type="text" name="" placeholder="Numéro de patente" class="form-group" id="">
    </div>
</div>
    <input type="submit"  class="form-group btn btn-success" value="Enregister les Modification">


</form>
</div>
<form action="" class="form-group">
    <label for="">Email</label><br>
    <input type="email" name="" value="<?php echo $data['email'] ;?>" id=""><br><br>
    <h6>Documents</h6>
    <h6>Titre foncier</h6>
    <label for="">file 1</label>
    <input type="email" name=""  id=""><br>
    <label for="">file 2</label>
    <input type="email" name=""  id=""><br>
    <h6>Piece d'identité</h6>
    <label for="">File 1</label><br>
    <input type="email" name=""  id=""><br><br>
    <h6>Autre Documents</h6>
    <label for="">File 1</label><br>
    <input type="email" name=""  id=""><br>
    <label for="">File 2</label><br>
    <input type="email" name=""  id=""><br><br>
    <input type="submit"  class="form-group btn btn-success" value="Enregister les Modification">

</form>