<div class="modal fade" id="messageUpdateModal" tabindex="-1" role="dialog" aria-labelledby="message" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form id="message-form-update" data-url="{{ route('admin.modifs') }}">
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

                    <input id="modifs-id" name="id" type="hidden" value="{{ isset($herb) ? $herb->id : '' }}">

                    <div class="form-group">
                        <label for="texte" class="text-success">Précisez ici les choses à modifier</label>
                        <textarea style="border: 0;border-bottom: 1px solid green" class="form-control" id="modifs-message" name="message" rows="3" required>{{ old('texte', isset($value) ? $value : '') }}</textarea>
                        <div id="messageError" class="invalid-feedback"></div>
                    </div>

                    @guest
                        <div class="form-group">
                            <label for="email">Votre email pour vous contacter</label>
                            <input type="email" class="form-control" name=email id="email" required>
                            <div id="emailError" class="invalid-feedback"></div>
                        </div>
                    @endguest

                </div>
                <div class="modal-footer">
                    <div id="buttons">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-outline-success"><i class="fa fa-paper-plane"></i></button>
                    </div>
                    <i id="icon" class="fas fa-spinner fa-pulse" style="display: none"></i>
                </div>
            </form>
        </div>
    </div>
</div>
