<?php 

namespace App\Controllers\ToDoApp;

use App\Controllers\BaseController;
use App\Models\To_do_app\TaskModel;

class To_do_list extends BaseController
{

    public function index()
    {
        $taskModel = new TaskModel();
        $data ['tasks'] = $taskModel->get_task();
        echo view('todo_list/index',$data);
    }
    public function create()
    {
        return view('todo_list/create');
    }
    public function store()
    {
        $taskModel = new TaskModel();
        $data = array(
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'status' =>$this->request->getPost('status')
        );
        $taskModel->insert($data);
        return redirect()->to('/task');
    }

    public function edit($id)
    {
        $taskModel = new TaskModel();
        $data ['data'] = $taskModel->get_task_by_id($id);
        return view('todo_list/edit',$data);
    }
    public function update($id)
    {
        $taskModel = new TaskModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'status' => ($this->request->getPost('status') === 'completed') ? 1 : 0 // Convert status to 0 or 1
        ];
        $taskModel->update($id, $data);
        return redirect()->to('/task');
    }
    
    public function delete($id)
    {
        $taskModel = new TaskModel();
        $taskModel->delete($id);
        return redirect()->to('/task');
    }
    public function checkDbConnection()
    {
        $db = db_connect();
        if ($db->connect()) {
            echo "Database connection established successfully.";
        } else {
            echo "Unable to connect to the database.";
        }
    }
}