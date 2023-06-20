<div class="container px-0 px-md-auto">
        <div class="col-12 col-md-8 mx-auto">

            <div class="d-block d-md-none mt-0 mb-3" style="margin-left: 2.2rem;">
                <x-session />
            </div>

            <h1 class="text-center fs-1 mb-4">TASK</h1>

            <table class="table border mt-2">
                <thead class="table-dark border-1">
                    <tr>
                        <th scope="col" class="col-1 text-center"><i class="bi bi-patch-check"></i></th>
                        <th scope="col" class="col-2 text-center">DATA</th>
                        <th scope="col" class="col-10 col-md-6" style="padding-left: 0.8rem;">TASK</th>
                        <th scope="col" class="col-1 col-md-3"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tasks as $task)
                            <tr class="align-middle text-center @if ($task->status == true) opacity-75 @endif">
                                <th scope="row">
                                    <button wire:click="status({{$task}})" class="btn px-2 py-0"><i class="bi 
                                        @if ($task->status == false)
                                        bi-patch-check
                                        @elseif ($task->status == true)
                                        bi-patch-check-fill
                                        @endif  fs-2 text-success text-center"></i></button>
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

                                        @if ($task->status == false)
                                            <a href="{{route('tasks.edit', ['task' => $task['id']])}}"
                                                class="btn btn-warning me-md-1"><i class="bi bi-pencil-square"></i></a>
                                        @endif    

                                        <button wire:click="destroy({{$task}})" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button> 

                                    </div>
                                </td>
                            </tr>                            
                    @empty
                    <td colspan="12" class="ps-4 mt-4 text-dark text-opacity-50"><em>Nessun task trovato...</em></td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>