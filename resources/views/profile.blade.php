@extends('navbar')
@section('title', 'Detail')
@section('content')
<style>
    div.card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    #form {
        width: 60%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        outline: 0;
        border-width: 0 0 1px;
        border-color: black
    }

    #form:focus {
        border-color: #2892B3;
        border-width: 0 0 2px;
    }

    ::placeholder {
        text-align: center;
        font-weight: 600;
    }

    input {
        text-align: center;
    }

    .submit {
        background: #2892B3;
        border: none;
        color: white;
        padding: 10px 32px;
        font-weight: 600;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 20px;
    }

    a {
        color: #ECA70A;
    }
</style>
<body>
    <div style="background-image: url(/asset/bg_login-signup-profile.png); background-size: cover; background-repeat: no-repeat; height:100vh">
    <div style="padding-top: 90px">
        <div class="card d-flex flex-column justify-content-center m-auto" style="border-radius: 29px; width: 539px; height: 524px;">
            <div style="text-align:center;">
                <h4 class="justify-content-center" style="color: #2892B3; font-weight: 700; font-size:30px; padding-top: 44;">
                    Profile
                </h4>
                <div class="mt-3">
                    <div>
                        Email
                    </div>
                    <input id="form" type="text" value="{{$user->email}}" readonly>
                </div>
                <div class="mt-3">
                    <div>
                        Full Name
                    </div>
                    <input id="form" type="text" value="{{$user->name}}" readonly>
                </div>
                <div class="mt-3">
                    <div>
                        Date of Birth
                    </div>
                    <input id="form" type="text" value="{{$user->dob}}" readonly>
                </div>
                <a class="btn btn-outline-danger mt-5" href="{{route('logout')}}">Logout</a>
            </div>
        </div>
    </div>
</body>
@endsection
