{!! Form::open(['route' => ['tasks.store','projectA'=>$ok->id], 'method' => 'POST']) !!}

<div class="col-auto">
        <label class="sr-only" for="inlineFormInputGroup">Username</label>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <div class="input-group-text">@</div>
            </div>
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Today project']) !!}
        </div>
    </div>
{!! $errors->create->first('name','<div class= "alert alert-danger">:message</div>') !!}
{!! $errors->create->first('projectA','<div class= "alert alert-danger">:message</div>') !!}
{!! Form::close() !!}


