@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <h3>Update Product Form</h3>

                <div class="card-body">
                    <form action="/updateproduct/{{ $editproduct->id }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="name">name</label>
                                <input type="text" name="name" id="name" value="{{ $editproduct->name }}" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="price">price</label>
                                    <input type="text" name="price" id="price"  value="{{ $editproduct->price }}" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="quantity">quantity</label>
                                    <input type="text" name="quantity" id="quantity" value="{{ $editproduct->quantity }}" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <input type="submit" class="btn btn-success" value="Update Product" name="add" id="add">
                                </div>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection