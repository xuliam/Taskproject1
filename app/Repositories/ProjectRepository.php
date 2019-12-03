<?php


namespace App\Repositories;


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
        return $request->hasFile('thumbnail') ? $request->thumbnail
            ->store('public/thumbs') : null;
    }

}
