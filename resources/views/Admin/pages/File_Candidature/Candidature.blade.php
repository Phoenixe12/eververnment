@extends('Admin.pages.layout.header')
@section('Candidature')
<style>
.modal-fullscreen {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1050;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-fullscreen .modal-dialog {
    margin: auto;
    max-width: 100%;
    height: 100%;
}</style>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        @include('sweetalert::alert')
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="container mb-3 ">
        <div class="card">
            <div class="card-header" style="background-color:#0b440e;">
                <h2 class="card-title text-white fw-bolder">Les Candidatures</h2>
                <div class="card-tools">
                     <div class="editbtn  btn btn-warning"  type="button" >
                     Fullscreen
                          <i class="fa fa-expand" style="color: #fff;"></i>
                     </div>
                     
                </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">

                

                    <table id="dtBasicExample" class="table table-striped table-bordered table-hover" cellspacing="0"
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
                                                <form id="statusForm_{{ $item->id }}" action="{{ route('stores', $item->id) }}" method="POST" enctype="multipart/form-data">
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
            <!-- /.card-body -->
        </div>

    </div>
    </div>

  @include('Admin.pages.File_Candidature.editCandidature')
    @include('Admin.pages.File_Candidature.deleteCandidature')

    <!-- Modal-->
@endsection
<script>
    function submitForm(itemId) {
        $('#statusForm_' + itemId).submit();
    }
</script>
@section('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.deletebtn', function() {
                var iddelte = $(this).attr('value');
                //alert('ID de l\'organisateur : ' + id);
                $('#ModalDelete').modal('show');
                $('#deleteing_id').val(iddelte);
            });

            $(document).on('click', '.editbtn', function() {
                
                $('#ModalEdit').modal('show');

            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#dtBasicExample').DataTable({
                "processing": true,
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": false,
                "scrollX": true,
                "scrollY": 300,
            });
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
     <script>
        $(document).ready(function() {
            $('#dtBasicExampleR').DataTable();
        });
    </script>
@endsection



























