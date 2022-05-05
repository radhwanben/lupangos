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
<div class="col-md-12 ">
<a href="" target="_blank" >Mon Compte</a>
<a href="" target="_blank" >Acheter des crédits</a>
</div>
<br>
<br>
<br>
<br>
<div class="col-md-12 ">
<h2>Acheter des crédits</h2>
<p>Maitrisez votre budget du temps : payer vos dépots et vos options de facilement grace aux crédits ! </p>
<p>le crédits ne sont pas utlisables pour le réglements effectués via la service payment sécurisé leboncoin . </p>
</div>
<div class="row ">
    <form class="form-group" action="" method="post">
        <div class="col md-12">
        <div class="border border-dark">
            <input type="radio" name="price" value="150" />
            <label class="">150$</label>
        </div>
       
        <div class="border border-dark">
            <input type="radio" name="price" value="150" />
            <label>150$</label>
        </div>
    
        <div class="border border-dark">
            <input type="radio" name="price" value="150" />
            <label>150$</label>
        </div>
       
        <div class="border border-dark">
            <input type="radio" name="price" value="150" />
            <label>150$</label>
        </div>
        </div>
        <span>les montant des credits sont indqués en TTC </span>
        <br>
        <br>
        <p><input type="checkbox" > je reconais avoir lu accepté les <a href=""> conditional de vente</a> (nos CGV on evalute , nhésurez pas a les consulter ) et renonce à mon droit de 
            réclamation . En validant ma commande 
        </p>
        
</div>
<div class="col md 1">
<input class="btn btn-sm btn-danger" type="submit" value="valider">
</form>
</div>
</div>
