<nav class="navbar navbar-expand-lg navbar-dark bg-black sticky-top">
    <div class="container px-5 align-items-center">
        <a class="navbar-brand" href="{{ route('tasks.index') }}"><img src="\img\list.png" alt=""
                height="45rem"> To Do List</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-3">
                        <a class="btn btn-primary px-4 fw-semibold @if (Route::currentRouteName() == route('tasks.create')) active @endif"
                            href="{{ route('tasks.create') }}">CREA TASK <i class="bi bi-plus-circle ms-1"></i>
                        </a>
                    </li>          
            </ul>
        </div>
    </div>
</nav>