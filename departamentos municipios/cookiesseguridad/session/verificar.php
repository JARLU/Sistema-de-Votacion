<?php
/**
 * Created by PhpStorm.
 * User: alphyon
 * Date: 05-03-15
 * Time: 09:51 PM
 */
session_start();
if(isset($_SESSION['sesion'])){
    echo $_SESSION['sesion'];
}else{
    echo "No tienes derecho de ver esta pagina";
}