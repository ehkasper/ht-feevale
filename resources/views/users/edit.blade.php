@extends('app')

@section('content')
    <div class="content">
        {!! Form::model($user, ['method' => 'PUT', 'url' => route('user.update', $user->id)]) !!}
            @include('users.form')
        {!! Form::close() !!}
        <br>
        {!! Form::open(['method' => 'DELETE', 'url' => route('user.destroy', $user->id)]) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
@stop