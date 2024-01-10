<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Music App Sign In </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/signin.css')}}">
</head>
<body>
    @if(session()->has('message'))
        @if(session()->get('message') == 'logout')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                You have successfully logged out!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    @endif

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2 class="text-center text-light mb-4"><i class="bi bi-earbuds"></i> &nbsp;Sign In for the Music App</h2>
                <form method="post" action="{{url('/login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </form>
                <p class="tagline">Discover and Enjoy Your Favorite Music</p>
                <a href="{{url('/')}}" class="signup-btn">Don't have an account? Sign up</a>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
        @if(session('success'))
            <script>
                alert('You have successfully signed up!');
            </script>
        @endif

    @if(session('notuser'))
        <script>
            alert('Users Dose not exist!');
        </script>
    @elseif(session('wrong'))
        <script>
            alert('Opps! wrong credentials!');
        </script>
    @endif

</body>
</html>