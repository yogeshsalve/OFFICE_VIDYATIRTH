@extends('layouts.auth')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lecture Report</h5>
                            
                            <form>
                            <div class="row mb-3">
                                <div class="col">
                                <input type="text" class="form-control" placeholder="Standard" value="{{$taskdata->standard}}">
                                </div>
                                <div class="col">
                                <input type="text" class="form-control" placeholder="Subject" value="{{$taskdata->subject}}">
                                </div>
                                <div class="col">
                                <input type="text" class="form-control" placeholder="Course" value="{{$taskdata->course}}">
                                </div>
                            </div>
                            
                            
                                <!-- <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Course</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div> -->
                            

                                <div class="row mb-3">
                                    <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">Select Date</label>
                                    <input type="date" class="form-control" placeholder="Date">
                                    </div>
                                    <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">Start Time</label>
                                    <input type="time" class="form-control" placeholder="From">
                                    </div>
                                    <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">End Time</label>
                                    <input type="time" class="form-control" placeholder="to">
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">Duration in Hrs</label>
                                    <input type="text" class="form-control" placeholder="Date">
                                    </div>
                                    <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">Alloted Hours.</label>
                                    <input type="text" class="form-control" placeholder="From">
                                    </div>
                                    <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">Balance Hours</label>
                                    <input type="text" class="form-control" placeholder="From">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Additional Information(If Any)</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </form>                           
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