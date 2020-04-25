<?php
    require_once('DataAPI.php');

    class Sponsors extends DataAPI {

        public $data;

        function __construct() {
            $this->data = $this->request("Sponsor");
        }
    }
?>
