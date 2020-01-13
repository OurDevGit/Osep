@extends('layout.app')
@section('content')




<section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Personnels List</h3>
              </div>

            
            <div class="col-md-12">
            <div class="form-group row">
			    <h3>Upload Required File</h3>
			    <div class="col-sm-10">
                    
                </div>
		        </div>
        <div class="form-group brdbot">
			    <h3>Instruction</h3>
			    <div class="controls col-sm-9">
                    </div>
                
		</div>
        <div class="form-group">
			 <p>Nullam quis risus eget urna mollis ornare vel eu leo. 
             Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
             Nullam id dolor id nibh ultricies vehicula.</p>
		   
                
		</div>
 
<div class="form-group">

                    <label for="exampleInputFile">File input</label>
                    <br> 
                    <div class="input-group">
                     
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>


                  <div class="modal-footer justify-content-between">
                                  <a href="{{ route('equipment') }}" button type="button" class="btn btn-default" data-dismiss="modal">Close</a></button>
                                  <a href="{{ route('workplan') }}" button type="button" class="btn btn-primary">Save and Next</a></button>
                                </div>


                  </div>
                         </div>
                         
                         </div>
                         </div>
                  @endsection