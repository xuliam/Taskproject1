{!! Form::open(['route' => ['tasks.store','project'=>$ok->id], 'method' => 'POST']) !!}
    <div class="col-auto">
    <label class="sr-only" for="inlineFormInputGroup">Username</label>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
            <div class="input-group-text">@</div>
        </div>
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Today project']) !!}
    </div>
</div>
{!! Form::close() !!}


