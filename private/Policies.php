<?php
    require_once('DataAPI.php');

    class Policies extends DataAPI {

        public $data = array();


        public function __construct() {
            $policies = $this->request("Policies");
            foreach ($policies->entries as $policy) {
              $this->data[$policy->Name] = $policy->PolicyText;
            }
        }

        public function getPolicy($policyName) {
          return $this->data[$policyName];
        }
    }
?>
