<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.24.0/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" rel="stylesheet">
        <title>Spotify - Your favourite music is here</title>
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    </head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('/images/logo.png')}}" alt="Spotify" width="30" height="30" class="d-inline-block align-text-top">
                Spotify
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownSongs" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Songs
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownSongs">
                            <li><a class="dropdown-item" href="#">Trending Now</a></li>
                            <li><a class="dropdown-item" href="#">Old Songs</a></li>
                            <li><a class="dropdown-item" href="#">New Songs</a></li>
                            <li><a class="dropdown-item" href="#">Moods & Genre</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Top Albums</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Top Artists</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Top Playlists</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Podcast</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
                <form class="d-flex me-2 search-form">
                    <div class="input-group">
                        <input class="form-control search-input" type="search" placeholder="Search Your Favorite Song..." aria-label="Search" />
                        <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
                <div class="text-light me-2">Welcome <span class="text-info"><i class="bi bi-person-circle"></i>{{session('USER')}}</span></div>
                <a class="btn btn-sm btn-outline-danger" href="{{url('/logout')}}" title="{{session('USER')}}"><i class="bi bi-box-arrow-left"></i> Logout</a>
        </div>
    </nav>

    <div class="container">
        <div class="songList">
            <h1>Best of NCS - No Copyright Sounds</h1>
            <div class="songItemContainer">
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">05:34 <i id="0" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">05:34 <i id="1" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">05:34 <i id="2" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">05:34 <i id="3" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">05:34 <i id="4" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">05:34 <i id="5" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">05:34 <i id="6" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">05:34 <i id="7" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">05:34 <i id="8" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
                <div class="songItem">
                    <img alt="1">
                    <span class="songName">Let me Love You</span>
                    <span class="songlistplay"><span class="timestamp">05:34 <i id="9" class="far songItemPlay fa-play-circle"></i> </span></span>
                </div>
            </div>
        </div>
    <div class="songBanner">
    <div class="songTimer">
        <span id="current-time">00:00</span>
    </div>
    <i class="far fa-2x songBannerPlay" id="songBannerPlay"></i>
</div>

    </div>

    <div class="bottom">
        <input type="range" name="range" id="myProgressBar" min="0" value="0" max="100">
        <div class="icons">
            <!-- fontawesome icons -->
            <i class="fas fa-3x fa-step-backward" id="previous"></i>
            <i class="far fa-3x fa-play-circle" id="masterPlay"></i>
            <i class="fas fa-3x fa-step-forward" id="next"></i> 
        </div>
        <div class="songInfo">
            <img src="{{asset('/images/playing.gif')}}" width="42px" alt="" id="gif"> <span id="masterSongName">Warriyo - Mortals [NCS Release]</span>
        </div>
    </div>
    <script src="{{asset('/js/script.js')}}"></script>
    <script src="https://kit.fontawesome.com/26504e4a1f.js" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    @if(session('login'))
            <script>
                alert('Login successfully');
            </script>
        @endif
        @if(empty(session('USER')))
            <script>
                alert("You can't access this page. Please login first.");
                 window.location.href = "{{ url('/signin') }}";
            </script>
        @endif
</body>
</html>
<script>
    
    let startTime = Date.now();

function formatTime(timeInSeconds) {
  const minutes = Math.floor(timeInSeconds / 60).toString().padStart(2, '0');
  const seconds = (timeInSeconds % 60).toString().padStart(2, '0');
  return `${minutes}:${seconds}`;
}

function updateTimer() {
  const currentTime = Date.now();
  const elapsedTimeInSeconds = Math.floor((currentTime - startTime) / 1000);
  document.getElementById('current-time').innerText = formatTime(elapsedTimeInSeconds);
}

setInterval(updateTimer, 1000);

</script>