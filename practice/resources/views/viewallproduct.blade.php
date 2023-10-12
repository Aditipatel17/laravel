@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <a href="addproduct">Add Product</a>
                <!-- {{ $allproduct }} -->
                <div class="card-body">
                    <h3 class="text-center">All Product</h3>
                    <table class="table table-striped">
                        <thead>

                            <tr>
                                <th>name</th>
                                <th>price</th>
                                <th>quantity</th>
                                <th>action</th>
                            </tr>
                            @foreach($allproduct as $data)
                            <tr>
                                <td> {{ $data['name'] }} </td>
                                <td> {{ $data['price'] }} </td>
                                <td> {{ $data['quantity'] }} </td>
                                <td>
                                    <a href="editproduct/{{ $data['id'] }}" class="btn btn-primary">Edit</a> &nbsp;&nbsp;
                                    <a href="deleteproduct/{{ $data['id'] }}" class="btn btn-danger">Delete</a>

                                </td>
                            </tr>

                            @endforeach

                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection