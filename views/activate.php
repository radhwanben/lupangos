<?php

require_once 'class/user.php';

$user =new User();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    /* sanitize the email & activation code
    [$inputs, $errors] = filter($_GET, [
        'email' => 'string | required | email',
        'activation_code' => 'string | required'
    ]);
*/

$uri_parts = explode('=', $_SERVER['REQUEST_URI']);
$uri_parts2= explode('&', $uri_parts[1]);

//print_r($url2[0]);
$inputs['username'] =urldecode($uri_parts2[0]);
$inputs['activation_code'] =$uri_parts[2];

//var_dump($inputs['activation_code']);



        $userid=$user->find_unverified_user($inputs['activation_code'], $inputs['username']);
        $active=$user->activate_user($userid['id']);
        // if user exists and activate the user successfully
        if ($active) {

            echo 'You account has been activated successfully. Please login here.';

         }else{
             
// redirect to the register page in other cases
    echo "The activation link is not valid, please register again.";
         }

}
