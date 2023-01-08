@extends('navbar')
@section('title', 'Bookmark')
@section('content')
    <div>
        <h2 style="margin-left: 235px">Bookmark</h2>
        </div>
        <div class="container d-flex justify-content-center mt-3">
            <div class="card mb-3 w-75" style="max-width: 1020px; background-color: #EDFCFD; color: black;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/ayam.png" class="img-fluid ms-3 me-3" alt="company-logo">
                    </div>
                    <div class="col-md-8 mt-4">
                        <div class="card-body ">
                            <div>
                                <h5 class="card-title ms-5">Nama Role</h5>
                                <p class="card-text ms-5">Nama Perusahaan</p>
                                <p class="card-text ms-5 me-5">Jenis role</p>
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <a href="/bookmark" class="btn" style="background-color: #2892B3; color: white">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
