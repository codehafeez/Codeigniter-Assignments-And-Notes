<?php namespace App\Models;
use CodeIgniter\Model;
class Task_model extends Model {
    
    protected $table = 'task'; 
    protected $allowedFields = ['title', 'description'];

}