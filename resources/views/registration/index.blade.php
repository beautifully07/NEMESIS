@extends('layouts.main')
@section('container')
@include('sweetalert::alert')

@if(session()->has("successMessage"))
            <div class="alert alert-success">
                {{ session("successMessage") }}
            </div>
@endif    

@if(session()->has("errorMessage"))
            <div class="alert alert-danger">
                {{ session("errorMessage") }}
            </div>
@endif 
<a href="{{ URL::to('registration/create') }}" class="btn btn btn-primary mb-3">
<i class="fas fa-plus" aria-hidden="true"></i> Add</a>
<table id="datatable1" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th width="5%">No</th>
        <th>Name</th>
        <th>User</th>
        <th>Member Package</th>
        <th>Start Date</th>
        <th>Trainer</th>
        <th>price</th>
        <th>discount</th>
        <th width="10%">Action</th>
    </tr>
    </thead>
    <tbody>
        <!-- @foreach($registrations as $index => $registration )
         <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $registration->title }}</td>
            <td><img src="{{ URL::to('storage/' . $registration->image)  }}"
                class="rounded" style="width: 50px"></a></td></td>
            <td>{{ $registration->description }}</td>
            <td>{{ $registration->user->name }}</td>
            <td>
                <div class="d-flex">
                <a href="{{ URL::to('registration/' . $registration->id) }}" class="btn btn-sm btn-info mr-2">
                Show</a>
                <a href="{{ URL::to('registration/' . $registration->id. '/edit') }}" class="btn btn-sm btn-warning mr-2">
                Edit</a>
                <form action="{{ URL::to('registration/' . $registration->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger"
                    onclick="return confirm('Anda yakin ingin menghapus data ini {{ $registration->name }}?')">Delete</button>
                </form>
                </div>
            </td>
        </tr>
        @endforeach -->
    </tbody>
</table>


@endsection