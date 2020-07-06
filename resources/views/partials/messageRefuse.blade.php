<div id="myModal-refuse-message" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title">Veilliez Préciser ici la raison:</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <input type="hidden" id="refuse-id">
                    <input type="hidden" id="refuse-user">
                    <input type="hidden" id="refuse-tamporary">
                    <input type="hidden" id="refuse-url" value="{{route('admin.refuse')}}">
                    <div class="form-group">
                        <label class="control-label col-sm-2 text-danger" for="name">Message:</label>
                        <div class="col-sm-10">
                            <textarea id="refuse-message" style="border: 0;border-bottom: 1px solid red"  class="form-control"></textarea>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" style="border: 0;border-bottom: 1px solid red"   class="btn actionBtn">
                        <span id="footer_action_button" class='glyphicon'>
                            <i id="refuse" class="fa fa-save"></i>
                            <i id="icon-refuse" class="fas fa-spinner fa-pulse" style="display: none"></i>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
