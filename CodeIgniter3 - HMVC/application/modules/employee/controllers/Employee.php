<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Employee extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model(array(
            'Employees1_model',
            'Employees2_model'
        )); 
    }

    function dbFun() {
        $data['myData1'] = $this->Employees1_model->data1();
        $data['myData2'] = $this->Employees2_model->data2();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }


    function index() {
        $data['title'] = 'Employee';
        $this->load->view('signin', $data);
    }
}

