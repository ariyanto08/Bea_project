@extends('super-admin.master')

@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-md-12 px-5 mt-5">
            <div class="card">
                <div class="header">
                    Data User
                </div>
                <div class="card-body">
                    <table class="table table-datatable">
                        <thead>
                            <th>No</th>
                            <th>Aksi</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Produk</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                        </thead>
                        <tbody>
                            {{-- @foreach ($list_user as $user) --}}
                            <tr>
                                {{-- <td>{{$loop->iteration}}</td> --}}
                                <td>
                                    <div class="btn-group">
                                        <a href="{{url('master-data/user')}}" class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
                                        <a href="{{url('master-data/user')}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        @include('super-admin.utils.delete',['url'=> url('master-data/user')])
                                    </div>
                                </td>
                                {{-- <td>{{$user->username}}</td>
                                <td>{{$user->nama}}</td>
                                <td>{{$user->product_count}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->jenis_kelamin_string}}</td> --}}
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
