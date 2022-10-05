<?php 
    function baseUrl($url = false)
    {
        if ($url) {
           echo "http://localhost:8080/PhotoFolio/".$url;
        } else {
            echo "http://localhost:8080/PhotoFolio/";
        }
    }
?>