@extends("layouts/projects")

@section("title", "Modifica Progetto")

@section("contenuto")
    <form action="{{ route('admin.projects.update', $project->id) }}"method="POST" class="container my-5 p-4 border rounded shadow-sm bg-light">
    @csrf
    @method("PUT")

            <h4 class="mb-4 text-center">Modifica il progetto!</h4>

            <div class="row g-3">
                <div class="col-12">
                    <label for="titolo_input" class="form-label">Titolo Progetto</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $project->nome }}" required>
                </div>

                <div class="col-md-6">
                    <label for="artista_input" class="form-label">Nome Cliente</label>
                    <input type="text" class="form-control" id="cliente" name="cliente" value="{{ $project->cliente }}" required>
                </div>

                <div class="col-md-6">
                    <label for="periodo_inizio" class="form-label">Inizio data progetto</label>
                    <input type="datetime-local" class="form-control" id="periodo_inizio" name="periodo_inizio" value="{{ $project->periodo_inizio }}" required>
                </div>

               <div class="col-12">
                    <label for="riassunto" class="form-label">Spiegazione progetto</label>
                    <textarea 
                        class="form-control" 
                        name="riassunto" 
                        id="riassunto" 
                        rows="4" 
                        placeholder="Spiegazione progetto" required>{{ $project->riassunto }}</textarea>
                </div>

                <div class="col-12 text-center mt-4">
                    <button type="submit" class="btn btn-primary px-5" name="action">
                        Modifica il contenuto di questo progetto
                    </button>
                </div>
            </div>
        </form>
@endsection