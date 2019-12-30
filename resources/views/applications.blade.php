@extends('parent')

@section('main')

<div align="right">
  <a href="{{ route('applications.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br/>

@if($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>

@endif

    <table class="table table-bordered table-striped">
        <tr>
            <th width="10%">Icon</th>
            <th width="35%">App Name</th>
            <th width="35%">Description</th>
            <th width="30%">Action</th>
        </tr>
        @foreach($data as $row)
            <tr>
                <td><img src="{{ URL::to('/') }}/icons/{{ $row->icon }}" class="img-thumbnail" width="100"/></td>
                <td><h3 class="text-uppercase">{{ $row->application_name }}</h3></td>
                <td>{{ $row->description }}</td>
                <td>

                </td>

            </tr>
        @endforeach
    </table>
    {!! $data->links() !!}
@endsection
