@extends('dashboard.layout')

@section('content_dashboard')
    <div class="container-fluid" id="Mymodal">
        <div class="card">
            <div class="card-body">
                <form class=" justify-content-center" role="form" action="{{route('sendDenyingMsg', $id)}}" method="GET">
                    <div class="modal-header">
                        <h4 class="modal-title text-dark">Veilliez Ecrire votre message à l'utlisateur:</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <textarea name="msg" required cols="62" rows="8" placeholder="Message ..."></textarea>
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
