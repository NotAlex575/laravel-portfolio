@extends("layouts/projects")

@section("title", "Progetto di: " . $project->cliente)

@section("contenuto")

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title mb-3">Nome Progetto: {{ $project->nome }}</h1>
            <h5 class="card-subtitle mb-4 text-muted">Cliente: {{ $project->cliente }}</h5>

            <p><strong>Data di inizio:</strong> {{ $project->periodo_inizio }}</p>

            <hr>

            <p class="card-text">{{ $project->riassunto }}</p>

        </div>
    </div>
    <a href="{{ route('projects.index') }}" class="btn btn-primary mt-3">
        Torna indietro alla lista dei progetti
    </a>
</div>

@endsection
