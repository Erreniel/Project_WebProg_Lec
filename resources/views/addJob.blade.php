@extends('navbar')
@section('title', 'Add Job')
@section('content')
 <div class=" d-flex justify-content-center flex-column mt-3 mb-3">
        <div class="d-flex justify-content-center mb-3">
            <h1>Add New Job</h1>
        </div>
        <div  class="d-flex justify-content-center">
            <form action="{{route('addJob', $id)}}" method="POST" class="card d-flex justify-content-center w-50 p-5 shadow" style="background-color: #D1F8FC">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Job Title</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Job Title">
                </div>
                <div class="mb-3">
                    <label for="location" class="-form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Location">
                </div>
                <div class="mb-3">
                    <label for="type" id="workType" class="form-label">Work Type</label>
                    <?php $types = DB::table('job_types')->get() ?>
                    <select class="form-select" aria-label="Default select example" id="type" name="type">
                        @foreach ($types as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="salary" class="form-label">Salary</label>
                    <input type="number" class="form-control" id="salary" name="salary" placeholder="Salary">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Job Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Job Description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="requirement" class="form-label">Job Requirement</label>
                    <textarea class="form-control" id="requirement" name="requirement" placeholder="Job Requirement"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
