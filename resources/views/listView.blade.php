<table width="80%" align="center"><tr><td>
	<u><b>{{ $pageHeader }}</b></u>
	<span style="float:right">
		<a href="{{ route('passwords.create') }}"><button>Add New</button></a>
	</span>
	<hr>
</td></tr>
<tr><td>
	<table width="100%" border="1" class="table" align="center">
		<thead>
			<th>Sno.</th>
			@foreach($listHeader as $head=>$column)
				<th>{{ $column }}</th>
			@endforeach
			<th>E/D</th>
		</thead>
		<tbody>
			<?php $cnt = 1; ?>
			@foreach($listBody as $data)
			<tr>
				<td align="center">{{ $cnt++}}</td>
				@foreach($listHeader as $head=>$column)
					<td>{{ $data[$column] }}</td>
				@endforeach
				<td align="center">
					<br>
					<a href="{{ route('passwords.edit', $data['id']) }}">Edit</a><br><br>
					{{ Form::open(array('url' => 'passwords/' . $data->id)) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete') }}
                	{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</td></tr></table>