<?php
session_start();

function isLoggedIn(){
    if (isset($_SESSION['Email'])){
        return true;
    }
    else{
        return false;
    }
}