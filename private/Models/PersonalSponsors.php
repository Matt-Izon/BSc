<?php
    require_once($root. 'private/DataAPI.php');

    class PersonalSponsors extends DataAPI {

        public $data = array();


        public function __construct() {
            $persSpons = $this->request("collections", "PersonalSponsor");
            foreach ($persSpons->entries as $persSpon) {
              $this->data[$persSpon->Name] = $persSpon->URL;
            }
        }

        public function getURL($persSponName) {
          return $this->data[$persSponName];
        }
    }
?>
