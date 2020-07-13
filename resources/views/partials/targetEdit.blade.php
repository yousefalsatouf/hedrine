<div id="myModal-targetEdit" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h4 class="modal-title">Veuillez entrez:</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="control-label col-sm-2 text-gray-dark" for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" style="border: 0;border-bottom: 1px solid gray"  class="form-control" id="fid" disabled>
                            </div>
                        </div>

                        <label class="control-label col-sm-2 text-gray-dark" for="name">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" style="border: 0;border-bottom: 1px solid gray"  class="form-control" id="name">
                        </div>
                        <label class="control-label col-sm-4 text-gray-dark" for="longname">Long Name:</label>
                        <div class="col-sm-10">
                            <input type="text" style="border: 0;border-bottom: 1px solid gray"  class="form-control" id="longname">
                        </div>
                        <label class="control-label col-sm-2 text-gray-dark" for="notes">Note:</label>
                        <div class="col-sm-10">
                            <input type="text" style="border: 0;border-bottom: 1px solid gray"  class="form-control" id="notes">
                        </div>
                    </div>

                </form>
                <div class="modal-footer">
                    <button type="button" style="border: 0;border-bottom: 1px solid gray" class="btn actionBtn">
                                <span id="footer_action_button" class='glyphicon'>
                                    <i id="edit" class="fa fa-save"></i>
                                    <i id="icon-edit" class="fas fa-spinner fa-pulse" style="display: none"></i>
                                </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="route">
    <input type="hidden" id="quick-edit-url" value="{{route('admin.targetEdit')}}">
</div>
{{--temmporary modal show--}}
<div id="myModal-drugEdit-temporary" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h4 class="modal-title">Veilliez entrez:</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="control-label col-sm-2 text-gray-dark" for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" style="border: 0;border-bottom: 1px solid gray"  class="form-control" id="tid" disabled>
                            </div>
                            <input type="hidden" style="border: 0;border-bottom: 1px solid gray"  class="form-control" id="temporary">
                        </div>
                        <label class="control-label col-sm-2 text-gray-dark" for="title">Original: </label>
                        <div class="col-sm-10">
                            <input type="text" style="border: 0;border-bottom: 1px solid gray"  class="form-control" id="original" disabled>
                        </div>
                        <label class="control-label col-sm-2 text-gray-dark title" for="title"></label>
                        <div class="col-sm-10">
                            <input type="text" style="border: 0;border-bottom: 1px solid gray"  class="form-control" id="title">
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" style="border: 0;border-bottom: 1px solid gray" class="btn actionBtn">
                                <span id="footer_action_button" class='glyphicon'>
                                    <i id="edit" class="fa fa-save"></i>
                                    <i id="icon-edit-t" class="fas fa-spinner fa-pulse" style="display: none"></i>
                                </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
