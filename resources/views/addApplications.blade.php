@extends('parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div align="right">
  <a href="{{ route('applications.index')}}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('applications.store')}}" enctype="multipart/form-data">
  @csrf
  <label class="col-md-4 text-right">Application Name:</label>
  <div class="col-md-8">
    <input type="text" name="application_name" class="form-control input-lg"/>
  </div>
  <br/>
  <br/>
  <label class="col-md-4 text-right">Description:</label>
  <div class="col-md-8">
    <input type="text" name="description" class="form-control input-lg"/>
  </div>
  <br/>
  <br/>
  <div class="form-group">
    <label class="col-md-4 text-right">Upload Icon</label>
    <div class="col-md-8">
      <input type="file" name="icon"/>
    </div>
  </div>
  <br/>
  <br/>
  <div class="form-group">
    <label class="col-md-4 text-right">Upload Demo File</label>
    <div class="col-md-8">
      <input type="file" name="demo_file"/>
    </div>
  <br/>
  <br/>
  <div class="form-group text-center">
    <input type="submit" name="add" class="btn btn-primary input-lg" value="Add"/>
  </div>

</form>
@endsection
