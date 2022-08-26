@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Student Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('students.update', $student->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Student Name:</label>
              <input type="text" class="form-control" name="name" value="{{ $student->name }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Registration Number :</label>
              <input type="text" class="form-control" name="regNo" value="{{ $student->regNo }}"/>
          </div>

          <div class="form-group">
              <label for="cases">Grade:</label>
              <input type="text" class="form-control" name="grade" value="{{ $student->grade }}"/>
          </div>

          <div class="form-group">
              <label for="cases">Fee Paid :</label>
              <input type="text" class="form-control" name="feePaid" value="{{ $student->feePaid }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection