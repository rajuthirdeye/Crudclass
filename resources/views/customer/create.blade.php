@extends('customer.master')
@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-2 pt-4">
                    <h3>Add New Customer</h3>
                    <form action="{{ url('/') }}" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="firstname" id="firstname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lastname" id="lastame" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="number" name="age" id="age" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Upload Images</label>
                            <input type="file" name="avatar" id="avatar" class="form-control">
                        </div>
                        <input type="submit" value="Save" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
