@extends('dashboard.layout')

@section('content_dashboard')
    <div class="container-fluid" id="Mymodal">
        <div class="card">
            <div class="card-body">
                <form class=" justify-content-center" role="form" action="{{route('sendDenyingMsg', $id)}}" method="POST">
                    @csrf
                    <div class="modal-header bg-success">
                        <h5 class="modal-title text-dark">Veilliez Ecrire votre message à l'utlisateur:</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="w-100">
                                <textarea name="msg" class="w-100" required  placeholder="Message ..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-success"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
