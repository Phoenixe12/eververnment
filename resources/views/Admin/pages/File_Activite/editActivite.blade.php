<div class="modal fade"  id="ModalEdit" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content ">
            <form  action="{{ route('update-activite') }}" data-toggle="validator" role="form" method="POST"  enctype="multipart/form-data">
               @csrf
               @method('PUT')
                <div class="modal-header py-1" style="background-color:#0b440e;">
                    <h4 class="modal-title text-white">Modification</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row ">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="control-label" for="nomActivite">Nom domaine d'activité </label>
                                    <input type="text" class="form-control" value="" id="nomActivite"
                                        name="nomActivite" style=" height:43px;" required />
                                    <input type="hidden" class="form-control" id="id" name="id"
                                        required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger   pull-left"
                            data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn  btn-primary" id="btnFormEnreg">Enregistrer</button>
                    </div>

                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
