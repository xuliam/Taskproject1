<div class="col-3 my-3">
    <a href="projects/{{$project->id}}" class="card">
        <img src="{{ asset('storage/thumbs/'.$project->thumbnail)}}" class="card-img-top" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$project->name}}</h5>
        </div>
    </a>
</div>
