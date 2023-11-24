<div class="modal fade" id="modalFormOrganisteur">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content ">
            <form id="formOrg" action="{{ route('Etude.store') }}" data-toggle="validator" role="form" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-header py-1" style="background-color:#0b440e;">
                    <h4 class="modal-title text-white">Domaine d'etude</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row ">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="control-label" for="nomEtude">Domaine d'étude  </label>
                                    <input type="text" class="form-control" value="" id="nomEtude"
                                        name="nomEtude" style=" height:43px;" required />
                                    <!--input type="hidden" class="form-control" id="reference" name="codeProg"
                                        required /-->
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
