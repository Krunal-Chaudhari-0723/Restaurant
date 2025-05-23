<html>
   <head>
     <title>Resturant App</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
                    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand text-light" href="/">Resto</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active  text-light" href="/">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link  text-light" href="/list">List</a>
                <a class="nav-link  text-light" href="/add">Add Restaurant</a>   
                <a class="nav-link  text-light" >Search</a>
                 <a class="nav-link  text-light" href="/register">Register</a>
           
                @if (Session::get('user'))
                    <a href=" nav-link text-light" href="#">Welcome.{{Session::get('user')}}</a>
                @else
                    <a class="nav-link  text-light" >Login</a>
                    <a class="nav-link  text-light" href="/register">Register</a>
                @endif
            </div>
            </div>
            </nav>
        </header>
        <div class="container">
            @yield('content')
        </div>
        <footer>
            {{-- Copy Right By Restaurnat App @Krunal Chaudhari --}}
        </footer>
    </body>
</html>