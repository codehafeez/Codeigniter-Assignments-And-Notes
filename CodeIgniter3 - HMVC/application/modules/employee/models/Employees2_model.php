<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Employees2_model extends CI_Model {
 
    public function data2() {
 		$data = [
            'data1' => 'value1',
            'data2' => 'value2',
        ];
        return $data;
    }

}

