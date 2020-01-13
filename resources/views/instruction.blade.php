
@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    {{-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="http://wenzhixin.net.cn/p/bootstrap-table/src/bootstrap-table.css" rel="stylesheet" type="text/css" />

    <link href="http://cdn.kendostatic.com/2014.1.318/styles/kendo.common.min.css" rel="stylesheet" />
    <link href="http://cdn.kendostatic.com/2014.1.318/styles/kendo.bootstrap.min.css" rel="stylesheet" />
    <link href="http://protostrap.com/Assets/gv/css/gv.bootstrap-form.css" rel="stylesheet" type="text/css" /> --}}

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->

</head>

<body>

        <div class="content">
                <div class="container-fluid">

                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title">Card title</h5>

                                    <p class="card-text">
                                      Some quick example text to build on the card title and make up the bulk of the card's
                                      content.
                                    </p>

                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                  </div>
                                </div>

        </div>


    <!-- Main content -->
    <section class="content">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Project List</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Reference Number</th>
                        <th>Project Title</th>
                        <th>Project Leader(s)</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>165418484</td>
                        <td>Mussle DOST </td>
                        <td>Edwin Villar</td>
                        <td>Approved</td>
                        <td>
                                <div class="margin">
                                        <div class="btn-group">
                                          <button type="button" class="btn btn-info">Action</button>
                                          <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                            <span class="sr-only">Toggle Dropdown</span>
                                            <div class="dropdown-menu" role="menu">
                                              <a class="dropdown-item" href="#">Add</a>
                                              <a class="dropdown-item" href="#">Update</a>
                                              <a class="dropdown-item" href="#">Delete</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                          </button>
                                        </div>
                        </td>
                      </tr>
                    </table>
                    <br>
                    <div class="margin">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">Add Project</button>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>


            {{-- MODAL --}}

            <div class="modal fade" id="modal-default">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Default Modal</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                                <div class="container-fluid">
                                        <div class="row">

                                            <form action="../submit" id="formentry" class="form-horizontal" role="form" data-parsley-validate novalidate>



                                                                    <div class="row">
                                                                        <div class="col-md-12"><div class="form-group brdbot" style="display: block;">
                                                <h3>Instruction</h3>
                                                <div class="controls col-sm-9">

                                                <p id="field8" data-default-label="Header" data-default-is-header="true" data-control-type="header"></p><span id="errId1" class="error"></span></div>

                                        </div><div class="form-group">
                                                <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>


                                        </div><div class="form-group brdbot">
                                                <h3>Research Grant Type</h3>
                                                <div class="controls col-sm-9">

                                                <p id="field1" data-default-label="Header" data-default-is-header="true" data-control-type="header"></p><span id="errId2" class="error"></span></div>
                                                </div>


                                                <div class="form-group">

                                                <label class="control-label control-label-left col-sm-3" for="TypeOfResearch">Type of Research</label>
                                                    <div class="controls col-sm-9">

                                                        <select id="TypeOfResearch" class="form-control" data-role="select" selected="selected" data-parsley-errors-container="#errId3">

                                                            <option value="Reseach and Developmemt">Reseach and Developmemt</option>
                                                             <option value="Non - Reseach and Developmemt">Non - Reseach and Developmemt</option>
                                                                </select><span id="errId3" class="error"></span>
                                                     </div>
                                                </div>

                                        <div class="form-group">
                                                <label class="control-label control-label-left col-sm-3" for="ReseachGrantType:">Reseach Grant Type:<span class="req"> *</span></label>
                                                <div class="controls col-sm-9">

                                                <select id="ReseachGrantType:" class="form-control" data-role="select" required="required" selected="selected" data-parsley-errors-container="#errId3">





                                        <option value="DOST GIA">DOST GIA</option><option value="DOST PCAARRD GIA">DOST PCAARRD GIA</option></select><span id="errId3" class="error"></span></div>

                                        </div>

                                    </div>
                                     </div>




                                            </form>
                                        </div>
                                    </div>


                        </div>
                        <div class="modal-footer justify-content-between">
                          <a href="{{ route('form2') }}" button type="button" class="btn btn-default" data-dismiss="modal">Close</a></button>
                          <a href="{{ route('form2') }}" button type="button" class="btn btn-primary">Save changes</a></button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->

</body>
</div>
</div>

@endsection
