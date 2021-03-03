<?php
namespace controllers;

use model\User;
use system\Controller;

class Home extends Controller
{

    public function index() {

        $users = new User;
        $this->view->users = $users->model('
            SELECT customers.id, customers.name, customers.email,
            tasks.id as tasks_id, tasks.name as tasks_name, tasks.description as tasks_desciption 
            FROM customers 
            LEFT JOIN tasks 
            ON customers.task_id = tasks.id
        ');
        $this->view->render('home');
    }

    public function create() {

        /* $users = new User; */
        /* $this->view->task = $users->model(' */
        /*     SELECT customers.id, customers.name, customers.email, */
        /*     tasks.id as task_id, tasks.name as task_name, tasks.description as task_desciption */ 
        /*     FROM customers */ 
        /*     LEFT JOIN tasks */ 
        /*     ON customers.task_id = tasks.id */
        /*     WHERE customers.id = '."$id".' */
        /* '); */

        $this->view->render('create_form');
    }


    /**
     * undocumented function
     *
     * @return void
     */
    public function store($id)
    {
        /* $name = $_POST['name']; */
        /* $email = $_POST['email']; */
        /* $task_name = $_POST['task_name']; */
        /* $task_desciption = $_POST['task_desciption']; */

        /* $users = new User; */
        /* $users->model('') */
        

    }
    
}




