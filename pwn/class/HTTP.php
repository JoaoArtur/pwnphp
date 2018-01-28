<?php
    /*
    *         PwnPHP
    *   @author João Artur
    * www.github.com/JoaoArtur
    */
    namespace PwnPHP\tools;
    use GuzzleHttp;

    class HTTP {
        public $client;
        public $request;

        public function get($url) {
            $this->client = new GuzzleHttp\Client();
            $this->request = $this->client->request('GET',$url);
        }
        public function body() {
            return $this->request->getBody()->getContents();
        }
        public function status() {
            return $this->request->getStatusCode();
        }
        public function header() {
            return $this->request->getHeaders();
        }
    }