@extends('layout.app')
@section('content')

<section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Personnels List</h3>
              </div>

              
              <!-- /.card-header -->
              <div class="card-body">

              <div class="margin">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">Add Member</button>
                </div>
            <br>

                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Name </th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Agency</th>
                    <th>Percentages of Work</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($personnels as $personel)
                  <tr>
                    <td>'{{$personel->first_name}}''{{$personel->middle_name}}''{{$personel->last_name}}''</td>
                    <td>{{$personel->email}}</td>
                    <td>{{$personel->role}}</td>
                    <td>{{$personel->affilation}}</td>
                    <td>{{$personel->percent}}</td>
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

              </div>
              <!-- /.card-body -->
              <div class="modal-footer justify-content-between">
                                  <a href="{{ route('personel') }}" button type="button" class="btn btn-default" data-dismiss="modal">Close</a></button>
                                  <a href="{{ route('upload') }}" button type="button" class="btn btn-primary">Save and Next</a></button>
                                </div>
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
                                        <form method="POST" action="/personel">
                                            <div class="modal-body">
                                                   {{ csrf_field() }}
                                               <div class="form-group row">
                                                       <label class="control-label control-label-left col-sm-3" >First Name:</label>
                                                       <div class="controls col-sm-9">
                                                       <input  name="first_name" class="form-control"></div>
                                               </div>

                                               <div class="form-group row">
                                                       <label class="control-label control-label-left col-sm-3" >Last Name:</label>
                                                       <div class="controls col-sm-9">
                                                       <input  name="last_name" class="form-control"></div>
                                               </div>

                                               <div class="form-group row">
                                                       <label class="control-label control-label-left col-sm-3" >Middle Name:</label>
                                                       <div class="controls col-sm-9">
                                                       <input  name="middle_name" class="form-control"></div>
                                               </div>

                                               <div class="form-group row">
                                                       <label class="control-label control-label-left col-sm-3" >Suffix:</label>
                                                       <div class="controls col-sm-9">
                                                       <input  name="suffix" class="form-control"></div>
                                               </div>

                                               <div class="form-group row">
                                                       <label class="control-label control-label-left col-sm-3" >Email Address:</label>
                                                       <div class="controls col-sm-9">
                                                       <input  name="email" class="form-control"></div>
                                               </div>

                                               <div class="form-group row">
                                                       <label class="control-label control-label-left col-sm-3" >Mobile Number:</label>
                                                       <div class="controls col-sm-9">
                                                       <input  name="mobile" class="form-control"></div>
                                               </div>

                                               <div class="form-group row">
                                                       <label class="control-label control-label-left col-sm-3" >Expertise:</label>
                                                       <div class="controls col-sm-9">
                                                       <input  name="expertise" class="form-control"></div>
                                               </div>

                                               <div class="form-group row">
                                                       <label class="control-label control-label-left col-sm-3" >Affilation:</label>
                                                       <div class="controls col-sm-9">
                                                       <input  name="affilation" class="form-control"></div>
                                               </div>
                                               <div class="form-group row">
                                                       <label class="control-label control-label-left col-sm-3" >Role in the Project:</label>
                                                       <div class="controls col-sm-9">
                                                       <input  name="role" class="form-control"></div>
                                               </div>

                                               <div class="form-group row">
                                                       <label class="control-label control-label-left col-sm-3" >Full-Time:</label>
                                                       <div class="controls col-sm-9">
                                                       <input  name="fulltime" class="form-control"></div>
                                               </div>

                                               <div class="form-group row">
                                                       <label class="control-label control-label-left col-sm-3" >Percent Time Devoted To the Project:</label>
                                                       <div class="controls col-sm-9">
                                                       <input  name="percent" class="form-control"></div>
                                               </div>
                                               <div class="form-group row">
                                                       <label class="control-label control-label-left col-sm-3" >Responsibility:</label>
                                                       <div class="controls col-sm-9">
                                                       <input  name="responsibility" class="form-control"></div>
                                               </div>
                                               

                                            


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
