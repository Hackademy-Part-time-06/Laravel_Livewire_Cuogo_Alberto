<div class="container px-0 px-md-auto">
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
                            value="{{ old('title') }}" placeholder="Nome Task">
                        <label for="title">Nome</label>
                        @error('title')
                            <span class="error text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" id="level" wire:model="level">
                            <option value="Urgente">Urgente</option>
                            <option value="Normale">Normale</option>
                            <option value="Facile">Facile</option>
                        </select>
                        <label for="level">Priorità</label>
                        @error('level')
                            <span class="error text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form mb-3">
                        <textarea class="form-control" id="description" name="description"
                        value="{{ old('description') }}" placeholder="Descrizione" rows="8"></textarea>
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
                        <button class="btn btn-primary btn-lg p-2 w-100 fw-semibold" type="submit">CREA TASK<i
                                class="bi bi-plus-circle ms-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
