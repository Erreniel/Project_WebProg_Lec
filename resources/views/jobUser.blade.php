@extends('navbar')
@section('title', 'Job')
@section('content')
    <style>
        .card {
            position: relative;
        }

        a.stretched-link:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }

        .btn {
            position: relative;
            z-index: 1;
        }
    </style>
    <div>
        <div class="d-flex justify-content-center">
            <form class="d-flex w-75 mt-4">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-warning" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
        <div class="container d-flex flex-column justify-content-center align-items-center mt-3">
            @foreach ($jobs as $job)
            <div class="card mb-3 w-75" style="max-width: 1020px; background-color: #EDFCFD; color: black;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="{{route('jobDetail', $job->id)}}" class="stretched-link">
                            <img src="{{$job->company->logo}}" class="img-fluid ms-3 me-3 mt-3 mb-3" style="min-width: 200px; max-width: 200px; max-height: 200px; min-height: 200px;" alt="company-logo">
                        </a>
                    </div>
                    <div class="col-md-8 mt-4">
                        <div class="card-body">
                            <div class="body">
                                <h5 class="card-title ms-5">{{$job->name}}</h5>
                                <p class="card-text ms-5">{{$job->company->name}}</p>
                                <p class="card-text ms-5 me-5">{{$job->type->name}}</p>
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <a href="/bookmark" class="btn" style="background-color: #2892B3; color: white;">Add to
                                    Bookmark</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
