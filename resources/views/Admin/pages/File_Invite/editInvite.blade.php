<div class="modal fade" id="ModalEdit">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content ">
            <form action="{{ route('update-Invite') }}" data-toggle="validator" role="form" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header py-1" style="background-color:#0b3544;">
                    <h4 class="modal-title text-white">Modification</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row ">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="nomInv">Nom Invité </label>
                                    <input type="text" class="form-control" id="nomInv" name="nomInv"
                                        style=" height:43px;" required />
                                    <input type="hidden" class="form-control" id="id" value=""
                                        name="id" style=" height:43px;" required />
                                        <input type="hidden" class="form-control" id="codeInv" value=""
                                        name="codeInv" style=" height:43px;" required />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="emailInv">Email</label>
                                    <input type="email" class="form-control" id="emailInv" name="emailInv"
                                        style=" height:43px;" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="control-label" for="telephoneInv">N° Téléphone </label>
                                    <input type="text" class="form-control" id="telephoneInv" name="telephoneInv"  style=" height:43px;"  required />
                                </div>
                            </div>


                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="control-label" for="nbreInv">Nombre d'Invité</label>
                                    <input type="text" class="form-control" id="nbreInv" name="nbreInv"  style=" height:43px;" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="control-label" for="evn_id">Evenement</label>
                                    <select class="form-control" id="evn_id" value="" name="evn_id"
                                        style=" height:43px;" required>
                                        <option selected>Choisir un nom</option>
                                        @foreach ($Eve as $item)
                                            <option value="{{ $item->id }}">{{ $item->nomEvn }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="control-label" for="ivn_table_id">Nom Table</label>
                                    <select class="form-control" id="ivn_table_id" value="" name="ivn_table_id"
                                        style=" height:43px;" required>
                                        <option selected>Choisir un nom</option>
                                        @foreach ($Tables as $item)
                                            <option value="{{ $item->id }}">{{ $item->nomTableInv }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="control-label" for="enfant">Enfant</label>
                                    <input type="number" class="form-control" id="enfant" name="enfant"  style=" height:43px;" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger   pull-left" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn  btn-primary" id="btnFormEnreg">Modifier</button>
                    </div>

                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
