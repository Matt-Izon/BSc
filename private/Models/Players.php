<?php
    require_once($root. 'private/DataAPI.php');

    class Players extends DataAPI {

        public $data = array();


        public function __construct() {
            $players = $this->request("collections", "Player");
            foreach ($players->entries as $player) {
              $this->data[$player->Name] = $player;
            }
        }

        public function getPlayer($playerName) {
          return $this->data[$playerName];
        }
    }
?>
