<?php
    require_once($root. 'private/DataAPI.php');

    class Contact extends DataAPI {

        public $data;

        function __construct() {
            $this->data = $this->request("singletons", "ClubContact");
        }
    }

    class ContactForm extends DataAPI {
        
        public $cockpitData;

        public function __construct($name, $email, $message) {
            $formData = array("Name" => $name, "Email" => $email, "Message" => $message);
            $wrapper = array("form" => $formData);
            $this->cockpitData = json_encode($wrapper);
        }

        public function submit() {
            $this->submitForm("Contact", $this->cockpitData);
        }
    }
?>
