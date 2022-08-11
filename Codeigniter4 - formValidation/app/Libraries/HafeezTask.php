<?php
namespace App\Libraries;
class HafeezTask {

    function reverse_string($string){
        return strrev($string);
    }

    function getData($id){
        $model = new \App\Models\Task_model;    
        return $data['task'] = $model->where('id', $id)->first();
    }    
}