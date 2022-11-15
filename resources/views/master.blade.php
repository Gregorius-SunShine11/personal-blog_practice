<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greg's Personal Blog</title>
</head>
<body>
<header>
 
    <h1>Gregorius' Personal Blog</h1>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="biodata">Biodata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="event">Event</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h2> @yield('judul_halaman') </h2>

    @yield('konten')

    <br/>
    <br/>
    <br/>
</body>
</html>