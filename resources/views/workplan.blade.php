@extends('layout.app')
@section('content')




<section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Workplan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


              <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-lboi{border-color:inherit;text-align:left;vertical-align:middle}
.tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
</style>
<table class="table table-bordered table-hover">

  <tr>
    <th class="tg-9wq8" rowspan="2">OBJECTIVES
        <div>
            <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-objective" >Add Objectives</button>
        </div>
    </th>
    <th class="tg-9wq8" rowspan="2">TARGET ACTIVITIES
        <div>
            <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-activities" >Add Activities</button>
        </div>
    </th>
    <th class="tg-9wq8" rowspan="2">TARGET ACCOMPLISHMENTS
    <div>
            <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-accomplishment" >Add ACCOMPLISHMENTS</button>
        </div>
    
    </th>
    
    <th class="tg-c3ow" colspan="4">Y1<br></th>
    <th class="tg-c3ow" colspan="4">Y2</th>
    <th class="tg-c3ow" colspan="4">Y3<br></th>
    <th class="tg-c3ow" rowspan="2">ACTION</th>
  </tr>
  
  
  <tr>
    <td class="tg-c3ow">Q1</td>
    <td class="tg-c3ow">Q2</td>
    <td class="tg-c3ow">Q3</td>
    <td class="tg-c3ow">Q4</td>
    <td class="tg-c3ow">Q1</td>
    <td class="tg-c3ow">Q2</td>
    <td class="tg-c3ow">Q3</td>
    <td class="tg-c3ow">Q4</td>
    <td class="tg-c3ow">Q1</td>
    <td class="tg-c3ow">Q2</td>
    <td class="tg-c3ow">Q3</td>
    <td class="tg-0pky">Q4</td>
  </tr>
  @foreach($workplan as $workplan)
  <tr>
    <td class="tg-lboi">{{$workplan->objectives}}</td>
    <td class="tg-lboi">{{$workplan->activities}}</td>
    <td class="tg-lboi">{{$workplan->accomplishement}}</td>
    @endforeach
    <td class="tg-0pky">{{$workplan->accomplishement}}
     
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" name="y1q2" type="checkbox" id="customCheckbox2" value="option1">
            <label for="customCheckbox2" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="option1">
            <label for="customCheckbox" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="option1">
            <label for="customCheckbox4" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox5" value="option1">
            <label for="customCheckbox5" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox6" value="option1">
            <label for="customCheckbox6" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox7" value="option1">
            <label for="customCheckbox7" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox8" value="option1">
            <label for="customCheckbox8" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox9" value="option1">
            <label for="customCheckbox9" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox10" value="option1">
            <label for="customCheckbox10" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox11" value="option1">
            <label for="customCheckbox11" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">           <div class="margin">
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
  <tr>
    <td class="tg-lboi"></td>
    <td class="tg-lboi"></td>
    <td class="tg-lboi"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
</table>
<br>


              </div>
                    {{-- MODAL --}}

                    <div class="modal fade" id="modal-objective">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Add Objectives</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                        <form method="POST" action="/workplan">
                                            <div class="modal-body">
                                                   {{ csrf_field() }}
                                               <div class="form-group row">
                                                       <label class="control-label control-label-left col-sm-3" >Objectives:</label>
                                                       <div class="controls col-sm-9">
                                                       <input  name="objectives" class="form-control"></div>
                                               </div>

                                               <div class="form-group row">
                                           
                                           </div>


                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</a></button>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                         </div>




                         <div class="modal fade" id="modal-activities">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Add Activities</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                        <form method="POST" action="/workplan">
                                            <div class="modal-body">
                                                   {{ csrf_field() }}
                                               <div class="form-group row">
                                                       <label class="control-label control-label-left col-sm-3" >Activities:</label>
                                                       <div class="controls col-sm-9">
                                                       <input  name="activities" class="form-control"></div>
                                               </div>

                                               <div class="form-group row">
                                           
                                           </div>


                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</a></button>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                         </div>




                         <div class="modal fade" id="modal-accomplishment">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Add Accomplishments</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                        <form method="POST" action="/workplan">
                                            <div class="modal-body">
                                                   {{ csrf_field() }}
                                               <div class="form-group row">
                                                       <label class="control-label control-label-left col-sm-3" >Accomplishment:</label>
                                                       <div class="controls col-sm-9">
                                                       <input  name="accomplishement" class="form-control"></div>
                                               </div>

                                               <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</a></button>
                                </div>


                                </div>
                                
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                         </div>



                         <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Workplan 2</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


              <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-lboi{border-color:inherit;text-align:left;vertical-align:middle}
.tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
</style>
<table class="table table-bordered table-hover">
  <tr>
    <th class="tg-lboi" rowspan="2">EXPECTED OUTPUTS (6Ps)<br></th>
    <th class="tg-lboi" rowspan="2">DETAILS(quantify, if possible)<br></th>
    <th class="tg-9wq8" colspan="4">Y1<br></th>
    <th class="tg-9wq8" colspan="4">Y2</th>
    <th class="tg-c3ow" colspan="4">Y3</th>
    <th class="tg-c3ow" rowspan="2">ACTION
    
    </th>
  </tr>
  <tr>
    <td class="tg-9wq8">Q1<br></td>
    <td class="tg-9wq8">Q2</td>
    <td class="tg-9wq8">Q3</td>
    <td class="tg-9wq8">Q4</td>
    <td class="tg-9wq8">Q1</td>
    <td class="tg-9wq8">Q2</td>
    <td class="tg-9wq8">Q3</td>
    <td class="tg-c3ow">Q4</td>
    <td class="tg-c3ow">Q1</td>
    <td class="tg-c3ow">Q2</td>
    <td class="tg-c3ow">Q3</td>
    <td class="tg-c3ow">Q4</td>
  </tr>
  <tr>
    <td class="tg-lboi">Publication
         <div>
            <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-activities" >Add Details</button>
        </div>
    </td>
    <td class="tg-lboi">
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
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky"><div class="margin">
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
                                    </div></td>
  </tr>
  <tr>
    <td class="tg-lboi">Patents/IP<br>
    <div>
            <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-activities" >Add Details</button>
        </div>
    </td>
    <td class="tg-lboi">
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
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
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
  <tr>
    <td class="tg-lboi">Products
    <div>
            <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-activities" >Add Details</button>
        </div>
    </td>
    <td class="tg-lboi">
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
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
        </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
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
  <tr>
    <td class="tg-lboi">People Services
    <div>
            <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-activities" >Add Details</button>
        </div>
    </td>
    <td class="tg-lboi"> <div class="btn-group">
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
                                    </div></td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
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
  <tr>
    <td class="tg-lboi">Places and Partnership
    <div>
            <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-activities" >Add Details</button>
        </div>
    </td>
    <td class="tg-lboi">
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
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
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
  <tr>
    <td class="tg-lboi">Policy
    <div>
            <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-activities" >Add Details</button>
        </div>
    </td>
    <td class="tg-lboi">   <div class="btn-group">
                                        
                                      <button type="button" class="btn btn-info"></button>
                                      <i class="fas fa-align-center"></i>
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
                                    </div></td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-lboi">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
    <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="option1">
            <label for="customCheckbox12" class="custom-control-label"></label>
        </div>
    </td>
    <td class="tg-0pky">
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

<!-- FOTER -->
                         

                         </div>

                         <div class="modal-footer justify-content-between">
                                  <a href="{{ route('workplan') }}" button type="button" class="btn btn-default" data-dismiss="modal">Close</a></button>
                                  <a href="{{ route('lib') }}" button type="button" class="btn btn-primary">Save changes</a></button>
                                </div>


                         </div>
                         </div>
                         
                         </div>
  @endsection
  
