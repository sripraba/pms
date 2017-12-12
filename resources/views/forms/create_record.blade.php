{{ Form::open(['route'=>$route_path]) }}
	<center>
		<table>
			<tr>
				<th>{{ Form::label('host', 'Host :')}}</th>
				<td>{{ Form::text('host', null)}}</td>
			</tr>
			<tr>
				<th>{{ Form::label('user_name', 'User Name :')}}</th>
				<td>{{ Form::text('user_name', null)}}</td>
			</tr>
			<tr>
				<th>{{ Form::label('password', 'Password :')}}</th>
				<td>{{ Form::password('password', null)}}</td>
			</tr>
			<tr>
				<th>{{ Form::label('description', 'Description :')}}</th>
				<td>{{ Form::textarea('description', null)}}</td>
			</tr>
			<tr><td colspan="2" align="center">
				{{ Form::submit('Create') }}
			</td></tr>
		</table>
	</center>
</form>
{{ Form::close() }}