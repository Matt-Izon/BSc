<?php
    require_once($root. 'private/DataAPI.php');

    class Fixtures extends DataAPI {

        public $data;

        function __construct() {
            $this->data = $this->request("collections", "Fixtures");
        }
    }
?>
