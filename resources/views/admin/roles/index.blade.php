@extends('admin.layouts.app')
@section('title', 'Roles')
@section('content')
<div class="row">
    <div id="alert-container">
        @php
        $alerts = [
        'success' => session('success'),
        'secondary' => session('secondary'),
        'danger' => session('danger'),
        ];
        @endphp

        @foreach ($alerts as $key => $value)
        @if ($value)
        <div class="alert alert-{{ $key }}">
            {{ $value }}
        </div>
        @endif
        @endforeach
    </div>

    <script>
        var successAlertContainer = document.getElementById('success-alert-container');
        if (successAlertContainer) {
            var successAlert = successAlertContainer.querySelector('.alert');
            if (successAlert) {
                setTimeout(function() {
                    successAlert.style.display = 'none';
                }, 3000);
            }
        }
    </script>

    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Role</h5>
                <button type="button" class="btn btn-success m-1"><a class="text-white" href="{{route('role.create')}}">Thêm</a></button>
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
                                    <h6 class="fw-semibold mb-0">Tên hiển thị</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Nhóm</h6>
                                </th>
                                <!-- <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Tên Bảo Vệ</h6>
                                </th> -->
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Thời gian cập nhật gần nhất</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Hành Động</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">{{$role->id}}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">{{$role->name}}</p>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{$role->display_name}}</h6>
                                    <span class="fw-normal"></span>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-primary rounded-3 fw-semibold">{{$role->group}}</span>
                                    </div>
                                </td>
                                <!-- <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 fs-4">ADMIN</h6>
                                </td> -->
                                <td class="border-bottom-0">
                                    <p class="fw-semibold mb-0">{{$role->updated_at}}</p>
                                </td>
                                <!-- Modal -->
                                <td class="border-bottom-0">
                                    <div class="row text-left" role="group">
                                        <a href="{{ route('role.edit', $role->id) }}" class="col">
                                            <button class="btn w-100 btn-secondary m-1">Sửa</button>
                                        </a>
                                        <form class="col" id="deleteForm" action="{{ route('role.destroy', $role->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="col btn w-100 btn-danger m-1" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" value="{{$role->id}}">Xóa</button>
                                        </form>
                                    </div>
                                </td>
                                <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Bạn có chắc chắn muốn xóa?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Xóa</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$roles->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection