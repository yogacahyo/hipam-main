@extends('layouts.index')
@section('title', 'Generate Inspection' . $cert)
@section('content')

    <div class="x_panel">
        <div class="x_title">
            <h2>Generate Inspection {{$cert}}</h2>
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
                <table class="table table-striped shadow" id="datatable-buttons" style="width: 100%">
                    <thead>
                        <tr>
                            <th>No.</th>
							<th>Date</th>
							<th>Tag No.</th>
                            <th>PID</th>
							<th>System_No</th>
                            <th>Subsytem Description</th>
                            <th>Discipline</th>
                            <th>Certificate</th>
							<th>Hook_up_drawing</th>
                            <th>Attachment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
								<td>{{ $d->cert_date }}</td>
                                <td>{{ $d->Tag_No }}</td>
                                <td>{{ $d->PID }}</td>
                                <td>{{ $d->Desc }}</td>
                                <td>{{ $d->Code_Disc }}</td>
                                <td>{{ $d->Certificate_Name }}</td>
                                <td><a class="btn btn-sm shadow" href="/certificate-download?file={{ $d->Document }}"><i
                                            class="fa fa-download"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
                    <button type="button" class="shadow btn btn-sm btn-danger" data-dismiss="modal"><i
                            class="fa fa-remove"></i> Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
