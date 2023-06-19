<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <h1 class="text-center mb-3">DA FARE</h1>

            <table class="table border mt-2">
                <thead class="table-dark border-1">
                    <tr>
                        <th scope="col" class="col-2 text-center"><i class="bi bi-patch-check"></i></th>
                        <th scope="col" class="col-2 text-center">DATA</th>
                        <th scope="col" class="col-6" style="padding-left: 0.8rem;">TASK</th>
                        <th scope="col" class="col-2"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tasks as $task)
                        @if ($task->status == false)
                            <tr class="align-middle text-center">
                                <th scope="row">
                                    <button wire:click="status({{$task}})" class="btn px-2 py-0"><i class="bi bi-patch-check fs-2 text-success"></i></button>
                                </th>
                                <td  class="text-center fw-normal">
                                    {{ isset($task->created_at) ? $task->created_at->format('d-m-y') : 'unknown' }}
                                </td>
                                <td class="fw-semibold">
                                    <div class="rounded fit-content px-2 py-1 
                                        @if ($task->level == 'Urgente') bg-danger text-white 
                                        @elseif ($task->level == 'Normale') bg-warning text-dark
                                        @elseif ($task->level == 'Facile') bg-success text-white                                    
                                        @endif">{{$task['title']}}
                                    </div>
                                </td>
                                <td>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a href="{{route('tasks.show', ['task' => $task['id']])}}"
                                            class="btn btn-primary me-md-1"><i class="bi bi-search"></i></a>

                                        <a href="{{route('tasks.edit', ['task' => $task['id']])}}"
                                            class="btn btn-warning me-md-1"><i class="bi bi-pencil-square"></i></a>

                                        <button wire:click="destroy({{$task}})" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button> 

                                    </div>
                                </td>
                            </tr>                            
                        @endif
                    @empty
                    <td colspan="12" class="ps-3 mt-4 text-dark text-opacity-50"><em>Nessun tasks da fare trovato...</em></td>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="col-6">
            <h1 class="text-center mb-3">COMPLETATI</h1>

            <table class="table border mt-2">
                <thead class="table-dark border-1">
                    <tr>
                        <th scope="col" class="col-2 text-center"><i class="bi bi-patch-check"></i></th>
                        <th scope="col" class="col-2 text-center">DATA</th>
                        <th scope="col" class="col-6" style="padding-left: 0.8rem;">TASK</th>
                        <th scope="col" class="col-2"></th>
                    </tr>
                </thead>
                <tbody class="opacity-75">
                    @forelse ($tasks as $task)
                        @if ($task->status == true)
                            <tr class="align-middle text-center">
                                <th scope="row">
                                    <button wire:click="status({{$task}})" class="btn px-2 py-0"><i class="bi bi-patch-check-fill fs-2 text-success text-center"></i></button>
                                </th>
                                <td  class="text-center fw-normal">
                                    {{ isset($task->created_at) ? $task->created_at->format('d-m-y') : 'unknown' }}
                                </td>
                                <td class="fw-semibold">
                                    <div class="rounded fit-content px-2 py-1 
                                        @if ($task->level == 'Urgente') bg-danger text-white 
                                        @elseif ($task->level == 'Normale') bg-warning text-dark
                                        @elseif ($task->level == 'Facile') bg-success text-white                                    
                                        @endif">{{$task['title']}}
                                    </div>    
                                </td>
                                <td>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a href="{{route('tasks.show', ['task' => $task['id']])}}"
                                            class="btn btn-primary me-md-1"><i class="bi bi-search"></i></a>

                                        <button wire:click="destroy({{$task}})" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button> 

                                    </div>
                                </td>
                            </tr>                            
                        @endif
                    @empty
                    <td colspan="12" class="ps-3 mt-4 text-dark text-opacity-75"><em>Nessun tasks completato trovato...</em></td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>