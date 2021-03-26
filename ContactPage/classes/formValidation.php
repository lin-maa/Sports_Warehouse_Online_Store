<?php
class FormValidation {
    //properties
    public $valid = true;
    private $_errorFields = [];

    //methods
    //check for empty fields
    public function checkEmpty($fieldName){
        $message = "";
        if (isset($_POST[$fieldName]) && ($_POST[$fieldName])){
        } else {
            $this ->_errorFields[] = $fieldName;
            $this ->valid = false;
            $message = "Please provide a value";
        }
        return $message;
    }

    //check for a valid email
    public function checkEmail($fieldName){
        $message = "";
        //check the field is in a valid email format
        if(isset($_POST[$fieldName])){
            if (!filter_var($_POST[$fieldName], FILTER_VALIDATE_EMAIL)) {
                $this ->_errorFields[] = $fieldName;
                $this ->valid = false;
                $message = "Please enter a legal email";
            } 
            return $message;
        }

    }

    //set CSS class for missing fields
    public function setErrorClass($fieldName){
        if(in_array($fieldName, $this->_errorFields)){
            return 'class = "error"';
        }
    }

    //set the value of a field
    public function setValue($fieldName){
        if(isset($_POST[$fieldName])){
            return htmlentities($_POST[$fieldName]);
        }
    }
}
?>