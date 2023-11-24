<div class="modal fade modal-fullscreen"  id="ModalEdit" >
    <div class="modal-dialog  modal-xl ">
        <div class="modal-content ">
            
                <div class="modal-header py-1" style="background-color:#0b440e;">
                    <h4 class="modal-title text-white">Les Candidatures</h4>
                  
                    <button type="button"  class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                      Fermer
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                       
 <div class="table-responsive">
                    <table id="dtBasicExampleR" class="table table-striped table-bordered table-hover" cellspacing="0"
                        width="100%">
                        <thead>
                            <tr>
                                 <th>Années d'expérience</th>
                                <th>Noms</th>
                                <th>Prenoms</th>
                                <th>Diplomes</th>
                                <th>Domaines d'Etudes</th>
                                <th>Domaines d'Activités</th>
                                <th>Telephones</th>
                                <th>Pays de Résidences</th>
                                <th>Emails</th>
                                <th>Curriculum</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($candidature as $item)
                                <tr>
                                    <td>{{ $item->exp_years ?? 'error système' }}</td>
                                    <td>{{ $item->nomCand ?? 'error système'}}</td>
                                    <td>{{ $item->prenomsCand }}</td>
                                    <td>{{ $item->DiplomeCand->nomDiplome ?? 'error système'}}</td>
                                    <td>{{ $item->DomaineEtude->nomEtude ?? 'error système'}}</td>
                                    <td>{{ $item->DomaineActivite->nomActivite ?? 'error système'}}</td>
                                    <td>{{ $item->telephone ?? 'error système'}}</td>
                                    <td>{{ $item->Pays->nomPays ?? 'error système'}}</td>
                                    <td>{{ $item->email  ?? 'error système'}}</td>
                                    <td> 
                                    <a href="{{ asset('img/' . $item->curriculum) }}"><i class="fa fa-file-pdf fa-3x" style="color: #ec270d;"></i></a>
                                     <span class="fw-bold">pdf</span>
                                    </td>
                                    <td>
                                        @if ($item->status == '')
                                            NQ
                                        @elseif ($item->status == 'QUALIFIE')
                                            <span class="text-success">QUALIFIE</span>
                                        @elseif ($item->status == 'REJETE')
                                        <span class="text-danger">REJETE</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class=" d-flex grid ">
                                            <div class="g-col-4">
                                                <form id="statusForm_{{ $item->id }}" action="{{ route('store', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="checkbox" id="statusCheckbox_{{ $item->id }}" value="ok" name="status" onchange="submitForm('{{ $item->id }}')" {{ $item->status == 'QUALIFIE' ? 'checked' : '' }}/>
                                                    <label for="statusCheckbox_{{ $item->id }}"></label>
                                                </form>
                                                <div class="g-col-4">
                                           
                                        </div>
                                            </div>
                                            <div class="g-col-4 ml-3">
                                                <div class="deletebtn" type="button" value="{{ $item->id }}">
                                                    <i class="fa fa-trash" style="color: #ec270d;"></i>
                                                </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                

</div>
                  

                </div>
           
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
