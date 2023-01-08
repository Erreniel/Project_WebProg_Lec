@extends('navbar')
@section('title', 'Home')
@section('content')
<style>
        .content{
          margin-top:5em;
        }
        a.nav-link {
            color: #2892B3;
        }
    </style>
    <div class="d-flex justify-content-center flex-column ps-5 pe-5 w-100 mt-5">
        <div class="d-flex justify-content-between flex-row ps-5 pe-5 mb-2 mt-5">
            <div class="d-flex justify-content-between mt-5">
                <h3>Active Company</h3>
            </div>
            <a href="/addCompany" class="d-flex justify-content-between mt-5">
                <button type="button" class="btn ms-5" style="background-color: #2892B3; color: white;padding-right: 40px; padding-left: 40px ">Add</button>
            </a>
        </div>

        <div class="d-flex justify-content-center flex-column w-100 ps-5 pe-5">
            <div class="card d-flex  justify-content-center flex-row mb-3 w-100 shadow" style="border: 1px solid black">
                <div class="input-group d-flex justify-content-between mb-3 mt-3 ps-3">
                    <h5>PT.SukaMundur</h5>
                </div>
                <div class="d-flex  mb-3 pe-3">
                    <button type="button" class="btn" style="background-color: #ECA70A; color: white; padding-right: 40px; padding-left: 40px ; margin-top: 12px">Edit</button>
                </div>
            </div>

            <div class="card d-flex ustify-content-center flex-row mb-3  w-100 shadow" style="border: 1px solid black">
                <div class="input-group d-flex justify-content-between mb-3 mt-3 ps-3">
                    <h5>PT.SukaMundur</h5>
                </div>
                <div class="d-flex  mb-3 pe-3">
                    <button type="button" class="btn" style="background-color: #ECA70A; color: white; padding-right: 40px; padding-left: 40px ; margin-top: 12px">Edit</button>
                </div>
            </div>

            <div class="card d-flex justify-content-center flex-row mb-1  w-100 shadow" style="border: 1px solid black">
                <div class="input-group d-flex  mb-3 mt-3 ps-3">
                    <h5>PT.SukaMundur</h5>
                </div>
                <div class="d-flex  mb-3 pe-3">
                    <button type="button" class="btn" style="background-color: #ECA70A; color: white; padding-right: 40px; padding-left: 40px ; margin-top: 12px">Edit</button>
                </div>
            </div>
        </div>
    </div>
@endsection
