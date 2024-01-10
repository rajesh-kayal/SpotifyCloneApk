<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music App Sign Up</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/signup.css')}}">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2 class="text-center text-light mb-4"><i class="bi bi-earbuds"></i> &nbsp;Sign Up for the Music App</h2>
                <form method="post" action="{{url('/insert')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                   
                        <label class="form-label">Gender</label>
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                            <span class="text-white"><i class="bi bi-gender-male"></i></span>
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                            <span class="text-white"><i class="bi bi-gender-female"></i></span>
                            <input class="form-check-input" type="radio" name="gender" id="other" value="other" required>
                            <span class="text-white"><i class="bi bi-person-fill"></i></span>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="agreeTerms" name="agreeTerms" required>
                            <label class="form-check-label" for="agreeTerms">
                                I agree to the <a href="#">Terms and Conditions</a>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </form>
                <p class="tagline">Discover and Enjoy Your Favorite Music</p>
                <a href="{{url('/signin')}}" class="login-btn">Already have an account? Log in</a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
        @if(session('success'))
            <script>
                alert('You have successfully signed up!');
            </script>
        @endif

        @if(session('unsuccess'))
            <script>
                alert('Signup was unsuccessful. Please try again.');
            </script>
        @endif

</body>
</html>
