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

<form method="post" action="{{ route('applications.store')}}" enctype="multipart/form-data">
  <div align="right">
    <a href="{{ route('applications.index')}}" class="btn btn-default">Back</a>
  </div>
  <br />
  @csrf
  <label class="col-md-2 text-left">Application Name:</label>
  <div class="col-md-10">
    <input type="text" name="application_name" class="form-control input-lg"/>
  </div>
  <br />
  <br />
  <br />
  <label class="col-md-2 text-left">Description:</label>
  <div class="col-md-10">
    <textarea style="resize:vertical;" name="description" class="form-control input-lg" placeholder="Describe your application..."></textarea>
  </div>
  <br />
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-2 text-left">Upload Icon:</label>
    <div class="col-md-10">
      <input type="file" name="icon"/>
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-2 text-left">Upload Demo File:</label>
    <div class="col-md-10">
      <input type="file" name="demo_file"/>
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group text-center">
    <input type="submit" name="add" class="btn btn-primary input-lg col-md-12" value="Add"/>
  </div>

</form>
@endsection
