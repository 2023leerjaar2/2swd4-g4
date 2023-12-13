<?php
try{

        $conn = new mysqli("localhost","root","","kamadoing");

    }catch(Exception $e){

        $error = "fatal error";
        die ($error);
    }

?>