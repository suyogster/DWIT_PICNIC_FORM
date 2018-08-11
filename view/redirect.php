<?php
/**
 * Created by PhpStorm.
 * User: suyogster
 * Date: 8/10/18
 * Time: 10:57 PM
 */

require_once("session_start.php");


if(isset($_POST['submit'])){
    $_SESSION['food'] = $_POST['food'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['batch'] = $_POST['batch'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['email'] = $_POST['email'];

}

if($_SESSION['food'] == "Vegeterian" && isset($_POST['submit'])){
    header('Location: food_menu_veg.php');
}

if($_SESSION['food'] == "Non-Vegeterian" && isset($_POST['submit'])){
    header('Location: food_menu_nonveg.php');
}

if(isset($_POST['submit-nonveg'])){

foreach ($_POST['breakfast'] as $key => $value){
    $_SESSION["breakfast"] = $_POST["breakfast"];
}

foreach ($_POST['lunchDinner'] as $key => $value){
    $_SESSION["lunchDinner"] = $_POST["lunchDinner"];
}

foreach ($_POST['desert'] as $key => $value){
    $_SESSION["desert"] = $_POST["desert"];
}

    header('location: list.php');


}

if(isset($_POST['submit-veg'])){

    foreach ($_POST['breakfast'] as $key => $value){
        $_SESSION["breakfast"] = $_POST["breakfast"];
    }

    foreach ($_POST['lunchDinner'] as $key => $value){
        $_SESSION["lunchDinner"] = $_POST["lunchDinner"];
    }

    foreach ($_POST['desert'] as $key => $value){
        $_SESSION["desert"] = $_POST["desert"];
    }

    header('location: list.php');
}

