<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Task_model;    
class Home extends BaseController
{
    private $model;
    public function __construct(){
        $this->model = new Task_model();
    }

    public function index(){
        $data['task'] = $this->model->findAll();
        return view('home',$data);
    }
    
    public function add(){
        return view('add', [
            'task_title' => "",
            'task_description' => "",
        ]);
}
 
    public function save() {
        $input = $this->validate([
            'task_title' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Please enter task title.',
                ],
            ],    
            'task_description' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Please enter task description.',
                ],
            ],    
        ]);

        if (!$input) {
            return view('add', [
                'validation' => $this->validator,
                'task_title' => $this->request->getPost('task_title'),
                'task_description' => $this->request->getPost('task_description'),
            ]);
        } else {
            $model = new Task_model();
            $data = array(
                'title' => $this->request->getPost('task_title'),
                'description' => $this->request->getPost('task_description'),
            );
            $model->insert($data);
            $session = session(); 
            $session->setFlashdata('msg', 'Successfully Added'); 
            return redirect()->to('/Home');
        }
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
            'title'  => $this->request->getPost('task_title'),
            'description'  => $this->request->getPost('task_description'),
        );
        $model->update($id, $data);

        $session = session(); 
        $session->setFlashdata('msg', 'Successfully Updated'); 
        return redirect()->to('/Home');
    }

    public function delete($id){
        $model = new Task_model();
        $model->where('id', $id)->delete($id);

        $session = session(); 
        $session->setFlashdata('msg', 'Successfully Deleted'); 
        return redirect()->to('/Home');
    }    
}
