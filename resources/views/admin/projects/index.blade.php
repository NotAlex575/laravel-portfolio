@extends("layouts/projects")

@section("title", "Tutti i progetti")

@section("contenuto")

    <table class="table table-striped table-bordered table-hover mt-4">
        <thead class="table-primary">
            <tr>
                <th>Nome Progetto</th>
                <th>Codice Usato</th>
                <th>Nome Cliente</th>
                <th>Iniziato il</th>
                <th>Link Progetto</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project["nome"] }}</td>
                    <td>{{ $project->code->code_name }}</td>
                    <td>{{ $project["cliente"] }}</td>
                    <td>{{ $project["periodo_inizio"] }}</td>
                    <td><a class="btn btn-primary" href="{{ route("admin.projects.show", $project->id) }}">Link al Progetto</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-outline-success" href="{{ route("admin.projects.create") }}">Crea nuovo progetto</a>

@endsection