@extends('layout.app')
@section('content')
<section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
                    <div class="card-header">
                <h3 class="box-title">Project LIB</h3>
              </div>

              <!-- /.box-header -->
              <div class="card-body">
              <button class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-default">
                  Add ITEM
              </button>
              <br><br><br>



                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Item of Expenses</th>
                    <th>1st Quater Total</th>
                    <th>2nd Quater Total</th>
                    <th>3rd Quater Total</th>
                    <th>Total as Approved</th>
                    <th>Action</th>




                  </tr>
                  </thead>
                  <tbody>

                    <td>fhfh</td>
                    <td>gfdg/td></td>
                    <td>gfdg/td></td>
                    <td>gfdg/td></td>
                    <td>gfdg/td></td>
                    <td>
                        <div class="btn-group">
                    <button type="button" class="btn btn-info btn-flat">Action</button>
                    <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div></td>
                  </tr>


                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
              <div class="modal-footer justify-content-between">
                                  <a href="{{ route('lib') }}" button type="button" class="btn btn-default" data-dismiss="modal">Close</a></button>
                                  <a href="{{ route('personel') }}" button type="button" class="btn btn-primary">Save changes</a></button>
                                </div>
            </div>
            <!-- /.box -->
            
          </div>
          <!-- /.col -->


        </div>
        <!-- /.row -->
        <div class="modal fade" id="modal-default">
                <div class="modal-dialog modal-lg" >
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Default Modal</h4>
                    </div>
                    <div class="modal-body">

                            <div class="form-group">
                                    <label class="control-label control-label-left col-sm-5" >Item Grouping:</label>
                                    <div class="controls col-sm-7">
                                        <select class="form-control">
                                            <option></option>
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label control-label-left col-sm-5" >LIB Item Class:</label>
                                    <div class="controls col-sm-7">
                                        <select class="form-control">
                                            <option></option>
                                        </select>
                                        <input name="projectleader" class="form-control control-label-left col-sm-5">
                                    </div>
                            </div>
                            <br>
                            <b> Amount</b>
                            <hr>
                            <fieldset>
                                <div class="side-col">
                                    <label> Month 1 </label>
                                    <input placeholder="Month1">
                                    <br>
                                    <br>
                                    <label> Month 2 </label>
                                    <input placeholder="Month2">
                                    <br>
                                    <br>
                                    <label> Month 3 </label>
                                    <input placeholder="Month3">

                                </div>

                                <div class="center-col">
                                        <label> Month 4 </label>
                                        <input placeholder="Month4">
                                        <br>
                                        <br>
                                        <label> Month 5 </label>
                                        <input placeholder="Month5">
                                        <br>
                                        <br>
                                        <label> Month 6 </label>
                                        <input placeholder="Month6">
                                </div>
                                <div class="center-col">
                                        <label> Month 7 </label>
                                        <input placeholder="Month7">
                                        <br>
                                        <br>
                                        <label> Month 8 </label>
                                        <input placeholder="Month8">
                                        <br>
                                        <br>
                                        <label> Month 9 </label>
                                        <input placeholder="Month9">
                                </div>
                                <div class="side-col">
                                        <label> Month 10 </label>
                                        <input placeholder="Month10">
                                        <br>
                                        <br>
                                        <label> Month 11 </label>
                                        <input placeholder="Month11">
                                        <br>
                                        <br>
                                        <label> Month 12 </label>
                                        <input placeholder="Month12">

                                    </div>
                            </fieldset>


                            <div id="content">
                                    <div class="side-col readonly-totals">
                                        <label> Q1 Total</label>
                                        <input id="q1_total" class="total-readonly">
                                    </div>
                                    <div class="center-col readonly-totals">
                                            <label> Q2 Total</label>
                                            <input id="q1_total" class="total-readonly">
                                    </div>
                                    <div class="center-col readonly-totals">
                                            <label> Q3 Total</label>
                                            <input id="q1_total" class="total-readonly">
                                    </div>
                                    <div class="side-col readonly-totals">
                                            <label> Q4 Total</label>
                                            <input id="q1_total" class="total-readonly">
                                        </div>

                    </div>
                    <hr>
                    <div>
                        <div class="side-col">
                            <label> Total:</label>

                        </div>
                    </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                                  <a href="{{ route('lib') }}" button type="button" class="btn btn-default" data-dismiss="modal">Close</a></button>
                                  <a href="{{ route('lib') }}" button type="button" class="btn btn-primary">Save changes</a></button>
                                </div>

                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
                
              </div>
              
              <!-- /.modal -->




      </section>



@endsection
