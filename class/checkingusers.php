<?php 

include 'user.php';
include 'userhandller.php';
session_start();

$user=new user();
$userhandler =new userHandller();

$userdata=$user->find_user_by_username($_SESSION['user_session']);

//if user is not activate his account he will be redirect to home page to ask him to activate his account

if(!($user->is_user_active($userdata))){
  $user->redirect('/home');
}

$data=$user->getUserData($_SESSION['user_session']);


// update username profile

  
if(isset($_POST['btn-update'])){

  $username= htmlspecialchars(trim($_POST['username']) , ENT_QUOTES, 'UTF-8');
  
  $userhandler->UpdateUserInfo($data['id'],$username);

  $user->redirect('/dashbord');

  
}

