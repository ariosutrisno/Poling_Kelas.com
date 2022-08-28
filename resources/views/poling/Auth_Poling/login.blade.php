<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets_poling/css/auth_style.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets_poling/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_poling/font-awesome-4.7.0/css/font-awesome.min.css') }}">
</head>

<body>
    <div class="register">
        <div class="row">
            <div class="col-md-3 register-left">
                <h3>Welcome</h3>
                <p>Please Login</p>
                <a href="{{ route('register-user') }}">Do You Haven't Account?</a>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">Login Yourself</h3>
                    <form id="form-login">
                        @csrf
                        <div class="row register-form">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *"
                                        value="{{ old('email') }}" name="email" id="email" />
                                    <span class="text-danger" id="textEmail"></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *"
                                        value="{{ old('password') }}" name="password" id="password" />
                                    <span class="text-danger" id="textPassword"></span>
                                </div>
                                <input type="button" class="btnLogin" value="Login" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets_poling/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('assets_poling/js/bootstrap.min.js') }}"></script>
    <script>
        $('.btnLogin').click(function() {
            let check_data = $('#form-login').serialize()
            $.ajax({
                url: "{{ route('loginRequest') }}",
                type: "POST",
                dataType: "JSON",
                cache: false,
                data: check_data,
                success: function(response) {
                    if (response.message) {
                        window.location.assign('poling');
                    }
                },
                error: function(response) {
                    $('#textEmail').text(response.responseJSON.errors.email)
                    $('#email').css('border-color', 'red')
                    $('#textPassword').text(response.responseJSON.errors.password)
                    $('#password').css('border-color', 'red')
                }
            })
        })
    </script>
</body>

</html>
