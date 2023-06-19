<x-main>
    <x-slot name="title">TO DO LIST | {{ $task->title }} </x-slot>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <ul class="list-group list-group-horizontal align-items-center my-4 shadow">

                    <li class="list-group-item w-10 py-3 px-2 border-0 text-center">
                        @if ($task->status == false)
                            <i class="bi bi-x-circle fs-1 text-danger"></i>
                        @elseif ($task->status == true)
                            <i class="bi bi-check-circle fs-1 text-success"></i>
                        @endif
                    </li>

                    <li class="list-group-item w-80 py-3 px-5 border-0 d-flex justify-content-center fs-3 fw-semibold">
                        <div class="fit-content rounded px-5 py-1
                        @if ($task->level == 'Urgente') bg-danger text-white 
                        @elseif ($task->level == 'Normale') bg-warning text-dark
                        @elseif ($task->level == 'Facile') bg-success text-white                                    
                        @endif">{{$task->title}}
                        </div>
                    </li>

                    <li class="list-group-item w-10 py-3 px-2 border-0 text-center">
                        @if ($task->status == false)
                            <i class="bi bi-x-circle fs-1 text-danger"></i>
                        @elseif ($task->status == true)
                            <i class="bi bi-check-circle fs-1 text-success"></i>
                        @endif
                    </li>

                </ul>
            </div>
        </div>

        <div class="row g-0 justify-content-center">
            <div class="col-1 d-flex justify-content-center align-items-center">
                @if ($task->id > 1)
                    <a href="{{route('tasks.show', ['task' => $task['id']-1])}}">
                        <i class="bi bi-arrow-left-circle fs-1 text-secondary"></i></a>
                @endif
            </div>

            <div class="col-9">
                <ul class="list-group my-4 shadow">

                    <li class="list-group-item w-75 py-4 px-5 border-0 text-justify min-vh-50">
                        <h4 class="fw-bold mt-2 mb-3">Descrizione</h4>
                        <p class="text-justify mt-3 text-dark text-opacity-50">
                            <em>{{ $task->description ?? 'Nessuna descrizione trovata...' }}</em>
                        </p>
                    </li>

                </ul>
            </div>
            
            <div class="col-1 d-flex justify-content-center align-items-center">
                @if ($task->id < $count)
                <a href="{{route('tasks.show', ['task' => $task['id']+1])}}">
                    <i class="bi bi-arrow-right-circle fs-1 text-secondary"></i></a>
                @endif
            </div>
        </div>


    </div>
    </div>

</x-main>
