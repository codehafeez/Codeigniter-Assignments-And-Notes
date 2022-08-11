<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Task_model;    
class Home extends BaseController
{
    public function index()
    {
        $model = new Task_model();
        $data['task'] = $model->findAll();
        return view('home',$data);
    }
    
    public function add(){
        return view('add');
    }
 
    public function save() {
        $model = new Task_model();
        $data = array(
            'description' => $this->request->getPost('task_description'),
        );
        $model->saveTask($data);
        return redirect()->to('/Home');
    }    

    public function edit($id){
        $model = new Task_model();
        $data['task'] = $model->where('id', $id)->first();
        return view('edit', $data);
    }

    public function update(){
        $model = new Task_model();
        $id = $this->request->getPost('id');
        $data = array(
            'description'  => $this->request->getPost('task_description'),
        );
        $model->updateTask($data, $id);
        return redirect()->to('/Home');
    }

    public function delete($id){
        $model = new Task_model();
        $model->deleteTask($id);
        return redirect()->to('/Home');
    }    
}
