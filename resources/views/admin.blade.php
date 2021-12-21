

@extends('layouts.auth')

@section('content')

<div class="container">
 
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Register Users
                        </button>
                        <ul class="dropdown-menu " aria-labelledby="btnGroupDrop1">
                          <li><a class="dropdown-item" href="{{'/registerteacher'}}">Teacher</a></li>
                          
                         
                          
                          <li><a class="dropdown-item disabled" href="#">Student</a></li>
                        </ul>
                      </div>

                      <a href="{{'/teachertasks'}}"> <button type="button" class="btn btn-success m-3" >Allot Task to Teacher</button></a>
  
  <br>
  <br>
                    
                    
                    
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Register Teacher</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Register Student</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
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