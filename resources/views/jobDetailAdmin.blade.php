@extends('navbar')
@section('title', 'Detail')
@section('content')
<style>
    div.card{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>

<body>
<div class="container my-3 justify-content-center">
    <div class="card col-md-10 p-4 mb-2 d-flex flex-row flex-wrap mx-auto" style="background-color: rgba(189, 245, 250, 0.2);">
        <div class="col-3 align-self-center">
            <img src="https://cdn.vectorstock.com/i/1000x1000/73/55/software-repair-icon-vector-44887355.webp" class="img-fluid px-5" alt="job image">
        </div>
        <div class="col-8">
            <h5 class="card-title">Software Enginner</h5>
            <a href="/companyAdmin" class="card-subtitle fst-italic" style="text-decoration: none; color: #FB8C02">PT. Sejahtera Bersama</a>
            <hr>
            <p class="card-text">
                <ul class="p-0" style="list-style-type: none">
                    <li class="mb-1">
                        <i class="bi bi-geo-alt-fill me-2"></i>
                        East Java</li>
                    <li class="mb-1">
                        <i class="bi bi-briefcase-fill me-2"></i>
                        Full-time</li>
                    <li class="mb-1">
                        <i class="bi bi-cash-coin me-2"></i>
                        IDR 11.000.000 - 15.000.000/month</li>
                </ul>
            </p>
        </div>
    </div>

    <div class="card p-4 col-md-10 mb-2 mx-auto" style="background-color: rgba(189, 245, 250, 0.7);">
        <div class="card-body">
            <h6 class="card-title">
                <a href="/descEdit" style="text-decoration: none; color: black">
                    Job Description
                    <i class="bi bi-pencil-fill ms-2"></i>
                </a>
            </h6>
            <p class="card-text">
                <ul>
                    <li>Demonstrate effective communication style working with all levels.</li>
                    <li>Work with peers to ensure timely completion of projects and tasks.</li>
                    <li>Able to plan and execute project management methodology on all projects.</li>
                </ul>
            </p>

            <h6 class="card-title mt-5">
                <a href="/reqEdit" style="text-decoration: none; color: black">
                    Job Requirment
                    <i class="bi bi-pencil-fill ms-2"></i>
                </a>
            </h6>
            <p class="card-text">
                <ul>
                    <li>Strong Knowledge in VB6, .Net, C#, C++ and Oracle PL/SQL</li>
                    <li>Automation and SECS/GEM knowledge is a plus</li>
                    <li>Experience with MES, shop floor automation and Industry 4.0 is a plus</li>
                    <li>Good analytical and troubleshooting skills</li>
                </ul>
            </p>
        </div>
    </div>
</div>
@endsection
