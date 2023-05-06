<?php 
include_once("bootstrap.php");

if(!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
        
        if($user->can_login($username, $password)) {
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["userID"] = $user->getUserID();
            // TODO: Redirect to gallery.php
            header("location:gallery.php");
        } else {
           $error = "Invalid username or password!";
        }
}