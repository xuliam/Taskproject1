<?php


namespace App\Repositories;


use App\Task;

class TaskRepository
{
    public function create($request)
    {
       return Task::create([
            'name'=>$request->name,
            'completion'=>(int)false,
            'project_id'=>$request->project,
        ]);
 }

    public function find($id)
    {
       return Task::findOrFail($id);

    }

    public function check($id)
    {
        $task= $this->find($id);
        $task->update([
            'completion'=>(int)true
        ]);
    }
}
