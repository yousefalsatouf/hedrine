<div class="table-responsive">
    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Sciname</th>
                <th scope="col">Date</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($modifierHerb as $herb)
                <tr id="{{ $herb->id }}">
                    <td>{{ $herb->name }}</td>
                    <td>{{ $herb->sciname }}</td>
                    <td class="date-id">{{ date_create($herb->created_at)->format('d-m-Y') }}</td>
                    <td class="float-right">
                        <a class="btn btn-primary btn-sm" href="#" target="_blank" role="button" data-toggle="tooltip" title="Voir la plante"><i class="fas fa-eye"></i></a>
                        @isset($edit)
                            <a class="btn btn-warning btn-sm" href="#" role="button" data-toggle="tooltip" title="Modifier la plante"><i class="fas fa-edit"></i></a>
                        @endisset
                        <i class="fas fa-spinner fa-pulse fa-lg" style="display: none"></i>
                        <a class="btn btn-danger btn-sm" href="#" role="button" data-id="{{ $herb->id }}" data-toggle="tooltip" title="Supprimer la plante"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-flex">
    <div class="mx-auto">

    </div>
</div>
