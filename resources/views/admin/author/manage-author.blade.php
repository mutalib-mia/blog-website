@extends('admin.master')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4 text-center">Product Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        {{--        <div class="card mb-4">--}}
        {{--            <div class="card-body">--}}
        {{--                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the--}}
        {{--                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>--}}
        {{--                .--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Product Table
            </div>
            <div class="card-body">
                <table id="datatablesSimple" >
                    <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Author Name</th>

                        <th>Author Bio</th>
                        <th>Image</th>
                        <th>status</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    {{--                    <tfoot>--}}
                    {{--                    <tr>--}}
                    {{--                        <th>Name</th>--}}
                    {{--                        <th>Position</th>--}}
                    {{--                        <th>Office</th>--}}
                    {{--                        <th>Age</th>--}}
                    {{--                        <th>Start date</th>--}}
                    {{--                        <th>Salary</th>--}}
                    {{--                    </tr>--}}
                    {{--                    </tfoot>--}}
                    <tbody>
                    @php $i=1 @endphp

                    @foreach($products as $product)

                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $product->author_name }}</td>

                            <td>{{ $product->description}}</td>
                            <td>
                                <img src="{{ asset($product->image) }}" alt="" style="height: 50px ; width: 50px">
                            </td>
                            <td>{{ $product->status==1?'published':'unpublished'}}</td>

                            <td>

                                @if($product->status==1)

                                    <a href="{{ route('status',['id'=>$product->id]) }}" class="btn btn-warning" onclick="return confirm('Are You Sure unPublished it')">unPublished</a>

                                @else
                                    <a href="{{ route('status',['id'=>$product->id]) }}" class="btn btn-primary" onclick="return confirm('Are You Sure Published it')">Published</a>


                                @endif
                            </td>

                            <td>
                                <a href="{{ route('edit.author',['id'=>$product->id]) }}" class="btn btn-primary">Edit</a>

                                <form action="{{ route('delete.author') }}" method="post" id="delete" >
                                    @csrf

                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="submit" value="Delete" class="btn-danger btn" onclick=" return confirm('Are You Sure!!') ">

                                </form>

                            </td>



                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

