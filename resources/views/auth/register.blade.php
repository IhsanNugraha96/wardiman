<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        body {
            background-color: #76b5c5;
        }
        .text-white{
            color: #eee;
        }
        
    </style>
    <title>Login</title>
</head>
 
<body>
    <div class="container">
        <section class="vh-100">
            <div class="container py-5 h-100">
              <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                    class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 ">
                    <h3 class="h3 mb-4 fw-normal text-center text-white">Registration Form</h3>
                    <form class="was-validated" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                          <label for="validationName" class="form-label text-white"><b>Name</b></label>
                          <input type="text" class="form-control form-control-lg is-invalid" id="validationName" placeholder="Insert name..." required value="{{ old('name') }}" name="name">
                          <div class="invalid-feedback">
                            {{-- Please enter email! --}}
                          </div>
                        </div>

                        <div class="mb-4">
                            <label for="validationEmail" class="form-label text-white"><b>Email</b></label>
                            <input type="email" class="form-control form-control-lg is-invalid" id="validationEmail" placeholder="Insert email..." required value="{{ old('email') }}" name="email">
                            <div class="invalid-feedback">
                              {{-- Please enter email! --}}
                            </div>
                          </div>

                        <div class="mb-4">
                            <label for="validationPassword" class="form-label text-white"><b>Password</b></label>
                            <input type="password" class="form-control form-control-lg is-invalid" id="validationPassword" placeholder="Insert password..." name="password" minlength="8" required>
                            <div class="invalid-feedback">
                              {{-- Please enter email! --}}
                            </div>
                        </div>          
                    <div class="d-flex justify-content-around align-items-center mb-4">
                      <!-- Checkbox -->
                      {{-- <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                        <label class="form-check-label" for="form1Example3"> Remember me </label>
                      </div> --}}
                      <a href="{{ route('auth.login') }}">Login</a>
                    </div>
          
                    <!-- Submit button -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                    </div>          
                  </form>
                </div>
              </div>
            </div>
        </section>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>