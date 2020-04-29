<?php
    class DataAPI {

        private $url = 'http://lossiefc.com/cockpit/api/'; //local
        // remote $url = 'http://lossiefc.epizy.com/cockpit/api/';
        private $api_token = '0481d5f4afa9c7f8de3a4ef9c2b709';
        private $form_token = '9dd30b3e2e0f5dae3a8d481f962600';


        public function request($type, $name) {
            $curlRequest = curl_init();
            $header = array('Cockpit-Token: '. $this->api_token);
            curl_setopt($curlRequest, CURLOPT_URL, $this->url. $type. '/get/'. $name);
            curl_setopt($curlRequest, CURLOPT_POST, 1);
            curl_setopt($curlRequest, CURLOPT_HTTPHEADER, $header);
            curl_setopt($curlRequest, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curlRequest);
            curl_close ($curlRequest);

            return json_decode($response);
        }

        public function submitForm($form, $data) {
            $curlRequest = curl_init();
            $header = array('Cockpit-Token: '. $this->form_token,
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data));
            curl_setopt($curlRequest, CURLOPT_URL, $this->url. 'forms/submit/'. $form);
            curl_setopt($curlRequest, CURLOPT_POST, 1);
            curl_setopt($curlRequest, CURLOPT_HTTPHEADER, $header);
            curl_setopt($curlRequest, CURLOPT_POSTFIELDS, $data);
            curl_exec($curlRequest);
            curl_close ($curlRequest);
        }
    }
?>  
