@extends('base')
@section('title', 'Password');
@section('pagehomelink', 'passwords');
@section('pagehometitle', 'Password');
@section('pagetitle', 'Password');
@section('content')
<div class="page-fixed-main-content">
	{{ Form::model($record,['method' => 'PATCH', 'route' => ['passwords.update', $record['id']]]) }}
	<center>
		<table>
			<tr>
				<th>{{ Form::label('host', 'Host :')}}</th>
				<td>{{ Form::text('host', $record['host']) }}</td>
			</tr>
			<tr>
				<th>{{ Form::label('user_name', 'User Name :')}}</th>
				<td>{{ Form::text('user_name', $record['user_name']) }}</td>
			</tr>
			<tr>
				<th>{{ Form::label('password', 'Password :')}}</th>
				<td>{{ Form::password('password', null) }}</td>
			</tr>
			<tr>
				<th>{{ Form::label('description', 'Description :')}}</th>
				<td>{{ Form::textarea('description', $record['description']) }}</td>
			</tr>
			<tr><td colspan="2" align="center">
				{{ Form::submit('Update') }}
			</td></tr>
		</table>
	</center>
</form>
{{ Form::close() }}
</div>
@endsection