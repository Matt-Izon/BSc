<?php
    class DataAPI {

        private $url = 'http://lossiefc.com/cockpit/api/collections/get/'; //local
        // remote $url = 'http://lossiefc.epizy.com/cockpit/api/collections/get/';
        private $api_token = '0481d5f4afa9c7f8de3a4ef9c2b709';


        public function request($collection) {
            $curlRequest = curl_init();
            $header = array();
            $header[] = 'Cockpit-Token: '. $this->api_token;
            curl_setopt($curlRequest, CURLOPT_URL,$this->url.$collection);
            curl_setopt($curlRequest, CURLOPT_POST, 1);
            curl_setopt($curlRequest, CURLOPT_HTTPHEADER, $header);
            curl_setopt($curlRequest, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curlRequest);
            curl_close ($curlRequest);

            return json_decode($response);
        }
    }
?>
