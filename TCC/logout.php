<?php
if(!isset($_SESSION)){
    session_start();
}
//FAZENDO O LOG OUT
    session_destroy();

    header('Location: /tcc/home/home.php');