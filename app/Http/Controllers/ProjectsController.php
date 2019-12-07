<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Project;
use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    protected $repo;

    public function __construct(ProjectRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(CreateProjectRequest $request)
    {
        $this->repo->create($request);
        return back();
    }

    public function destroy($id)
    {
        $this->repo->delete($id);
        return back();
    }

    public function update($id, UpdateProjectRequest $request)
    {
        $this->repo->update($id, $request);
        return back();
    }

    public function show(Project $ok)
    {
        $todos=$this->repo->todos($ok);
        $dones=$this->repo->dones($ok);
       // dd($todos);

        //$todos = $this->repo->
         //$mingzi =$this->repo->show($id);
        return view('projects._show', compact('ok','todos','dones'));
        //依赖注入Request $request；构造函数注入； 路由和数据模型的绑定； ？？？
    }


}
