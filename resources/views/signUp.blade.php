<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Login</title>
</head>
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
    <div class="position-absolute top-0 end-0 mt-5 me-5">
        <img src="./asset/logo.png" style="width: 106px;">
    </div>
    <div style="padding-top: 50px">
        <div class="card d-flex flex-column justify-content-center m-auto" style="border-radius: 29px; width: 539px; height: 630px;">
            <div style="text-align:center;">
                <h4 class="justify-content-center" style="color: #2892B3; font-weight: 700; font-size:30px; padding-top: 44;">
                    Sign Up
                </h4>
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mt-4">
                        <input id="form" name="email" type="text" placeholder="Email">
                    </div>
                    <div class="mt-4">
                        <input id="form" name="name" type="text" placeholder="Full Name">
                    </div>
                    <div class="mt-4">
                        <input id="form" name="dob" type="date" placeholder="Date of Birth">
                    </div>
                    <div class="mt-4">
                        <input id="form" name="password" type="password" placeholder="Password">
                    </div>
                    <div class="mt-4">
                        Have an account? <a href="/login">Click here</a>
                    </div>
                    <div class="mt-4">
                        <button class="submit" type="submit">Sign in</button>
                    </div>
                    <div class="mt-3" style="color: red">
                    @if($errors->any())
                        {{$errors->first()}}
                    @endif
                </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
