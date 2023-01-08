@extends('navbar')
@section('title', 'Home')
@section('content')
@if (Auth::user()->role == 'User')
{{Auth::user()->name}}
<div style="background-image: url(/asset/bg_home.png); background-size: cover; background-repeat: no-repeat; height:100vh">
    <div class="d-flex justify-content-center flex-column w-100">
        <div class="d-flex align-items-center justify-content-center flex-column mt-5 mb-5">
            <h1>FIND YOUR DREAM JOB</h1>
            <br>
            <h1>WITH US</h1>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <form action="{{ url('/search') }}" role="search" class="d-flex flex-column w-50 justify-content-center">
                <div class="d-flex mb-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </span>
                        </div>
                        <input class="form-control me-2" type="search" name="search" type="text" placeholder="Job Position">
                    </div>
                </div>
                <div class="d-flex flex-column w-25 justify-content-center mx-auto">
                    <button type="button" class="btn btn-warning" value="Search">Search</button>
                </div>
            </form>
        </div>
    </div>

@elseif (Auth::user()->role == 'Admin')
    {{Auth::user()->name}}
    <style>
        .content{
            margin-top:5em;
        }
        a.nav-link {
            color: #2892B3;
        }
        </style>
    <div class="d-flex justify-content-center flex-column ps-5 pe-5 w-100 mt-5">
        <div class="d-flex justify-content-between align-items-center flex-row ps-5 pe-5 mb-2 mt-5">
            <h3>Active Company</h3>
            <a class="btn me-3" href="{{route('showAddCompany')}}" style="background-color: #2892B3; color: white; padding-right: 40px; padding-left: 40px ;">Add</a>
        </div>

        <div class="d-flex justify-content-center flex-column w-100 ps-5 pe-5">
            @foreach ($companies as $company)
            <div class="card d-flex  justify-content-center flex-row mb-3 align-items-center shadow" style="border: 1px solid black">
                <div class="input-group d-flex justify-content-between mb-3 mt-3 ps-3">
                    <h5>{{$company->name}}</h5>
                </div>
                <div class="d-flex  mb-3 pe-3">
                    <a class="btn" href="{{route('companyDetail', $company->id)}}" style="background-color: #ECA70A; color: white; padding-right: 40px; padding-left: 40px ; margin-top: 12px">Edit</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endif
    @endsection
