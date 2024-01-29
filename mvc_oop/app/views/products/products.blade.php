@extends('layouts.admin')
@section('content')
    @auth 
        <span> thaivm2 </span>
    @endauth

    @guest
        <button>Đăng nhập</button>
    @endguest
    <a href="{{route('/login')}}">Login</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Status</th>
            <th>Action</th>
        <tr>
        @foreach ($products as $product)
            <tr>
                <td> {{$product['id']}}</td>
                <td> {{$product['name']}} </td>
                <td> {{$product['description']}}</td>
                <td> {{$product['price']}}</td>
                <td> {{$product['status']}} </td>
                <td>
                    <button><a href="{{route('/products/'.$product['id'].'/edit')}}">Edit</a></button>
                    <button><a href="">Delete</a></button>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
