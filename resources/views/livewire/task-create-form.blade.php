<div class="container px-5">
    <div class=" rounded-3 py-4 px-4 px-md-5 mb-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">

                <form wire:submit.prevent="store">
                    @csrf
                    @if (session()->has('task'))
                    <div class="alert alert-success">
                        {{ session('task') }}
                    </div>
                    @endif
                    <div class="form-floating mb-3">
                        <input class="form-control" id="title" wire:model="title" type="text"
                            value="{{ old('title') }}" placeholder="Title Task">
                        <label for="title">Task's Title</label>
                        @error('title')
                            <span class="error text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="description" wire:model="description" type="text"
                            value="{{ old('description') }}" placeholder="Description Task">
                        <label for="description">Task's Description</label>
                        @error('description')
                            <span class="error text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div>
                        <button class="btn btn-primary btn-lg p-2 w-100" type="submit">Add Task<i
                                class="bi bi-bookmark-plus ms-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
