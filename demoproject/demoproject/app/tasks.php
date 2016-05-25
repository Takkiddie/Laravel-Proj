<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    protected $fillable = array('id','user_id','products');
    protected $table = 'tasks';
    public $timestamps = false;
    public static function getAll()
    {
        $tasks = tasks::all();
        return $tasks;
    }
    public static function DeleteID($id)
    {
        $task = tasks::find($id);
        $task->delete();
    }
    public static function CreateTask($data)
    {
        try 
        {
            //Makes sure to add a remember token to the newly created customer.
            //Set a password to not be plain text.
            $id = tasks::insertGetId($data);
        }
        catch(\Exception $e)
        {
            die( $e);
        }
        return $id;

    }

    //
}
