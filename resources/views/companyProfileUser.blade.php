@extends('navbar')
@section('title', 'Company')
@section('content')
@if (Auth::user()->role == 'User')

<div class="container d-flex justify-content-center flex-column">
    <div class="card d-flex flex-column justify-content-center shadow-sm" style="background-color: #D1F8FC">
        <div class="d-flex flex-row max-height:50%">
            <div class="ms-4 me-4 mb-3">
                <img src="/{{$company->logo}}" alt="">
            </div>
            <div class="d-flex justify-content-center flex-column ">
                <h3 class="fw-bold">{{$company->name}}</h3>
                <p class="fs-4" style="color: #029BB0">{{$company->slogan}}</p>
                <table>
                    <tr>
                        <th class="fs-4" style="color: #5E5E5E; width:130px">Lokasi</th>
                        <th class="fs-4">{{$company->location}}</th>
                        <th class="fs-4" style="color: #5E5E5E; width:130px">Email</th>
                        <th class="fs-4">{{$company->email}}</th>
                    </tr>
                    <tr>
                        <th class="fs-4" style="color: #5E5E5E; width:130px">Website</th>
                        <th class="fs-4">{{$company->website}}</th>
                        <th class="fs-4" style="color: #5E5E5E; width:130px">Karyawan</th>
                        <th class="fs-4">{{$company->employee}}</th>
                    </tr>
                </table>
            </div>
        </div>
            <div class="ps-4 pe-4 pb-3">
                <h4 class="mb-3 fw-bold">About</h4>
                <p class="fs-5">{{$company->description}}</p>
            </div>
        </div>

        <div class="card d-flex flex-column justify-content-center shadow-sm mt-2 p-4" style="background-color: #ECA70A ">
            <div class="d-flex flex-row align-items-center justify-content-between">
                <h4 class="mb-3 fw-bold">Active Job</h4>
            </div>
            @foreach ($company->job as $job)
            <div class="d-flex flex-row align-items-center justify-content-between">
                <div class="d-flex flex-column ">
                    <h5 style="color: #FFFFFF">{{$job->name}}</h5>
                    <div class="d-flex flex-row align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-card-checklist mb-1" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        <h5 class="ms-2">{{$job->type->name}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@elseif (Auth::user()->role == 'Admin')
<div class="container d-flex justify-content-center flex-column">
    <div class="card d-flex flex-column justify-content-center shadow-sm" style="background-color: #D1F8FC">
        <div class="d-flex justify-content-end mt-4 me-5">
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                  </svg>
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Company</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>Are You Sure Want to Delete This Company?</h5>
                    </div>
                    <div class="modal-footer">
                        {{-- <a href="{{route('companyDetail', $company->id)}}"> --}}
                        <button type="button" data-bs-dismiss="modal" class="btn btn-secondary" id="noBtn">No</button>
                        {{-- </a> --}}
                        <a href="{{route('deleteCompany', $company->id)}}">
                        <button type="button" class="btn btn-primary" id="yesBtn">Yes</button>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row max-height:50%">
            <div class="ms-4 me-4 mb-3">
                <img src="/{{$company->logo}}" alt="">
            </div>
            <div class="d-flex justify-content-center flex-column ">
                <h3 class="fw-bold">{{$company->name}}</h3>
                <p class="fs-4" style="color: #029BB0">{{$company->slogan}}</p>
                <table>
                    <tr>
                        <th class="fs-4" style="color: #5E5E5E; width:130px">Lokasi</th>
                        <th class="fs-4">{{$company->location}}</th>
                        <th class="fs-4" style="color: #5E5E5E; width:130px">Email</th>
                        <th class="fs-4">{{$company->email}}</th>
                    </tr>
                    <tr>
                        <th class="fs-4" style="color: #5E5E5E; width:130px">Website</th>
                        <th class="fs-4">{{$company->website}}</th>
                        <th class="fs-4" style="color: #5E5E5E; width:130px">Karyawan</th>
                        <th class="fs-4">{{$company->employee}}</th>
                    </tr>
                </table>
            </div>
        </div>
        <div class="ps-4 pe-4 pb-3">
            <h4 class="mb-3 fw-bold">About</h4>
            <p class="fs-5">{{$company->description}}</p>
        </div>
    </div>

    <div class="card d-flex flex-column justify-content-center shadow-sm mt-2 p-4" style="background-color: #ECA70A ">
        <div class="d-flex flex-row align-items-center justify-content-between">
            <h4 class="mb-3 fw-bold">Active Job</h4>
            <a href="{{route('showAddJob', $company->id)}}" class="btn mb-2 ">
                <h4 style="color: #FFFFFF">+ Add Job</h4>
            </a>
        </div>
        @foreach($company->job as $job)
        <div class="d-flex flex-row align-items-center justify-content-between">
            <div class="d-flex flex-column ">
                <h5 style="color: #FFFFFF">{{$job->name}}</h5>
                <div class="d-flex flex-row align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-card-checklist mb-1" viewBox="0 0 16 16">
                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                        <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                      </svg>
                      <h5 class="ms-2">{{$job->type->name}}</h5>
                </div>
            </div>
            <div>
                <a href="{{route('jobDetail',$job->id)}}" class="btn btn-light fw-bold fs-5" style="width: 120px">Edit</a>
                <a href="{{route('deleteJob',$job->id)}}" class="btn fw-bold fs-5" style="width: 120px; background-color: #FFE351">Delete</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
    @endif
    @endsection
