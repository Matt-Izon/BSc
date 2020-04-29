<?php
    require_once($root. 'private/Models/Policies.php');


    function displayPolicy($policy) {
        $request = new Policies();
        return $request->getPolicy($policy);
    }
