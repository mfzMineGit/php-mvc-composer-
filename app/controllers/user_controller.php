<?php
// controller/democontroller.php
 //class DemoController
 //{
//     public function index()
//     {
//     echo 'hello world';
//     }
// }// End of the class DemoController
 // End of file democontroller.php
// controller/democontroller.php
namespace app\controllers;
use Pheasant;
use app\models\ToDo;
class user_controller extends base_controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $todos = ToDo::all();
        return $this->render('user/index', ['todos' => $todos]);
    }
    // private $data = 'Hello furzoom!';
    public function create()
    {
        return $this->redirect('user/index');
    }
    public function store()
    {
        $toDo = new ToDo();
        $toDo->title = $_POST['title'];
        $toDo->status = false;
        $toDo->save();
        return $this->redirect('user/index');
    }
    public function edit($id)
    {
        $toDo = ToDo::byId($id);
        $toDo->status = true;
        $toDo->save();
        return $this->redirect('user/index');
    }
    public function destroy($id)
    {
        $toDo = ToDo::byId($id);
        $toDo->delete($id);
        return $this->redirect('user/index');
    }
    /*public function migrate(){

        $migrator = new \Pheasant\Migrate\Migrator();

        $migrator->initialize(ToDo::schema(), 'todo');
        echo 'migrate  done! <br>';
    }

    public function  test(){

        $todo = new ToDo();
        $todo->title ='test111';
        $todo->status = false;
        $todo->save();

    }*/

}// End of the class DemoController
 // End of file democontroller.php

