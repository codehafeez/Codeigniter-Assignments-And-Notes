<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Employees1_model extends CI_Model {
 
    public function data1() {
 		$data = [
            'data1' => 'value1',
            'data2' => 'value2',
        ];
        return $data;
    }

}

