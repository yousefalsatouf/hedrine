<div id="myModal-quickEdit" class="modal fade" role="dialog">
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
                                <input type="text" style="border: 0;border-bottom: 1px solid gray"  class="form-control" id="fid" disabled>
                            </div>
                        </div>
                        <label class="control-label col-sm-2 text-gray-dark" for="name">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" style="border: 0;border-bottom: 1px solid gray"  class="form-control" id="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 text-gray-dark" for="sciname">Sciname:</label>
                        <div class="col-sm-10">
                            <input type="text" style="border: 0;border-bottom: 1px solid gray"  class="form-control" id="sciname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="herb_form">Formes de la plante</label>
                        @php
                            $herb_forms = \App\HerbForm::all();
                        @endphp
                        <select class="form-control herbForm selectpicker" id="forms" name="forms[]" multiple>
                            @foreach ($herb_forms as $form)
                                <option style="color:black" value="{{$form->id}}">{{ $form->name }}</option>
                            @endforeach
                        </select>
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
