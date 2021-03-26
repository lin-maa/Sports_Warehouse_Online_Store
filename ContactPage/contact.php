<?php
    require_once("classes/FormValidation.php");
    $title = "Contact Us";

    //create FormValidation object so that it can be used
    $form = new FormValidation();

    //start buffer
    ob_start();

    //check if the submit button was clicked
    if(isset($_POST["submitButton"])) {
        //validate name was supplied
        $firstNameMessage = $form->checkEmpty("firstName");
        $lastNameMessage = $form->checkEmpty("lastName");

        //validate email was supplied
         $emailMessage = $form->checkEmpty("email");

        //validate valid email address
        if ( $emailMessage == ""){
            $emailMessage = $form->checkEmail("email");
        }

        //if all checks passed valid will be true
        if ($form->valid == true) {
            //redirect to the thanks page
            header("Location: thanks.php");
        } else { //if any checks did not pass valid will be set to false
            // display form with errors listed
            include "templates/contact-html.php";
        }
    } else {//submit button was not clicked the form is displayed for the first time
        //display form without errors
        $form->valid = true;

        $firstNameMessage = "";
        $lastNameMessage = "";
        $emailMessage = "";
        $contactNumberMessage = "";
        $question = "";
        include "templates/contact-html.php";
    }

    $output = ob_get_clean();
    include "templates/layout-html.php";

?>