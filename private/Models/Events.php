<?php
    require_once($root. 'private/DataAPI.php');

    class Events extends DataAPI {

        public $upcoming = array();
        public $past = array();


        public function __construct() {
            $events = $this->request("collections", "Events");
            foreach ($events->entries as $event) {
                if ($event->Date < date("Y-m-d")) {
                    $this->past[] = $event;
                } else {
                    $this->upcoming[] = $event;
                }
            }
        }

        public function getHighlight() {
            $cutOff = strtotime("+1 Week");
            $date = date("Y-m-d", $cutOff);
            if (empty($this->upcoming) || $this->upcoming[0]->Date > $date) {
                return end($this->past);
            } else {
                return $this->upcoming[0];
            }
        }
    }
?>
