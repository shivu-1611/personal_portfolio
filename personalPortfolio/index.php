<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <style>
        body{
            background-color: rosybrown;
            color:#EBE8DB;
        }
        .nav-logo{
            height: 50px;
            width: 100px;
        }

        .logo{
            height: 50px;
            background-image: url("logo_1.jpg");
            background-size: cover;
            width: 100%;
        }

        .border{
            border: 1 px solid transparent;
        }

        .border:hover{
            cursor: pointer;
        }
      </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary"  class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
           <div class="nav-logo border">
                <div class="logo"></div>
            </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>

</body>
</html>