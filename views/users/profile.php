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
<br>

<div class="container">
<div class="row justify-content-md-center">
        <div class="col-md-12  ">
            <div class="card-body">
                <a class="btn btn-outline-primary" style="float:right">voir mon Profil Public</a>
                <P>Profil</P>
                
            <img class="rounded-circle card-img" style="width=7%" src="https://png.pngtree.com/png-vector/20190114/ourlarge/pngtree-vector-add-user-icon-png-image_313043.jpg" />
            <br>
            <br>
            <div class="col-2">
            <form class="form-group" action="/profile/update" method="POST">
                <input class="form-control x" type="text" name="username" placeholder="<?php echo $data['username'] ;?>" id="profileinput" required ><br>
                <input class="form-control x" type="text" name="username" placeholder="<?php echo $data['email'] ;?>" id="profileinput" required ><br>
                <input class="form-control x" type="text" name="username" placeholder="<?php echo $data['phone'] ;?>" id="profileinput" required ><br>
                <input class="btn btn-primary"  name="btn-update" type="submit" value="Enregister Les Modification" >
            </form>
            </div>
            </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <hr>
        <br>
        <br>
        <br>
        <div class=col-md-6>
        <a href="/logout"  >Me déconcter</a>
        </div>
</div>
</div>