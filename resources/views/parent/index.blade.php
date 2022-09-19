@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="container">
<form style="display: inline" action="{{route('show')}}" method="get">
  <button type="submit" class="btn btn-primary">Click here to add balance</button>
</form>
</div>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table id="student_datatable" class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Student Name</td>
          <td>Parent Name</td>
          <td>Total Amount</td>
          <td>Amount Remain</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($parent as $parents)
        <tr>
            <td>{{$parents->id}}</td>
            <td>{{$parents->student->full_name }}</td>
            <td>{{$parents->total_amount}}</td>
            <td>{{$parent->acc_balance}}</td>
            <div class="d-flex">
            <td>
              <div class="d-flex">
                <a href="" class="btn btn-primary">Edit</a>
                <form action="" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="ml-4 btn btn-danger" type="submit" onclick="return confirm('Are you sure  you want to delete?')">Delete</button>
                  <?=csrf_field()?>
                </form>
              </div>
            </td>
        
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
@push('scripts')
<script>
    $('#student_datatable').DataTable({});
</script>
@endpush