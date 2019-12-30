@extends('parent')

@section('main')
    <table class="table table-bordered table-striped">
        <tr>
            <th width="10%">Icon</th>
            <th width="35%">Project Name</th>
            <th width="35%">Description</th>
            <th width="30%">Action</th>
        </tr>
        @foreach($data as $row)
            <tr>
                <td><img src="{{ URL::to('/') }}/icons/{{ $row->icon }}" class="img-thumbnail" width="100"/></td>
                <td><h3>{{ $row->project_name }}</h3></td>
                <td>{{ $row->description }}</td>
                <td>

                </td>

            </tr>
        @endforeach
    </table>
    {!! $data->links() !!}
@endsection