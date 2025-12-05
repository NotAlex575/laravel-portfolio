@extends("layouts/projects")

@section("title", "Progetto di: " . $project->cliente)

@section("contenuto")

<div class="container mt-5">

    <div class="card shadow-lg border-0">
        <div class="card-body p-4">

            <h1 class="card-title mb-3">Nome Progetto: {{ $project->nome }}</h1>
            <h5 class="card-subtitle mb-4 text-muted">Cliente: {{ $project->cliente }}</h5>

            <p class="mb-3">
                <strong>Data di inizio:</strong> {{ $project->periodo_inizio }}
            </p>

            <hr>

            <p class="card-text fs-5">{{ $project->riassunto }}</p>

        </div>

        <div class="border-top px-4 pb-4 pt-3">
            <div class="d-flex justify-content-center">
                <div class="d-flex gap-3">
                    <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning px-4">
                        Modifica il progetto
                    </a>
                    <a href="{{ route('projects.edit', $project) }}" class="btn btn-danger px-4">
                        Elimina il progetto
                    </a>

                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('projects.index') }}" class="btn btn-secondary mt-4 px-4">
        Torna indietro alla lista dei progetti
    </a>

</div>

@endsection
