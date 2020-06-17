@extends('dashboard.layout')

@section('content_dashboard')
    <div class="row justify-content-end" style="padding-bottom: 0.75rem">
        @if(Route::currentRouteName() === 'herb_form.index')
            <a class="btn btn-light" href="{{ route('herb_form.create') }}" role="button">Créer une nouvelle forme de plante</a>
        @endif
    </div>

    <div class="col-12">
        <div class="card-body " style="background-color: #fff">
            <table id="example1" class="table tablée-striped table-sm">
                <thead>
                <tr class="text-center">
                    <th> Name </th>
                    <th> Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($herb_forms as $herb_form)
                    <tr class="text-center">
                        <td>
                            <strong>{{$herb_form->name}}</strong>
                        </td>
                        <td style="width: 10rem">
                            <div>
                                <a class="btn btn-outline-success align-self-center p-2" href="{{ route('herb_form.edit',$herb_form->id) }}" role="button">Edit</a> 
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('dashboard-js')

    <script>
        $(function () {

            $('#example1').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "language":
                    {
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                    }
            });
        });
    </script>
@endsection
