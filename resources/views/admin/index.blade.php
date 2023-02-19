<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Hotel - Admin</title>
    @vite('resources/js/app.js')
    @livewireStyles
</head>
<body>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">The Hotel</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="#">Sign out</a>
        </div>
    </div>
</header>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="/admin" class="nav-link {{ Route::is('admin-home') ? 'active' : 'link-dark' }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/admin/reservations" class="nav-link {{ Route::is('admin-reservations') ? 'active' : 'link-dark' }}">
                            Reservations
                        </a>
                    </li>
                    <li>
                        <a href="/admin/rooms" class="nav-link {{ Route::is('admin-rooms') ? 'active' : 'link-dark' }}">
                            Rooms
                        </a>
                    </li>
                    <li>
                        <a href="/admin/room-types/update" class="nav-link {{ Route::is('admin-room-types-update-get') ? 'active' : 'link-dark' }}">
                            Update Price
                        </a>
                    </li>
                    <li>
                        <a href="/admin/offers" class="nav-link {{ Route::is('admin-offers') ? 'active' : 'link-dark' }}">
                            Offers
                        </a>
                    </li>
                    <li>
                        <a href="/admin/news" class="nav-link {{ Route::is('admin-news') ? 'active' : 'link-dark' }}">
                            News
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                @yield('content')
            </div>
        </main>
    </div>
</div>
@livewireScripts
</body>

</html>
