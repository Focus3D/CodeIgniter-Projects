<?php

class MY_Controller extends MX_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function render($view, $head, $data = null, $footer = null) {
        $this->load->view('_parts/header', $head);
        $this->load->view($view, $data);
        $this->load->view('_parts/footer', $footer);
    }

}
