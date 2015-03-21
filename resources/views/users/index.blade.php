@extends('app')

@section('content')
<div class="container container-fluid">

	<h1>Usuários</h1>

	{!! link_to('/user/create', 'Novo Usuário', ['class' => 'pull-right btn btn-default']) !!}
	<div class="clearfix"></div>
	<br>

	<table class="table table-striped">
		@foreach ($users as $user)
		<tr>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>
				{!! link_to(route('user.edit', $user->id), 'Editar') !!}
			</td>
		</tr>
		@endforeach
	</table>

</div>

@stop