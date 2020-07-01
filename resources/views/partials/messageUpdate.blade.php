<div id="myModal-modify-message" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">Veilliez Préciser ici la raison:</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <input type="hidden" id="modif-id">
                    <input type="hidden" id="modif-user">
                    <div class="form-group">
                        <label class="control-label col-sm-2 text-warning" for="name">Message:</label>
                        <div class="col-sm-10">
                            <textarea id="modify-message" style="border: 0;border-bottom: 1px solid orange"  class="form-control"></textarea>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" style="border: 0;border-bottom: 1px solid orange"   class="btn actionBtn">
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
