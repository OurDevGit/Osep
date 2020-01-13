@extends('layout.app')
@section('content')

<body>

<!-- Horizontal Form -->
<div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Project Details</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form id="ExEquip" class="form-horizontal" method="POST" action="/form2">
        
          <div class="card-body">
          {{ csrf_field() }}  
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Project Title:</label>
              <div class="col-sm-10">
                <input name="projecttitle" class="form-control" >
              </div>
            </div>

            <!-- <button type="submit" class="btn btn-success">Save and Next
                              </a></button></div> -->

            <div class="form-group row">
              <label  class="col-sm-2 col-form-label">Program Leader:</label>
              <div class="col-sm-10">
                <input name="projectleader" class="form-control"  >
              </div>
            </div>
            <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Mobile Number:</label>
                    <div class="col-sm-10">
                      <input name="mobilenumber" class="form-control"  >
                    </div>
                  </div>

                  <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Email Address:</label>
                        <div class="col-sm-10">
                          <input name="email" class="form-control"  >
                        </div>
                      </div>
                      <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Office Address:</label>
                            <div class="col-sm-10">
                              <input name="officeadd" class="form-control"  >
                            </div>
                          </div>
                          <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Agency Affilated:</label>
                                <div class="col-sm-10">
                                  <input name="agecnyaffilated" class="form-control"" >
                                </div>
                              </div>

                       <div class="form-group row">
              <label  class="col-sm-2 col-form-label">Project Duration in Months:</label>
              <div class="col-sm-10">
                <input name="projectduration" class="form-control"  >
              </div>
            </div>

            <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sex:</label>
             <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="sex" value="Female" >
                      <label class="form-check-label">Female</label>
                    </div>
                    <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" value="Male" >
                            <label class="form-check-label">Male</label>
                          </div>

             </div>
                </div>


                    <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Implementing Agency</label>
                            <div class="col-sm-10">
                                <select name="implementing" id="implementing" class="form-control">

                                     <option value=""></option>
                                        @isset($agencies2)
                                            @foreach ($agencies2 as $agency)
                                     <option value="{{$agency-> listofagencyname }}">{{$agency-> listofagencyname }}</option>
                                            @endforeach
                                        @endisset
                                 </select>
                            </div>
                         </div>
                         <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Cooperating Agency</label>
                                <div class="col-sm-10">
                                    <select name="division" id="division" class="form-control">

                                         <option value=""></option>
                                            @isset($agencies2)
                                                @foreach ($agencies2 as $agency)
                                         <option value="{{$agency-> listofagencyname }}">{{$agency-> listofagencyname }}</option>
                                                @endforeach
                                            @endisset
                                     </select>
                                </div>
                             </div>

                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Other Cooperating Agency</label>
                                <div class="col-sm-10">
                                    <select name="division" id="division" class="form-control">

                                         <option value=""></option>
                                            @isset($agencies2)
                                                @foreach ($agencies2 as $agency)
                                         <option value="{{$agency-> listofagencyname }}">{{$agency-> listofagencyname }}</option>
                                                @endforeach
                                            @endisset
                                     </select>
                                </div>
                             </div>
                             <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Site of Implementation</label>
                                    <div class="col-sm-10">
                                        <select name="division" id="division" class="form-control">

                                             <option value=""></option>
                                                @isset($agencies2)
                                                    @foreach ($agencies2 as $agency)
                                             <option value="{{$agency-> listofagencyname }}">{{$agency-> listofagencyname }}</option>
                                                    @endforeach
                                                @endisset
                                         </select>
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Other Site of Implemention</label>
                                        <div class="col-sm-10">
                                            <select name="division" id="division" class="form-control">

                                                 <option value=""></option>
                                                    @isset($agencies2)
                                                        @foreach ($agencies2 as $agency)
                                                 <option value="{{$agency-> listofagencyname }}">{{$agency-> listofagencyname }}</option>
                                                        @endforeach
                                                    @endisset
                                             </select>
                                        </div>
                                     </div>
                                     <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Type of Reseach</label>
                                            <div class="col-sm-10">
                                                <select name="division" id="division" class="form-control">

                                                     <option value=""></option>
                                                        @isset($agencies2)
                                                            @foreach ($agencies2 as $agency)
                                                     <option value="{{$agency-> listofagencyname }}">{{$agency-> listofagencyname }}</option>
                                                            @endforeach
                                                        @endisset
                                                 </select>
                                            </div>
                                         </div>

                                         <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">R&amp;D PRIORITY AREA &amp; PROGRAM (based on HNRDA 2017-2022)</label>
                                         <div class="form-group">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="priorityarea" value="Agriculture">
                                                  <label class="form-check-label">Agriculture</label>
                                                </div>
                                                <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="priorityarea" value="Health">
                                                        <label class="form-check-label">Health</label>
                                                      </div>
                                                      <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="priorityarea" value="Industry , Enegry and Emerging Technology">
                                                            <label class="form-check-label">Industry , Enegry and Emerging Technology</label>
                                                          </div>
                                                          <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="priorityarea" value="Disaster Risk Reduction and Climate Change Adaptation">
                                                                <label class="form-check-label">Disaster Risk Reduction and Climate Change Adaptation</label>
                                                              </div>
                                                              <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="priorityarea" value="Basic Research ">
                                                                    <label class="form-check-label">Basic Research</label>
                                                                  </div>

                                         </div>
                                            </div>
                                            <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Specific Objectives:</label>
                                                    <div class="col-sm-10">
                                                      <input type="password" class="form-control" id="inputPassword3" >
                                                      <br>
                                                      <button type="button" class="btn btn-info">Add More Specific Objectives</button>
                                                    </div>
                                                  </div>

                                                  <div class="col-md-12">
                                                        <div class="form-group row">
                                                           <h4>General Objectives</h4>
                                                           <div class="controls col-sm-9">

                                                           <p id="field1" data-default-label="Header" data-default-is-header="true" data-control-type="header"></p><span id="errId1" class="error"></span>
                                                       </div>
                                                   </div>
                                                    </div>

                                                   <div class="form-group row">
                                                       <label class="control-label control-label-left col-sm-3" for="Input:"><span class="req"> *</span></label>
                                                    <div class="controls col-sm-9">

                                                     <textarea name="objective" id="Input:" rows="3" class="form-control k-textbox" data-role="textarea"></textarea><span class="help-block">(Not exceed in 500 words)</span><span id="errId2" class="error"></span>
                                                    </div>

                                                   </div>




                                         <div class="col-md-12">
                                             <div class="form-group row">
                                                <h4>RATIONALE</h4>
                                                <div class="controls col-sm-9">

                                                <p id="field1" data-default-label="Header" data-default-is-header="true" data-control-type="header"></p><span id="errId1" class="error"></span>
                                            </div>
                                        </div>
                                         </div>

                                        <div class="form-group row">
                                            <label class="control-label control-label-left col-sm-3" for="Input:"><span class="req"> *</span></label>
                                         <div class="controls col-sm-9">

                                          <textarea name="rationale" id="Input:" rows="3" class="form-control k-textbox" data-role="textarea" data-parsley-errors-container="#errId2"></textarea><span class="help-block">(Not exceed in 500 words)</span><span id="errId2" class="error"></span>
                                         </div>

                                        </div>
                                        <div class="col-md-12">
                                                <div class="form-group row">
                                                   <h4>REVIEW OF LITERATURE</h4>
                                                   <div class="controls col-sm-9">

                                                   <p id="field1" data-default-label="Header" data-default-is-header="true" data-control-type="header"></p><span id="errId1" class="error"></span>
                                               </div>
                                           </div>
                                            </div>

                                           <div class="form-group row">
                                               <label class="control-label control-label-left col-sm-3" for="Input:"><span class="req"> *</span></label>
                                            <div class="controls col-sm-9">

                                             <textarea name="literature" id="Input:" rows="3" class="form-control k-textbox" data-role="textarea" data-parsley-errors-container="#errId2"></textarea><span class="help-block">(Not exceed in 500 words)</span><span id="errId2" class="error"></span>
                                            </div>

                                           </div>
                                           <div class="col-md-12">
                                                <div class="form-group row">
                                                   <h4>METHODOLOGY</h4>
                                                   <div class="controls col-sm-9">

                                                   <p id="field1" data-default-label="Header" data-default-is-header="true" data-control-type="header"></p><span id="errId1" class="error"></span>
                                               </div>
                                           </div>
                                            </div>

                                           <div class="form-group row">
                                               <label class="control-label control-label-left col-sm-3" for="Input:"><span class="req"> *</span></label>
                                            <div class="controls col-sm-9">

                                             <textarea name="methodology"id="Input:" rows="3" class="form-control k-textbox" data-role="textarea" data-parsley-errors-container="#errId2"></textarea><span class="help-block">(Not exceed in 500 words)</span><span id="errId2" class="error"></span>
                                            </div>

                                           </div>
                                           <div class="col-md-12">
                                                <div class="form-group row">
                                                   <h4>TARGET ACCOMPLISHMENTS AND EXPECTED OUTPUT</h4>
                                                   <div class="controls col-sm-9">

                                                   <p id="field1" data-default-label="Header" data-default-is-header="true" data-control-type="header"></p><span id="errId1" class="error"></span>
                                               </div>
                                           </div>
                                            </div>

                                           <div class="form-group row">
                                               <label class="control-label control-label-left col-sm-3" for="Input:"><span class="req"> *</span></label>
                                            <div class="controls col-sm-9">

                                             <textarea name="accomplishement" id="Input:" rows="3" class="form-control k-textbox" data-role="textarea" data-parsley-errors-container="#errId2"></textarea><span class="help-block">(Not exceed in 500 words)</span><span id="errId2" class="error"></span>
                                            </div>

                                           </div>
                                           <div class="col-md-12">
                                                <div class="form-group row">
                                                   <h4>GENDER AND DEVELOPMENT (GAD) SCORE</h4>
                                                   <div class="controls col-sm-9">

                                                   <p id="field1" data-default-label="Header" data-default-is-header="true" data-control-type="header"></p><span id="errId1" class="error"></span>
                                               </div>
                                           </div>
                                            </div>

                                           <div class="form-group row">
                                               <label class="control-label control-label-left col-sm-3" for="Input:"><span class="req"> *</span></label>
                                            <div class="controls col-sm-9">

                                             <textarea name="gad" id="Input:" rows="3" class="form-control k-textbox" data-role="textarea" data-parsley-errors-container="#errId2"></textarea><span class="help-block">(Not exceed in 500 words)</span><span id="errId2" class="error"></span>
                                            </div>

                                           </div>

                                           <div class="col-md-12">
                                                <div class="form-group row">
                                                   <h4>LIMITATION OF THE PROJECT</h4>
                                                   <div class="controls col-sm-9">

                                                   <p id="field1" data-default-label="Header" data-default-is-header="true" data-control-type="header"></p><span id="errId1" class="error"></span>
                                               </div>
                                           </div>
                                            </div>

                                           <div class="form-group row">
                                               <label class="control-label control-label-left col-sm-3" for="Input:"><span class="req"> *</span></label>
                                            <div class="controls col-sm-9">

                                             <textarea name="limitation" id="Input:" rows="3" class="form-control k-textbox" data-role="textarea"  data-parsley-errors-container="#errId2"></textarea><span class="help-block">(Not exceed in 500 words)</span><span id="errId2" class="error"></span>
                                            </div>

                                           </div>

                                           <div class="col-md-12">
                                                <div class="form-group row">
                                                   <h4>LITERATURE CITED</h4>
                                                   <div class="controls col-sm-9">

                                                   <p id="field1" data-default-label="Header" data-default-is-header="true" data-control-type="header"></p><span id="errId1" class="error"></span>
                                               </div>
                                           </div>
                                            </div>

                                           <div class="form-group row">
                                               <label class="control-label control-label-left col-sm-3" for="Input:"><span class="req"> *</span></label>
                                            <div class="controls col-sm-9">

                                             <textarea name="litcited" id="Input:" rows="3" class="form-control k-textbox" data-role="textarea"  data-parsley-errors-container="#errId2"></textarea><span class="help-block">(Not exceed in 500 words)</span><span id="errId2" class="error"></span>
                                            </div>

                                           </div>


          </div>


          <div class="card-footer">
                <button type="submit" class="btn btn-info float-right">Save and Next</button>
                <button type="submit" class="btn btn-default">Back</button>

              </div>
        </form></div>



       

</body>
@endsection
