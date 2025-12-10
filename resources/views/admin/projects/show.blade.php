@extends("layouts/projects")

@section("title", "Progetto di: " . $project->cliente)

@section("contenuto")



<div class="container mt-5">

    <div class="card shadow-lg border-0">
        <div class="card-body p-4">

            <h1 class="card-title mb-3">Nome Progetto: {{ $project->nome }}</h1>
            <h4 class="card-subtitle mb-4 text-muted">{{ $project->code->code_name }}</h4>

            <small>
                @if (count($project->technologies) > 0)
                    @foreach ($project->technologies as $technology)
                        <span class="badge" style="background-color: {{ $technology->color }}">
                            {{ $technology->name }}
                        </span>
                    @endforeach
                @endif
            </small>

            <h5 class="card-subtitle mt-2 mb-4 text-muted">Cliente: {{ $project->cliente }}</h5>

            <p class="mb-3">
                <strong>Data di inizio:</strong> {{ $project->periodo_inizio }}
            </p>

            <hr>

            <p class="card-text fs-5">{{ $project->riassunto }}</p>

        </div>

        <div class="border-top px-4 pb-4 pt-3">
            <div class="d-flex justify-content-center">
                <div class="d-flex gap-3">
                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning px-4">
                        Modifica il progetto
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Elimina definitivamente
                    </button>

                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary mt-4 px-4">
        Torna indietro alla lista dei progetti
    </a>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Elimina progetto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Sei sicuro di voler eliminare questo progetto??
            </div>
            <div class="modal-footer">
                <form action="{{ route("admin.projects.destroy", $project) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="ELIMINA DEFINITIVAMENTE!">
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            </div>
            </div>
        </div>
    </div>

</div>

@endsection
