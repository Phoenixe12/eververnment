@extends('Admin.pages.layout.header')
@section('Diplome')
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
                <h2 class="card-title text-white fw-bolder">Diplôme</h2>
                <div class="card-tools">

                </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <a id="btnModalFormOrganisteur" href="#modalFormOrganisteur" class="btn text-white mb-4"
                    style="background-color:#0b440e;" data-toggle="modal" data-backdrop="static" data-keyboard="false"><i
                        class="fas fa-plus-circle"></i> <span>Ajouter un diplôme</span></a>
                <div class="dataTable-container">
                    <table id="dtBasicExample" class="table table-striped table-bordered table-hover" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th>Nom Diplômes</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($diplome as $item)
                            <tr>
                                <td>{{ $item->nomDiplome }}</td>
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


    @include('Admin.pages.File_Diplome.deleteDiplome')
    @include('Admin.pages.File_Diplome.editDiplome')
    @include('Admin.pages.File_Diplome.addDiplome')

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
                url: "{{ route('Diplome.edit', ':id') }}".replace(':id', id),
                success: function(response) {
                    console.log(response.Diplome);
                    $('#nomDiplome').val(response.Diplome.nomDiplome);
                    $('#id').val(response.Diplome.id);

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
@endsection


