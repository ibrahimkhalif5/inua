<!DOCTYPE html>
<html>

<head>
    <title>User|Password reset</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <style>
    body {
        background: #000 !important;
    }

    .card {
        border: 1px solid #28a745;
    }

    .card-login {
        margin-top: 60px;
        padding: 18px;
        max-width: 30rem;
    }

    .card-header {
        color: #fff;
        /*background: #ff0000;*/
        font-family: sans-serif;
        font-size: 20px;
        font-weight: 600 !important;
        margin-top: 10px;
        border-bottom: 0;
    }

    .input-group-prepend span {
        width: 50px;
        background-color: #ff0000;
        color: #fff;
        border: 0 !important;
    }

    input:focus {
        outline: 0 0 0 0 !important;
        box-shadow: 0 0 0 0 !important;
    }

    .login_btn {
        width: 130px;
    }

    .login_btn:hover {
        color: #fff;
        background-color: #ff0000;
    }

    .btn-outline-danger {
        color: #fff;
        font-size: 18px;
        background-color: #28a745;
        background-image: none;
        border-color: #28a745;
    }

    .form-control {
        display: block;
        width: 100%;
        height: calc(2.25rem + 2px);
        padding: 1rem 1.5rem;
        font-size: 1.6rem;
        line-height: 1.6;
        color: #28a745;
        background-color: transparent;
        background-clip: padding-box;
        border: 1px solid #28a745;
        border-radius: 0;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .input-group-text {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding: 0.375rem 0.75rem;
        margin-bottom: 0;
        font-size: 1.6rem;
        font-weight: 700;
        line-height: 1.6;
        color: #495057;
        text-align: center;
        white-space: nowrap;
        background-color: #e9ecef;
        border: 1px solid #ced4da;
        border-radius: 0;
    }
    </style>
</head>

<body>


    <div class="container">
        <div class="card card-login mx-auto text-center bg-dark">
            <div class="card-header mx-auto bg-dark">
                <span> <img src="{{asset('front/images/mdr1.png')}}" class="w-75" alt="Logo"> </span><br />
                <span class="logo_title mt-5">Password Reset</span>
                <!--            <h1>--><?php //echo $message?>
                <!--</h1>-->

            </div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="input-group form-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Email Address" name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-0">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Send Password Reset Link') }}
                        </button>

                    </div>
                </form>

                <div class="row mb-0">
                    <a href="/login" class="btn btn-warning btn-block">back</a>

                </div>

            </div>
        </div>
    </div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

</body>

</html>