@extends("layouts/projects")

@section("title", "Crea Progetto")

@section("contenuto")
    <form action="{{ route("projects.store") }}" method="post" class="container my-5 p-4 border rounded shadow-sm bg-light">

    @csrf
            <h4 class="mb-4 text-center">Aggiungi un nuovo progetto!</h4>

            <div class="row g-3">
                <div class="col-12">
                    <label for="titolo_input" class="form-label">Titolo Progetto</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Inserisci il titolo del progetto qui" required>
                </div>

                <div class="col-md-6">
                    <label for="artista_input" class="form-label">Nome Cliente</label>
                    <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Inserisci qui il nome del cliente" required>
                </div>

                <div class="col-md-6">
                    <label for="periodo_inizio" class="form-label">Inizio data progetto</label>
                    <input type="datetime-local" class="form-control" id="periodo_inizio" name="periodo_inizio" required>
                </div>

               <div class="col-12">
                    <label for="riassunto" class="form-label">Spiegazione progetto</label>
                    <textarea 
                        class="form-control" 
                        name="riassunto" 
                        id="riassunto" 
                        rows="4" 
                        placeholder="Spiegazione progetto" required></textarea>
                </div>

                <div class="col-6 text-center mt-4">
                    <button type="submit" class="btn btn-primary px-5" name="action" value="save_show">
                        Invia e mostra il nuovo progetto
                    </button>
                </div>

                <div class="col-6 text-center mt-4">
                    <button type="submit" class="btn btn-secondary px-5" name="action" value="save_add">
                        Invia e aggiungi un altro progetto
                    </button>
                </div>
            </div>
        </form>
@endsection