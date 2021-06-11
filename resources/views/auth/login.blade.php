<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Login</title>

    <style>
            /**
        * * General variables
        * */
        /**
        * * General configs
        * */
        * {
        box-sizing: border-box;
        }

        body {
        font-family: "Montserrat", sans-serif;
        font-size: 12px;
        line-height: 1em;
        }

        button {
        background-color: transparent;
        padding: 0;
        border: 0;
        outline: 0;
        cursor: pointer;
        }

        input {
        background-color: transparent;
        padding: 0;
        border: 0;
        outline: 0;
        }
        input[type=submit] {
        cursor: pointer;
        }
        input::-moz-placeholder {
        font-size: 0.85rem;
        font-family: "Montserrat", sans-serif;
        font-weight: 300;
        letter-spacing: 0.1rem;
        color: #ccc;
        }
        input:-ms-input-placeholder {
        font-size: 0.85rem;
        font-family: "Montserrat", sans-serif;
        font-weight: 300;
        letter-spacing: 0.1rem;
        color: #ccc;
        }
        input::placeholder {
        font-size: 0.85rem;
        font-family: "Montserrat", sans-serif;
        font-weight: 300;
        letter-spacing: 0.1rem;
        color: #ccc;
        }
        /**
        * * Page background
        * */
        .user {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
        background: rgba(191, 207, 253, 1);
        background-size: cover;
        }
        .user_options-container {
        position: relative;
        width: 80%;
        }
        .user_options-text {
        display: flex;
        justify-content: space-between;
        width: 100%;
        background-color: #3A61D1;
        border-radius: 3px;
        }

        /**
        * * Registered and Unregistered user box and text
        * */
        .user_options-registered,
        .user_options-unregistered {
        width: 50%;
        padding: 75px 45px;
        color: #fff;
        font-weight: 300;
        }

        .user_registered-title,
        .user_unregistered-title {
        margin-bottom: 15px;
        font-size: 1.66rem;
        line-height: 1em;
        }

        .user_unregistered-text,
        .user_registered-text {
        font-size: 0.83rem;
        line-height: 1.4em;
        }

        .user_registered-login,
        .user_unregistered-signup {
        margin-top: 30px;
        border: 1px solid #ccc;
        border-radius: 3px;
        padding: 10px 30px;
        color: #fff;
        text-transform: uppercase;
        line-height: 1em;
        letter-spacing: 0.2rem;
        transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
        }
        .user_registered-login:hover,
        .user_unregistered-signup:hover {
        color: rgba(34, 34, 34, 0.85);
        background-color: #ccc;
        }

        /**
        * * Login and signup forms
        * */
        .user_options-forms {
        position: absolute;
        top: 50%;
        left: 30px;
        width: calc(50% - 30px);
        min-height: 420px;
        background-color: #FFFFFF;
        border-radius: 3px;
        box-shadow: 2px 0 15px rgba(0, 0, 0, 0.25);
        overflow: hidden;
        transform: translate3d(100%, -50%, 0);
        transition: transform 0.4s ease-in-out;
        }
        .user_options-forms .user_forms-login {
        transition: opacity 0.4s ease-in-out, visibility 0.4s ease-in-out;
        }
        .user_options-forms .forms_title {
        margin-bottom: 45px;
        font-size: 1.7rem;
        font-weight: 500;
        line-height: 1em;
        text-transform: uppercase;
        color: #3A61D1;
        letter-spacing: 0.1rem;
        }
        .user_options-forms .forms_field:not(:last-of-type) {
        margin-bottom: 20px;
        }
        .user_options-forms .forms_field-input {
        width: 100%;
        border-bottom: 1px solid #ccc;
        padding: 6px 20px 6px 0;
        font-family: "Montserrat", sans-serif;
        font-size: 1rem;
        font-weight: 300;
        color: gray;
        letter-spacing: 0.1rem;
        transition: border-color 0.2s ease-in-out;
        }
        .user_options-forms .forms_field-input:focus {
        border-color: gray;
        }
        .user_options-forms .forms_buttons {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 35px;
        }
        .user_options-forms .forms_buttons-forgot {
        font-family: "Montserrat", sans-serif;
        letter-spacing: 0.1rem;
        color: #ccc;
        text-decoration: underline;
        transition: color 0.2s ease-in-out;
        }
        .user_options-forms .forms_buttons-forgot:hover {
        color: #b3b3b3;
        }
        .user_options-forms .forms_buttons-action {
        background-color: #3A61D1;
        border-radius: 3px;
        padding: 10px 35px;
        font-size: 1rem;
        font-family: "Montserrat", sans-serif;
        font-weight: 300;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 0.1rem;
        transition: background-color 0.2s ease-in-out;
        }
        .user_options-forms .forms_buttons-action:hover {
        background-color: #e14641;
        }
        .user_options-forms .user_forms-signup,
        .user_options-forms .user_forms-login {
        position: absolute;
        top: 70px;
        left: 40px;
        width: calc(100% - 80px);
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.4s ease-in-out, visibility 0.4s ease-in-out, transform 0.5s ease-in-out;
        }
        .user_options-forms .user_forms-signup {
        transform: translate3d(120px, 0, 0);
        }
        .user_options-forms .user_forms-signup .forms_buttons {
        justify-content: flex-end;
        }
        .user_options-forms .user_forms-login {
        transform: translate3d(0, 0, 0);
        opacity: 1;
        visibility: visible;
        }



        /**
        * * Responsive 990px
        * */
        @media screen and (max-width: 990px) {
        .user_options-forms {
            min-height: 350px;
        }
        .user_options-forms .forms_buttons {
            flex-direction: column;
        }
        .user_options-forms .user_forms-login .forms_buttons-action {
            margin-top: 30px;
        }
        .user_options-forms .user_forms-signup,
        .user_options-forms .user_forms-login {
            top: 40px;
        }

        .user_options-registered,
        .user_options-unregistered {
            padding: 50px 45px;
        }
        }
    </style>
  </head>
  <body>
    <section class="user">
        <div class="user_options-container">
            <div class="user_options-text">
                <div class="user_options-unregistered">
                    <h2 class="user_unregistered-title">WELCOME!</h2>
                    <p class="user_unregistered-text">Login and save the world!</p>
                </div>

            
            
                <div class="user_options-forms" id="user_options-forms">
                    <div class="user_forms-login">
                        <h2 class="forms_title">LOGIN</h2>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <fieldset class="forms_fieldset">
                                <div class="forms_field">
                                    <input type="email" placeholder="Email" class="forms_field-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="forms_field">
                                    <input id="password" type="password" placeholder="Password" class="forms_field-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </fieldset>
                            <div class="forms_buttons">
                                <a type="button" href="{{ route('password.request') }}" class="forms_buttons-forgot">{{ __('Forgot Your Password?') }}</button>
                                <br>
                                <div class="mt-3"> 
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                </div>
                            </div>
                            <div class="mt-3">
                            <button type="submit" value="Log In" class="forms_buttons-action">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>
