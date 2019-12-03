<!-- Modal -->
<div class="modal fade" id="editProjectModal-{{$project->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProjectModal-{{$project->id}}">Edit Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::model($project, ['route' => ['projects.update', $project->id], 'method' => 'patch', 'files' => 'true']) !!}
            <div class="modal-body">
                <div class="form-group">
                    {!! Form::label('name', 'Project Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('thumbnail', 'Project Pic') !!}
                    {!! Form::file('thumbnail', ['class' => 'form-control-file']) !!}
                </div>
            </div>
            <div class="modal-footer">
                @include('errors._errors')
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
