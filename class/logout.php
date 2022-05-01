<?php

require_once 'user.php';

$user =new user();
$user->logout();

$user->redirect("/");