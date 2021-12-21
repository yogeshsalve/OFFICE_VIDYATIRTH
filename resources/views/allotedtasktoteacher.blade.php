

@extends('layouts.auth')

@section('content')

<div class="container-fluid">
 
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Allot Task to Teacher</div>

                <div class="card-body">
                    
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="card">
                          <div class="card-body">
                           
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <h6>{{ $message }}</h6>
                                </div>
                            @endif 



                           
                            <form method="POST" action="/teachertasks">
                                @csrf
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Teacher Name</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="name">
                                    @foreach($teacher as $t)
                                    <option value="{{$t->name}}">{{$t->name}}</option>
                                    @endforeach
                                
                                </select>
                            </div>

                            <!-- <div class="form-group">
                                <label for="exampleFormControlSelect1">Standard</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="standard">
                                <option>XI</option>
                                <option>XII</option>                                
                                </select>
                            </div> -->

                            <div class="row mb-3">
                                    <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">Standard</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="standard">
                                    <option>XI</option>
                                    <option>XII</option>                                
                                    </select>
                                    </div>
                                    <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">Course</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="course">
                                    <option>Board</option>
                                    <option>Entrance</option>                               
                                    </select>
                                    </div>                                    
                                </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Subject</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="subject">
                                <option>Physics</option>
                                <option>Chemistry</option>
                                <option>Mathematics</option>                                
                                <option>Biology</option>
                                </select>
                            </div>

                            <!-- <div class="form-group">
                                <label for="exampleFormControlSelect1">Course</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="course">
                                <option>Board</option>
                                <option>Entrance</option>                               
                                </select>
                            </div> -->

                            <div class="form-group">
                                    <label for="exampleInputEmail1">Alloted Hours</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" name="alloted_hours" aria-describedby="emailHelp">                                    
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>




                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Table</h5>
                           

                            <!-- <table class="table table-bordered yajra-datatable">
                                <thead>
                                    <tr>
                                        <th width="50">No</th>
                                        <th>Name</th>
                                        <th>Standard</th>
                                        <th>Subject</th>
                                        <th>Course</th>
                                        <th>Alloted Hours</th>
                                        <th>Balance Hours</th>
                                        <th width="100px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table> -->

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="50">No</th>
                                        <th>Name</th>
                                        <th>Standard</th>
                                        <th>Subject</th>
                                        <th>Course</th>
                                        <th>Alloted Hours</th>
                                        <th>Balance Hours</th>
                                        <!-- <th width="100px">Action</th> -->
                                    </tr>

                                </thead>
                                <tbody>
                                @foreach($tasklist as $t)
                                   <tr>
                                       <td>{{$t->id}}</td>
                                       <td>{{$t->name}}</td>
                                       <td>{{$t->standard}}</td>
                                       <td>{{$t->subject}}</td>
                                       <td>{{$t->course}}</td>
                                       <td>{{$t->alloted_hours}}</td>
                                       <td>{{$t->balance_hours}}</td>
                                       <!-- <td>{{$t->name}}</td>  -->
                                   </tr>
                                    @endforeach
                                </tbody>
                            </table>






                          </div>
                        </div>
                      </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>





@endsection


