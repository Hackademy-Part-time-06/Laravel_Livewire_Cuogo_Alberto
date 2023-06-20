<nav class="navbar navbar-expand-lg navbar-dark bg-black sticky-top justify-content-center">
    <div class="container px-5 align-items-center">
        <a class="navbar-brand col-12 col-md-3 d-flex justify-content-center align-items-center my-3 my-md-auto" href="{{ route('tasks.index') }}"><img src="\img\list.png" alt=""
                height="45rem"> To Do List</a>

        <div class="col-12 col-md-6 d-none d-md-block">
            <x-session />
        </div>



        <div class="navbar-item col-12 col-md-3 d-flex justify-content-center">
            <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="btn btn-primary px-4 fw-semibold @if (Route::currentRouteName() == route('tasks.create')) active @endif"
                            href="{{ route('tasks.create') }}">CREA TASK <i class="bi bi-plus-circle ms-1"></i>
                        </a>
                    </li>          
            </ul>
        </div>
    </div>
</nav>