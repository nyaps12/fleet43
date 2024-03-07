<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    @include('layout.header')
</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="/" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/image.png" alt="" height="150" width="50">
                                    <span class="d-none d-lg-block">Fleet Management</span>
                                </a>
                            </div><!-- End Logo -->
                        <div class="card mb-3">

                            <div class="card-body">


                                <div class="pt-4 pb-2">
                                <div class="container">
                                    <a href="/" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-arrow-left"></i></a>
                                    </div>
                                    <h5 class="card-title text-center pb-0 fs-4">Driver Login</h5>
                                </div>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf

                                    <!-- @if($errors->any())
                                    @foreach($errors->all() as $error)
                                    <p style="color:red;">{{ $error }}</p>
                                    @endforeach
                                    @endif

                                    @if(Session::has('error'))
                                    <p style="color:red;">{{ Session::get('error') }}</p>
                                    @endif -->
                                    <div class="row justify-content-between d-flex">


                                        <div class="col-12">
                                            <label for="yourLogin" class="form-label">Email or Username</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="login" class="form-control" id="yourLogin" required>
                                                <div class="invalid-feedback">Please enter your email or username.</div>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>

                                    </div>
                                </form>
                                <div class="text-center">
                                    <br>
                                    <span class="text-muted">or</span>
                                    <div class="text-center pt-3">
                                        <img src="{{ url('assets/img/google.png') }}" class="img-fluid" width="25px" height="25px" alt="Google Logo">
                                        <a href="{{ url('auth/google') }}">Login using Google</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    @include('layout.footer')
    @include('layout.javascript')

</body>

</html>
