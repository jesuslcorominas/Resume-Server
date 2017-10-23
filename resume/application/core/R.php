<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class R {
        
        protected $code;
        protected $message;
        protected $data;

        public function __construct($code = null,$message = null,$data = null) {
            $this->code = $code;
            $this->message = $message;
            $this->data = $data;
        }

        public function set_code($code) {
          $this->code = $code;
        }

        public function set_message($message) {
          $this->message = $message;
        }

        public function set_data($data) {
          $this->data = $data;
        }

        public function get() {
          $response = array(
            'code' => $this->code,
            'message' => $this->message,
            'data' => $this->data
          );
          return $response;
        }
}
