@extends('layout.app')
@section('content')

<section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Equipment List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  
                  <tr>
                    <th>Name of Equipment</th>
                    <th>Number of Equipment</th>
                    <th>Justification</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($equipment as $equipment)
                  <tr>
                    <td>{{$equipment->name}}</td>
                    <td>{{$equipment->name}} </td>
                    <td>{{$equipment->justification}}</td>
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
                  @endforeach
                </table>
                <br>
                <div class="margin">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">Add Equipment</button>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                                  <a href="{{ route('equipment') }}" button type="button" class="btn btn-default" data-dismiss="modal">Close</a></button>
                                  <a href="{{ route('workplan') }}" button type="button" class="btn btn-primary">Save changes</a></button>
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
                                        <form method="POST" action="/equipment">
                                            <div class="modal-body">
                                                   {{ csrf_field() }}
                                               <div class="form-group">
                                                       <label class="control-label control-label-left col-sm-5" >Name of Equipment:</label>
                                                       <div class="controls col-sm-7">
                                                       <input  name="name" class="form-control"></div>
                                               </div>

                                               <div class="form-group">
                                                       <label class="control-label control-label-left col-sm-5" >Number  of Equipment:</label>
                                                       <div class="controls col-sm-7">
                                                       <input  name="number" class="form-control"></div>
                                               </div>

                                               <div class="form-group">
                                                    <label class="control-label control-label-left col-sm-5" >Justification:</label>
                                                    <div class="form-group">
                                                            <label class="control-label control-label-left col-sm-3" for="Input:"></label>
                                                         <div class="controls col-sm-7">

                                                          <textarea name="justification" id="Input:" rows="3" class="form-control k-textbox"> </textarea> </div>
                                                        </div></div>


                                           </div>


                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</a></button>
                                  <button type="submit" class="btn btn-primary">Save changes</a></button>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                         </div>
  @endsection
