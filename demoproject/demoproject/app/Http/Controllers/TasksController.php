<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\tasks;

class TasksController extends Controller
{
    public function getAll()
    {
        return tasks::all();
    }
    public function DeleteID($id)
    {
        return tasks::DeleteID($id);
    }
    public function CreateTask(Request $request)
    {
        $data = $request->all();

        $user_data = array('name'=>$data['name'],'description'=>$data['description']);

        $task_id = tasks::createTask($user_data);
        return $task_id;
    }
}
