@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class=" col-md-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h1 class="text-center font-weight-light my-4">Edit author </h1></div>
                    <div class="card-body">
                        <form action="{{ route('update.author') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="product_id" value="{{ $products->id }}">

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" value="{{$products->author_name}}" name="name" type="text" placeholder="Enter Product name" />

                                    </div>
                                </div>

                            <div class="row mb-3">
                                <div class="col-md-12">

                                    <div class="form-floating mb-3 mb-md-0">
                                        {{--                                        <input class="form-control" id="inputPasswordConfirm" name="product_price" type="text" placeholder="Enter Product Price" />--}}
                                        <label for=""  ></label><textarea class="form-control"  name="description" id="" cols="30" rows="10">{{ $products->product_description }}</textarea>
                                        <label for="inputPasswordConfirm">Description</label>

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">

                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control "  id="inputPasswordConfirm" name="image" type="file" placeholder="Enter Product IMage" />
                                        <img src="{{ asset($products->image) }}" alt="" style="height: 50px; width: 50px;" >

{{--                                        <label for="inputPasswordConfirm">Product Image</label>--}}


                                    </div>
                                </div>
                            </div>

                            {{--                            <div class="row mb-3">--}}
                            {{--                                <div class="col-md-12">--}}
                            {{--                                    <div class="form-floating mb-3 mb-md-0">--}}
                            {{--                                        <input class="form-control" id="inputPasswordConfirm" name="product_status" type="text" placeholder="Enter Product status" />--}}
                            {{--                                        <label for="inputPasswordConfirm">Product Status</label>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="row mb-3">--}}
                            {{--                                <div class="col-md-12">--}}
                            {{--                                    <div class="form-floating mb-3 mb-md-0">--}}
                            {{--                                        <input class="form-control" id="inputPasswordConfirm" name="product_status" type="text" placeholder="Enter Product status" />--}}
                            {{--                                        <label for="inputPasswordConfirm">Product Status</label>--}}

                            {{--                                        <input type="submit" class="form-control btn btn-success" name="product_submit" value="Submit">--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}


                            <div class="mt-4 mb-0">
                                {{--                                <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Create Account</a></div>--}}
                                <div class="d-grid"><input type="submit" class="form-control btn btn-success" name="product_submit" value="Submit"></div>
                            </div>
                        </form>
                    </div>
                    {{--                    <div class="card-footer text-center py-3">--}}
                    {{--                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>


@endsection

