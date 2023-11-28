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
        padding: 0.375rem 0.75rem;
        font-size: 1.2rem;
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
        font-size: 1.5rem;
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
                <h2>Password reset</h2>

            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="row mb-3">

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" placeholder="Email Adresss" value="{{ $email ?? old('email') }}"
                                    required autocomplete="email" autofocus>

                            </div>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>



                        <div class="input-group form-group">

                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="password"
                                    name="password" required autocomplete="new-password">
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="input-group form-group">

                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" placeholder="confirm password" required
                                    autocomplete="new-password">
                            </div>

                        </div>
                    </div>



                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-12">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

</body>

</html>