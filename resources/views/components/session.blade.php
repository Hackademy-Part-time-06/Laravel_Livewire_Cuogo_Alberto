@if (session('success')) 
    <div id="sessionSuccess" class="sessionSuccess justify-content-center" style="display: flex; margin-left: -2.2rem;">
        <div class="text-center bg-success bg-opacity-25 border border-3 border-success rounded text-success px-3 py-2 fs-5 fw-semibold">{{session('success')}}</div> 
    </div>
@elseif (session('edit'))
    <div id="sessionEdit" class="justify-content-center" style="display: flex; margin-left: -2.2rem;">
        <div class="text-center bg-warning bg-opacity-25 border border-3 border-warning rounded text-warning px-3 py-2 fs-5 fw-semibold">{{session('edit')}}</div> 
    </div>
@elseif (session('delete'))
    <div id="sessionDelete" class="justify-content-center" style="display: flex; margin-left: -2.2rem;">
        <div class="text-center bg-danger bg-opacity-25 border border-3 border-danger rounded text-danger px-3 py-2 fs-5 fw-semibold">{{session('delete')}}</div> 
    </div>
@endif