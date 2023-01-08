@extends('navbar')
@section('title', 'Add Company')
@section('content')
<div class=" d-flex justify-content-center flex-column mt-3 mb-3">
        <div class="d-flex justify-content-center mb-3">
            <h1>Add New Company</h1>
        </div>
        <div  class="d-flex justify-content-center">
            <form action="{{route('addCompany')}}" method="POST" enctype="multipart/form-data" class="card d-flex justify-content-center w-50 p-5 shadow" style="background-color: #D1F8FC">
                @csrf
                <div class="mb-3">
                <label for="InputName" class="form-label">Company Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Company Name">
                    </div>
                    <div class="mb-3">
                      <label for="InputDesc" class="form-label">Company Description</label>
                      <textarea class="form-control" id="desc" name="desc" placeholder="Company Description, or slogan"></textarea>
                    </div>
                    <div class="mb-3 d-flex flex-column">
                    <label for="InputLogo" class="form-label">Company Logo</label>
                    <input type="file" class="form-control-file" id="logo" name="logo">
                    </div>
                    <div class="mb-3">
                        <label for="InputLocation" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Location">
                    </div>
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="InputWebsite" class="form-label">Website</label>
                        <input type="text" class="form-control" id="website" name="website" placeholder="Website">
                    </div>
                    <div class="mb-3">
                        <label for="InputEmployee" class="form-label">Employee</label>
                        <input type="number" class="form-control" id="employee" name="employee" placeholder="Employee">
                      </div>
                    <div class="mb-3">
                        <label for="InputSlogan" class="form-label">Slogan</label>
                        <input type="text" class="form-control" id="slogan" name="slogan" placeholder="Slogan">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    @if ($errors->any())
                        {{$errors->first()}}
                    @endif
                  </form>
            </div>
    </div>
@endsection
