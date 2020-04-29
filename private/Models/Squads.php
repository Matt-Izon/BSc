<?php
    require_once($root. 'private/DataAPI.php');

    class Squads extends DataAPI {

        public $data = array();


        public function __construct() {
            $squads = $this->request("collections", "Squads");
            foreach ($squads->entries as $squad) {
              $this->data[$squad->Name] = $squad->Player;
            }
        }

        public function getSquad($squadName) {
          return $this->data[$squadName];
        }
    }
?>
