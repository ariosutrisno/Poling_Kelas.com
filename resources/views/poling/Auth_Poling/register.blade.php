<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
                <p>Before Login, Please Register first</p>
                <a href="{{ route('login-user') }}">If You have an Account</a>

            </div>
            <div class="col-md-9 register-right">
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">Register Yourself</h3>
                    <form id="form-register">
                        @csrf
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *"
                                        value="{{ old('first_name') }}" name="first_name" id="first_name" />
                                    <span class="text-danger" id="first_nameError"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name *"
                                        value="{{ old('last_name') }}" name="last_name" id="last_name" />
                                    <span class="text-danger" id="last_nameError"></span>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *"
                                        value="{{ old('email') }}" name="email" id="email" />
                                    <span class="text-danger" id="emai_Error"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" maxlength="12" minlength="10" class="form-control"
                                        placeholder="Phone *" value="{{ old('phone_user') }}" name="phone_user"
                                        id="phone_user" />
                                    <span class="text-danger" id="phone_userError"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *"
                                        value="{{ old('password') }}" name="password" id="password" />
                                    <span class="text-danger" id="passwordError"></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password *"
                                        value="{{ old('password_confirm') }}" name="password_confirm"
                                        id="password_confirm" />
                                    <span class="text-danger" id="password_confirmError"></span>
                                </div>
                                <input type="button" class="btnRegister" value="Register" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets_poling/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('assets_poling/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
    <script>
        $('.btnRegister').click(function() {
                    let check_data = $('#form-register').serialize()
                    $.ajax({
                            url: "{{ route('registerRequest') }}",
                            type: "POST",
                            dataType: "JSON",
                            cache: false,
                            data: check_data,
                            success: function(response) {
                                if (response.message) {
                                    if (response.message) {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Register Berhasil.',
                                            showCancelButton: false,
                                            showConfirmButton: false
                                        })
                                        window.location.href = "{{ route('poling') }}";
                                    }
                                },
                                error: function(response) {
                                    $('#first_nameError').text(response.responseJSON.errors.first_name)
                                    $('#first_name').css('border-color', 'red')
                                    $('#last_nameError').text(response.responseJSON.errors.last_name)
                                    $('#last_name').css('border-color', 'red')
                                    $('#phone_userError').text(response.responseJSON.errors.phone_user)
                                    $('#phone_user').css('border-color', 'red')
                                    $('#emai_Error').text(response.responseJSON.errors.email)
                                    $('#email').css('border-color', 'red')
                                    $('#passwordError').text(response.responseJSON.errors.password)
                                    $('#password').css('border-color', 'red')
                                    $('#password_confirmError').text(response.responseJSON.errors
                                        .password_confirm)
                                    $('#password_confirm').css('border-color', 'red')
                                }
                            })

                    })
    </script>
</body>

</html>
