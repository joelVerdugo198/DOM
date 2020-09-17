<?php
    $edad = $_POST["edad"];
    if(isset($edad)){
        echo date('Y') - $edad;
    }

?>