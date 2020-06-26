<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="message" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form id="refuse-form-message" method="POST" action="{{route('admin.refuse') }}">
                @csrf
                <div class="modal-body">
                    @guest
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            Vous n êtes pas connecté. Votre message sera modéré avant expédition.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endguest
                    <div class="form-group">
                        <label for="texte" class="text-danger">Entrez ici votre raison de refus</label>
                        <textarea class="form-control" style="border: 0;border-bottom: 1px solid red" id="refuse-message" name="message" rows="3" required>{{ old('texte', isset($value) ? $value : '') }}</textarea>
                        <div id="messageError" class="invalid-feedback"></div>
                    </div>

                    @guest
                        <div class="form-group">
                            <label for="email">Votre email pour vous contacter</label>
                            <input type="email" style="border: 0;border-bottom: 1px solid green" class="form-control" name=email id="email" required>
                            <div id="emailError" class="invalid-feedback"></div>
                        </div>
                    @endguest

                </div>
                <div class="modal-footer">
                    <div id="buttons">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-outline-success">
                            <i class="fas fa-spinner fa-pulse" id="send-refuse" style="display: none"></i>
                            <i class="fa fa-paper-plane" id="icon-refuse" ></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
