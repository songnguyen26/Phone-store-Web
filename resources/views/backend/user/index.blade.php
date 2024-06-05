@extends('layout.admin')
@section('title','Quản lý sản phẩm')
@section('maincontent')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Quản lý thành viên</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Blank Page</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-12 text-right">
                    <a class="btn btn-sm btn-success" href="user_create.html">
                        <i class="fas fa-plus"></i> Thêm
                    </a>
                    <a class="btn btn-sm btn-danger" href="#">
                        <i class="fas fa-trash"></i> Thùng rác
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    
                    <tr>
                        <th class="text-center" style="width:30px;">#</th>
                        <th class="text-center" style="width:90px;">Hình</th>
                        <th>Họ tên</th>
                        <th>Điện thoại</th>
                        <th>Email</th>
                        <th>Quyền</th>
                        <th class="text-center" style="width:200px;">Chức năng</th>
                        <th class="text-center" style="width:30px;">ID</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $item)
                    <tr>
                        <td class="text-center">
                            <input type="checkbox" id="checkId" value="1" name="checkId[]">
                        </td>
                        <td class="text-center">
                            <img src="{{ asset('assets/image'. $item->image) }}" class="img-fluid" alt="{{ $item->image }}">
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->roles }}</td>
                        <td class="text-center">
                            @php
                                $args=['id'=>$item->id]
                            @endphp
                            <a href="{{ route('admin.user.status',$args) }}" class="btn btn-sm btn-success">
                                <i class="fas fa-toggle-on"></i>
                            </a>

                            <a href="{{ route('admin.user.show',$args) }}" class="btn btn-sm btn-info">
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.user.edit',$args) }}" class="btn btn-sm btn-primary">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="{{ route('admin.user.delete',$args) }}" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            {{ $item->id }}
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection