<?php
    require_once($root. 'private/DataAPI.php');

    class ClubHistory extends DataAPI {

        public $data;

        function __construct() {
            $this->data = $this->request("singletons", "ClubHistory");
        }
    }
?>
