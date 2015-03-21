    <div class="form-group">
        {!! Form::label('name', 'Nome') !!}
        {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', $user->email, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Enviar', ['class' => 'btn btn-default btn-primary']) !!}
