<div class="col-3 my-3">
    <div  class="card project-card">

        <ul class="icon-bar">
            <li>
               @include('projects._cardDelete')
            </li>
                <!-- Button trigger modal -->
            <li>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProjectModal-{{$project->id}}">
                    <i class="fa fa-btn fa-cog"></i>
                </button>
            </li>

        </ul>

        <a href="projects/{{$project->id}}">
            <img src="{{ asset('storage/thumbs/'.$project->thumbnail)}}" class="card-img-top" alt="Card image cap">
            <div class="card-body py-1">
                <h5 class="card-title text-center">{{$project->name}}</h5>
            </div>
        </a>
    </div>
        @include('projects._CardEdite')
</div>
