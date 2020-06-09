@extends('dashboard.layout')

@section('content_dashboard')
    <div class="row justify-content-end" style="padding-bottom: 0.75rem">
        @if(Route::currentRouteName() === 'drugsFamily')
            <a class="btn btn-light" href="{{ route('drugsFamily.create') }}" role="button">Créer un nouveau DCI</a>
        @endif
    </div>

    <div class="col-12">
        <div class="card-body " style="background-color: #fff">
            <table id="example1" class="table table-striped table-sm">
                <thead>
                <tr>
                    <th> Name </th>
                    <th> Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($drugsFamily as $drug)
                    <tr>
                        <td>
                            <strong>{{$drug->name}}</strong>
                        </td>
                        <td style="width: 10rem">
                            <div>
                                <a class="btn btn-outline-success" href="{{ route('drugsFamily.edit',$drug->id) }}" role="button"><i class="fas fa-edit"></i></a> &nbsp; &nbsp;
                                <a class="btn btn-outline-danger" href="{{ route('drugsFamily.destroy.alert',$drug->id) }}" role="button"><i class="far fa-trash-alt"></i></a>
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
