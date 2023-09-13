@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">User</h5>
                <button type="button" class="btn btn-success m-1"><a class="text-white" href="">Thêm</a></button>
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr class="text-uppercase">
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Id</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Tên</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Email</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Xác minh</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Mật Khẩu</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Thời gian tạo</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0"></h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">1</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">Admin</p>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">vinh11.dev@gmail.com</h6>
                                    <span class="fw-normal"></span>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-primary rounded-3 fw-semibold">Thành công</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 fs-4">SN2303080201373</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="fw-semibold mb-0">13/09/2023</p>
                                </td>
                                <td class="border-bottom-0">
                                    <button type="button" class="btn btn-primary m-1"><a class="text-white" href="">Sửa</a></button>
                                    <button type="button" class="btn btn-danger m-1"><a class="text-white" href="">Xóa</a></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection