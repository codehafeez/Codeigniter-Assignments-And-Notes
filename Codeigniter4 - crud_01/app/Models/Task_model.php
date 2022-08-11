<?php namespace App\Models;
use CodeIgniter\Model;
class Task_model extends Model {
    
    protected $table = 'task'; 

    public function saveTask($data) {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateTask($data, $id){
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deleteTask($id) {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    } 
}