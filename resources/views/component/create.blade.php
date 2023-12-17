
@extends('include.master')
@section('content')
<div class="container-fluid"> 
        <div class="row justify-content-center"> 
            <div class="col-sm-8"> 
                <div class="card mt-3 p-3"> 
                    <form action="" method="post">
                        @csrf 
                        <div class="form-group"> 
                            <label> Name: </label>
                            <input type="text" name="name" class="form-control">
                        </div>
                    </form> 

                </div>
            </div>
        </div>





@endsection

