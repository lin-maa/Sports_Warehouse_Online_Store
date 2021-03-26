<?php
    $title ="Thank you";

    ob_start();

    //display confirmation
    include "templates/confirmation-html.php";

    $output = ob_get_clean();

    include "templates/layout-html.php";
?>
