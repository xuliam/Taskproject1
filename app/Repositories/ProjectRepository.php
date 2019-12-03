<?php

namespace App\Repositories;

use App\Project;

class ProjectRepository
{
    public function create($request)
    {
        $request->user()->projects()->create([
            'name'=> $request->name,
            'thumbnail'=> $this->thumb($request)
        ]);
    }

    public function thumb($request)
    {
        if($request->hasFile('thumbnail')){
            $thumb= $request->thumbnail;
            $name= $thumb->hashName();
            $thumb->storeAs('public/thumbs', $name);
            return $name;
        }

    }

    public function find($id)
    {
        return Project::findOrFail($id);
    }

    public function delete($id)
    {
        $project = $this->find($id);
        $project->delete();
    }
}
