@extends('base')
@section('title', 'Password');
@section('pagehomelink', route('passwords.index'));
@section('pagehometitle', 'Password');
@section('pagetitle', 'Password');
@section('content')
<div class="page-fixed-main-content">
	<div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-comments"></i>Striped Table </div>
            <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
            </div>
            <div class="actions">
                <a href="{{ route($route_path) }}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i> Add </a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="table-scrollable">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                           <th>#</th>
								@foreach($listHeader as $head=>$column)
									<th>{{ $column }}</th>
								@endforeach
								<th></th>
                        </tr>
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
								{{ Form::open(array('url' => 'passwords/' . $data->id)) }}
			                    {{ Form::hidden('_method', 'DELETE') }}
								<a class="btn btn-circle btn-icon-only purple" href="{{ route('passwords.edit', $data['id']) }}"><i class="icon-pencil"></i></a>
			                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;" onclick="if(confirm('Sure to Delete?')){ $(this).closest('form').submit(); }"><i class="icon-trash"></i></a>
			                    {{ Form::close() }}
							</td>
						</tr>
						@endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

	
</div>

@endsection