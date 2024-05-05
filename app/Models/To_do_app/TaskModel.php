<?php 
namespace App\Models\To_do_app;
use CodeIgniter\Model;

class TaskModel extends Model
{
  protected $table = 'to_do';
  protected $primaryKey = 'id';
  protected $allowedFields = ['title','description','status'];

  public function get_task()
  {
    return $this->findAll();
  }

  public function get_task_by_id($id)
  {
    return $this->where('id',$id)->first();
  }
  
}