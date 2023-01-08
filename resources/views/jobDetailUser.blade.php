@extends('navbar')
@section('title', 'Detail')
@section('content')
@if (Auth::user()->role == 'User')

<style>
    div.card{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    </style>

<div class="container my-3 justify-content-center">
    <div class="card col-md-10 p-4 mb-2 d-flex flex-row flex-wrap mx-auto" style="background-color: rgba(189, 245, 250, 0.2);">
        <div class="col-3 align-self-center">
            <img src="/{{$job->company->logo}}" class="img-fluid px-5" alt="job image">
        </div>
        <div class="col-8">
            <h5 class="card-title">{{$job->name}}</h5>
            <a href="{{route('companyDetail', $job->company->id)}}" class="card-subtitle fst-italic" style="text-decoration: none; color: #FB8C02">{{$job->company->name}}</a>
            <hr>
            <p class="card-text">
                <ul class="p-0" style="list-style-type: none">
                    <li class="mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                        {{$job->location}}</li>
                        <li class="mb-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"/>
                                <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
                            </svg>
                            {{$job->type->name}}</li>
                            <li class="mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                                </svg>
                                IDR {{number_format($job->salary, 2, '.', ',')}}/month</li>
                            </ul>
                        </p>
                    </div>
                    <div class="col order-12">
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                            </svg>
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Bookmark Job</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>Are You Sure Want to Bookmark this Job?</h5>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" id="noBtn">No</button>
                                        <button type="button" class="btn btn-primary" id="yesBtn">Yes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card p-4 col-md-10 mb-2 mx-auto" style="background-color: rgba(189, 245, 250, 0.7);">
                    <div class="card-body">
                        <h6 class="card-title">Job Description</h6>
                        <p class="card-text">
                            {{-- <ul>
                                <li>Demonstrate effective communication style working with all levels.</li>
                                <li>Work with peers to ensure timely completion of projects and tasks.</li>
                                <li>Able to plan and execute project management methodology on all projects.</li>
                </ul> --}}
                {{$job->description}}
            </p>
            <h6 class="card-title mt-5">Job Requirement</h6>
            <p class="card-text">
                {{-- <ul>
                    <li>Strong Knowledge in VB6, .Net, C#, C++ and Oracle PL/SQL</li>
                    <li>Automation and SECS/GEM knowledge is a plus</li>
                    <li>Experience with MES, shop floor automation and Industry 4.0 is a plus</li>
                    <li>Good analytical and troubleshooting skills</li>
                </ul> --}}
                {{$job->requirement}}
            </p>
        </div>
    </div>
</div>
@elseif (Auth::user()->role == 'Admin')
<style>
    div.card{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>

<body>
<div class="container my-3 justify-content-center">
    <div class="card col-md-10 p-4 mb-2 d-flex flex-row flex-wrap mx-auto" style="background-color: rgba(189, 245, 250, 0.2);">
        <div class="col-3 align-self-center">
            <img src="/{{$job->company->logo}}" class="img-fluid px-5" alt="job image">
        </div>
        <div class="col-8">
            <h5 class="card-title">{{$job->name}}</h5>
            <a href="{{route('companyDetail', $job->company->id)}}" class="card-subtitle fst-italic" style="text-decoration: none; color: #FB8C02">{{$job->company->name}}</a>
            <hr>
            <p class="card-text">
                <ul class="p-0" style="list-style-type: none">
                    <li class="mb-1">
                        <i class="bi bi-geo-alt-fill me-2"></i>
                        {{$job->location}}</li>
                    <li class="mb-1">
                        <i class="bi bi-briefcase-fill me-2"></i>
                        {{$job->type->name}}</li>
                    <li class="mb-1">
                        <i class="bi bi-cash-coin me-2"></i>
                        IDR {{number_format($job->salary, 2, '.', ',')}}/month</li>
                </ul>
            </p>
        </div>
    </div>

    <div class="card p-4 col-md-10 mb-2 mx-auto" style="background-color: rgba(189, 245, 250, 0.7);">
        <div class="card-body">
            <h6 class="card-title">
                <a href="{{route('showEditDescription', $job->id)}}" style="text-decoration: none; color: black">
                    Job Description
                    <i class="bi bi-pencil-fill ms-2"></i>
                </a>
            </h6>
            <p class="card-text">
                {{-- <ul>
                    <li>Demonstrate effective communication style working with all levels.</li>
                    <li>Work with peers to ensure timely completion of projects and tasks.</li>
                    <li>Able to plan and execute project management methodology on all projects.</li>
                </ul> --}}
                {{$job->description}}
            </p>

            <h6 class="card-title mt-5">
                <a href="{{route('showEditRequirement', $job->id)}}" style="text-decoration: none; color: black">
                    Job Requirement
                    <i class="bi bi-pencil-fill ms-2"></i>
                </a>
            </h6>
            <p class="card-text">
                {{-- <ul>
                    <li>Strong Knowledge in VB6, .Net, C#, C++ and Oracle PL/SQL</li>
                    <li>Automation and SECS/GEM knowledge is a plus</li>
                    <li>Experience with MES, shop floor automation and Industry 4.0 is a plus</li>
                    <li>Good analytical and troubleshooting skills</li>
                </ul> --}}
                {{$job->requirement}}
            </p>
        </div>
    </div>
</div>
@endif


@endsection
