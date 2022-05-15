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
                        <a href="#" class="nav-link"><i class="fa-solid fa-message"></i> messages</a>		
                     </li>
                     <li>
                        <a href="/app/profile" class="nav-link"><i class="fa-solid fa-user"></i> <?php echo $data['username'] ;?></a>		
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
<br>

<div class="container">
<div class="row justify-content-md-center">
        <div class="col-md-12  ">
            <div class="card">
        <div class="card-body">
        <img width="200px" height="150px" src="http://lupangos.com/wp-content/uploads/2020/04/036-592x444.jpg" />            
    <a href=""  class="card-title">New Apartment</a>
    <p class="card-text">480 £</p>
    <a href="" class="btn btn-primary">modifier</a>
    <a href="" class="btn btn-danger">suprimer</a>
    </div>
        </div>

        <div class="col-md-12  ">
            <div class="card">
        <div class="card-body">
        <img width="200px" height="150px" src="http://lupangos.com/wp-content/uploads/2020/04/036-592x444.jpg" />            
    <a href=""  class="card-title">New Apartment</a>
    <p class="card-text">480 £</p>
    <a href="" class="btn btn-primary">modifier</a>
    <a href="" class="btn btn-danger">suprimer</a>
    </div>
        </div>