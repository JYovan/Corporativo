<?php

/*
 * Copyright 2016 Ing.Giovanni Flores (email :ing.giovanniflores93@gmail.com)
 * This program isn't free software; you can't redistribute it and/or modify it without authorization of author. 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class inicio extends CI_Controller {

    private $defaultData = array(
        'title' => 'Directorio',
        'layout' => 'layout/lytDefault',
        'contentView' => 'vUndefined',
    );

    private function _renderView($data = array()) {
        $data = array_merge($this->defaultData, $data);
        $this->load->view($data['layout'], $data);
    }

    public function index() {
        // View render
        $data['scripts'] = array('Directorio');
        $data['contentView'] = 'vDirectorio';
        $this->_renderView($data);
    }

}
