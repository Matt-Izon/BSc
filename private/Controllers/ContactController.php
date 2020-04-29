<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once($root. 'private/Models/Contact.php');

    function displayContactDetail($detail) {
        $request = new Contact();
        $contact = $request->data;
        return $contact->$detail;
    }

    function submitContactForm() {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);
        $form = new ContactForm($name, $email, $message);
        $form->submit();
    }


    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"]) && isset($_POST["submit"])) {
        submitContactForm();
        header('Location: /html/contact.php');
               
    }
?>  
