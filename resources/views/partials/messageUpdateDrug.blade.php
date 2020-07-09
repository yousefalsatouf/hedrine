<div id="myModal-modify-message" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title">Veuillez Préciser ici la raison:</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <input type="hidden" id="modif-id">
                    <input type="hidden" id="modif-user">
                    <input type="hidden" id="modif-temporary">
                    <input type="hidden" id="modif-url" value="{{route('admin.modifs_drug')}}">
                    <div class="form-group">
                        <label class="control-label col-sm-2 text-info" for="name">Message:</label>
                        <div class="col-sm-10">
                            <textarea id="modify-message" style="border: 0;border-bottom: 1px solid dodgerblue"  class="form-control"></textarea>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" style="border: 0;border-bottom: 1px solid dodgerblue"   class="btn actionBtn">
                        <span id="footer_action_button" class='glyphicon'>
                            <i id="modify" class="fa fa-save"></i>
                            <i id="icon-modify" class="fas fa-spinner fa-pulse" style="display: none"></i>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
