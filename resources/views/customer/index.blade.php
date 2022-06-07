@extends('customer.master')
@section('content')

<section>
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-6">
                <h2>Customer Details</h2>
            </div>
            <div class="col-md-6">
                <a href="{{route('create')}}" class="btn btn-success btn-sm  align-content-end" title="Add New Contact">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New Customer
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered align-content-center">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Age</th>
                            {{-- <th>Images</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->firstname }}</td>
                                <td>{{ $item->lastname }}</td>
                                <td>{{ $item->age }}</td>
                                {{-- <td>{{ $item->avatar }}</td> --}}
                                <td>
                                    <a href="#"><button class="btn btn-info btn-sm">view</button></a>
                                    <a href="#"><button class="btn btn-danger btn-sm">Delete</button></a>
                                    <a href="#"><button class="btn btn-success btn-sm">update</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

