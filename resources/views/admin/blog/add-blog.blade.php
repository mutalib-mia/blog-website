@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class=" col-md-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h1 class="text-center font-weight-light my-4">Add Blog </h1></div>
                    <div class="card-body">
                        <form action="{{ route('new.blog') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" name="category_name" type="text" placeholder="Enter Product name" />
                                        <label for="inputFirstName">Category name</label>
                                    </div>
                                </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">

                                        <select name="category_id" class="form-control" id="category_id">
                                            <option value="">Select A author</option>
                                            <option value="">Rimel Vai</option>
                                        </select>

                                    </div>
                                </div>
                                {{--                                <div class="col-md-6">--}}
                                {{--                                    <div class="form-floating">--}}
                                {{--                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />--}}
                                {{--                                        <label for="inputLastName">Last name</label>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>
{{--                            <div class="form-floating mb-3">--}}
{{--                                <input class="form-control" id="inputEmail" type="text" name="category_name" placeholder="Enter Category Name" />--}}
{{--                                <label for="inputEmail">Category Name</label>--}}
{{--                            </div>--}}
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control"  id="inputPassword" type="text" name="title" placeholder="Enter Brand Name" />
                                        <label for="inputPassword">Title</label>
                                    </div>
                                </div>
                            </div>

{{--                            <div class="row mb-3">--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <div class="form-floating mb-3 mb-md-0">--}}
{{--                                        <input class="form-control" id="inputPasswordConfirm" name="slug" type="text" placeholder="Enter Product Price" />--}}
{{--                                        <label for="inputPasswordConfirm">Slug</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="row mb-3">
                                <div class="col-md-12">

                                    <div class="form-floating mb-3 mb-md-0">
                                        {{--                                        <input class="form-control" id="inputPasswordConfirm" name="product_price" type="text" placeholder="Enter Product Price" />--}}
                                        <label for=""></label><textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                                        <label for="inputPasswordConfirm"> Description</label>

                                    </div>
                                </div>
                            </div>


                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputPasswordConfirm" name="date" type="date" placeholder="Enter Product Price" />

                                        </div>
                                    </div>
                                </div>


                            <div class="row mb-3">
                                <div class="col-md-12">

                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control " id="inputPasswordConfirm" name="image" type="file" placeholder="Enter Product IMage" />
                                        <label for="inputPasswordConfirm">Image</label>


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
