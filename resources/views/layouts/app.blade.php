<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Project | @yield('title')</title>
    {{-- Css only --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- With Javacript --}}
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
            body {
                text-align: center;
                font-family: 'Nunito', sans-serif;
            }

        .blog {
            padding: 5px;
            border-bottom: 1px solid lightgrey;
        }
        .small {
            color: red;
        }
        .ini {
            margin: 25px;
            text-align: center;
            display: flex;
            justify-content: center
        }


    </style>
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="{{ url('posts') }}" class="nav-link px-2 text-white">Blog Codepolitan</a></li>
            </ul>
                <div class="text-end">
                @if (Auth::check())
                <a href="{{ url('logout') }}" type="button" class="btn btn-outline-light me-2">Logout</a>
                @else
                <a href="{{ url('register') }}" type="button" class="btn btn-outline-light me-2">Register</a>
                <a href="{{ url('login') }}" type="button" class="btn btn-outline-light me-2">Login</a>
                @endif
            </div>
          </div>
        </div>
      </header>
      <div>
        @yield('content')
      </div>
      <hr>
        <!-- Begin page content -->
        <main class="flex-shrink-0">
          <div class="container">
            <h1 class="mt-5">Sticky footer</h1>
            <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS.</p>
            <p>Use <a href="/docs/5.0/examples/sticky-footer-navbar/">the sticky footer with a fixed navbar</a> if need be, too.</p>
          </div>
        </main>
        <footer class="footer mt-auto py-3 bg-light">
          <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
          </div>
        </footer>
</body>
</html>
