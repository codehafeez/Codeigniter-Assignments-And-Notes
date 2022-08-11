<?php
if (!function_exists("sum_numbers")) {
    function sum_numbers($v1, $v2) {
        $sum = $v1+$v2;
        return $sum;
    }
}

if (!function_exists("reverse_string")) {
    function reverse_string($string){
        return strrev($string);
    }
}

if (!function_exists("getData")) {
    function getData($id){
        $model = new App\Models\Task_model;    
        return $data['task'] = $model->where('id', $id)->first();
    }
}
