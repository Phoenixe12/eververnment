@extends('Admin.pages.layout.header')
@section('Activite')
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
                <h2 class="card-title text-white">Les Domaines d'activités</h2>
                <div class="card-tools">

                </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <a id="btnModalFormOrganisteur" href="#modalFormOrganisteur" class="btn text-white mb-4"
                    style="background-color:#0b440e;" data-toggle="modal" data-backdrop="static" data-keyboard="false"><i
                        class="fas fa-plus-circle"></i> <span>Ajouter une activité</span></a>
                <div class="dataTable-container">

                    <table id="dtBasicExample" class="table table-striped table-bordered table-hover" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th >Domaines d'activités</th>
                            <th >Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activite as $item)
                            <tr>
                                <td>{{ $item->nomActivite }}</td>
                                <td>
                                    <div class=" d-flex grid ">
                                        <div class="g-col-4">
                                            <div class="editbtn" type="button" value="{{ $item->id }}">
                                                <i class="fa fa-edit" style="color: #0b440e;"></i>
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
            <!-- /.card-body -->
        </div>

    </div>
    </div>


    @include('Admin.pages.File_Activite.deleteActivite')
    @include('Admin.pages.File_Activite.editActivite')
    @include('Admin.pages.File_Activite.addActivite')

    <!-- Modal-->
@endsection
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
            var id = $(this).attr('value');
            //alert('ID de l\'organisateur : ' + id);
            $('#ModalEdit').modal('show');
            $.ajax({
                type: "GET",
                url: "{{ route('Activite.edit', ':id') }}".replace(':id', id),
                success: function(response) {
                    console.log(response.Activite);
                    $('#nomActivite').val(response.Activite.nomActivite);
                    $('#id').val(response.Activite.id);

                }
            })
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
            "responsive": true,
            "scrollX": true,
            "scrollY": 200,
        });
        $('.dataTables_length').addClass('bs-select');
    });
</script>
<script>
    document.getElementById('imagePro').addEventListener('change', function(event) {
        var files = event.target.files; // Obtient les fichiers sélectionnés

        if (files.length > 5) {
            alert("Vous ne pouvez sélectionner que 5 images maximum.");
            event.target.value = null; // Réinitialise la valeur de l'input de fichier
            return;
        }

        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var fieldName = "image" + (i + 1) + "Pro";
            // Effectuez ici les opérations souhaitées pour chaque fichier, en utilisant le nom de champ approprié, par exemple :
            console.log("Nom du fichier:", file.name);
            console.log("Nom du champ:", fieldName);
        }
    });
</script>
@endsection


