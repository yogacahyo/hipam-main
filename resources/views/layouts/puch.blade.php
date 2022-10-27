@extends('layouts.index')
@section('title', 'Puch List ')
@section('content')

    <div class="x_panel">
        <div class="x_title">
            <h2>Puch List</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="card-box table-responsive">
                <table class="table table-striped" id="datatable-buttons" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tag No.</th>
                            <th>PID</th>
                            <th>System No.</th>
                            <th>SubSystem No.</th>
                            <th>SubSystem Description</th>
                            <th>Code_Disc</th>
                            <th>Certificate</th>
                            <th>Hook Up Drawing</th>
							<th>Attachment</th>
                        </tr>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $d->Tag_No }}</td>
                                <td>{{ $d->PID }}</td>
                                <td>{{ $d->System_No }}</td>
                                <td>{{ $d->SubSystem_No }}</td>
                                <td>{{ $d->SubSystem_Description }}</td>
                                <td>{{ $d->Code_Disc }}</td>
								<td>{{ $d->Certificate_Name }}</td>
                                <td>{{ $d->Hook_up_drawing_No }}</td>
                                <td><button class="btn shadow" data-toggle="modal" data-target="#myModal2"
                                        onclick="showImg('{{ url('storage/' . $d->Hook_up_drawing) }}')"><i
                                            class="fa fa-image text-info"></i></button></td>
								<td><a class="btn btn-sm shadow" href="/certificate-download?file={{ $d->Document }}"><i
                                            class="fa fa-download"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal2">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Hook Up Drawing</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <img src="" alt="Hook Up Drawing" class="img img-fluid" id="hookupdrawing">
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="shadow btn btn-sm btn-primary"><i class="fa fa-save"></i>
                        Save</button>
                    <button type="button" class="shadow btn btn-sm btn-danger" data-dismiss="modal" onclick="resetForm()"><i
                            class="fa fa-remove"></i> Close</button>
                </div>

            </div>
        </div>
    </div>

    <script>
        function showImg(foto) {
            $('#hookupdrawing').attr('src', foto);
        }
    </script>

@endsection
