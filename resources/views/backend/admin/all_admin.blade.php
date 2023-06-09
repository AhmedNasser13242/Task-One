@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-3">جميع مستخدمين</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="p-0 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">جميع مستخدمين</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('add.admin') }}" class="btn btn-primary">اضف مستخدم</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>صورة </th>
                                <th>اسم </th>
                                <th>ايميل </th>
                                <th>رقم </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alladminuser as $key => $item)
                                <tr>
                                    <td> {{ $key + 1 }} </td>
                                    <td> <img
                                            src="{{ !empty($item->photo) ? url('upload/admin_images/' . $item->photo) : url('upload/no_image.jpg') }}"
                                            style="width: 50px; height:50px;"> </td>

                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>


                                    <td>
                                        <a href="{{ route('edit.admin.role', $item->id) }}" class="btn btn-info">تعديل</a>
                                        <a href="{{ route('delete.admin.role', $item->id) }}" class="btn btn-danger"
                                            id="delete">ازالة</a>

                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sl</th>
                                <th>صورة </th>
                                <th>اسم </th>
                                <th>ايميل </th>
                                <th>رقم </th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>



    </div>
@endsection
