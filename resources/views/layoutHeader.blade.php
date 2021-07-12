<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav me-auto">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Головна</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Контакти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/travel">Подорожі</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/history">Історія Подій</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/advantage">Переваги</a>
                    </li>
                </ul>
                <form>
                    <input class="form-control" type="text" placeholder="Пошук" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
    @yield('main_content')


</body>

</html>