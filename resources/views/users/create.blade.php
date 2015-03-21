@extends('app')

@section('content')
    <div class="content">
        {!! Form::model($user, ['url' => '/user']) !!}
            @include('users.form')
        {!! Form::close() !!}
    </div>
@stop