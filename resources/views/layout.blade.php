<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>
        Project UTS WP
    </title>
</head>
<body>
    <header class="title text-expand-lg text-center text-light bg-primary">
        <h1>
            <br>
            HAPPY BOOK STORE
            <br>
        </h1>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary" role="navigation">
            <div class="container-xxl ">
                    <div class="collapse navbar-collapse justify-content-center">
                        <div class="navbar-nav ">
                            <a href="/" class="nav-item nav-link active">Home</a>
    
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle bg-primary border-primary" type="button" id="dropdownSleeve" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Category
                                </button>
                                <ul class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownSleeve">
                                    <li><a class="dropdown-item" href="/non-fiction">Non-Fiction</a></li>
                                    <li><a class="dropdown-item" href="#">Romance</a></li>
                                    <li><a class="dropdown-item" href="#">Historical</a></li>
                                    <li><a class="dropdown-item" href="#">Fiction</a></li>
                                    <li><a class="dropdown-item" href="#">Children</a></li>
                                    <li><a class="dropdown-item" href="#">Adult</a></li>
                                    <li><a class="dropdown-item" href="#">Education</a></li>
                                    <li><a class="dropdown-item" href="#">Mystery</a></li>
                                    <li><a class="dropdown-item" href="#">Lite-Novel</a></li>
                                    <li><a class="dropdown-item" href="#">Anthology</a></li>
                                </ul> 
                            </div>
                                <a href="/contact" class="nav-item nav-link active">Contact</a>                    
                        </div>
                    </div>
            </div>
        </nav>
    </header>
        
    <section class="container justify-content-center">
        @yield('content')
    </section>

    <footer>
        <h5 class="footer footer-expand-lg bg-primary text-light text-lg-center ">
            <br> <br>
            © Happy Book Store 2021
            <br> <br>
        </h5>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>