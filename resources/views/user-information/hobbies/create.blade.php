@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-0">
            <div class="card m-0">
            <div class="card shadow-custom">
                <div class="card-header h4 bg-custom-medium">
                    <i class="fa fa-plus-square header-icon"></i>
                    Add Hobbies
                </div>
                <div class="card-body bg-custom-light">
                    <form action="/hobbies" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="first_name">Hobby Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" id="name" placeholder="Hobby Name" class="form-control"/>
                            </div> 

                            <div class="form-group col-md-12 mb-0">
                               <button type="submit" class="btn btn-primary mb-0 pull-right">
                                   <i class="fa fa-plus-square"></i> Add
                                </button>
                            </div>
                            
                            


                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection