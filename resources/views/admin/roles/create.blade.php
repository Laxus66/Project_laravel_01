@extends('admin.layouts.app')
@section('title', 'Create Roles')

@section('content')
<div class="row">

    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Thêm Vai Trò</h5>
        <div class="card">
            <div class="card-body">
                <form action="{{route('role.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputEmail1">
                        @error('name')
                        <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tên Hiển Thị</label>
                        <input type="text" name="display_name" value="{{old('display_name')}}" class="form-control" id="exampleInputPassword1">
                        @error('display_name')
                        <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="selectMenu" class="form-label">Nhóm</label>
                        <select id="selectMenu" name="group" class="form-select">
                            <option disabled selected>[Lựa chọn nhóm]</option>
                            <option value="Hệ thống">Hệ Thống</option>
                            <option value="Quản lí">Quản lí</option>
                            <option value="Nhân viên">Nhân Viên</option>
                            <option value="Người Dùng">Người Dùng</option>
                            <option value="more">Khác</option>
                        </select>
                        @error('group')
                        <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="selectMenu" class="form-label">Phân Quyền</label>
                        <hr>

                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px; padding: 15px;">
                                    <h5 class="mb-3">Chọn tất cả quyền</h5>
                                    <hr>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input select-all" data-group="all" id="selectAll">
                                        <label class="form-check-label" for="selectAll">Chọn tất cả</label>
                                    </div>
                                </div>
                            </div>
                            @error('permissions_id')
                            <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                            @enderror
                            @foreach ($permissions as $groupName => $permission )
                            <div class="col-md-6 mb-4">
                                <div style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px; padding: 15px;">
                                    <h5 class="mb-3">{{ ucfirst($groupName) }}</h5>
                                    <hr>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input select-all" data-group="{{ $groupName }}" id="selectAll{{ $groupName }}">
                                        <label class="form-check-label" for="selectAll{{ $groupName }}">Chọn tất cả</label>
                                    </div>
                                    @foreach ($permission as $item)
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" name="permissions_id[]" class="form-check-input" id="{{$item->name}}" value="{{$item->id}}" data-group="{{ $groupName }}">
                                        <label class="form-check-label" for="{{$item->name}}">{{$item->display_name}}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <script>
                            var selectAllCheckboxes = document.querySelectorAll('.select-all');
                            selectAllCheckboxes.forEach(function(checkbox) {
                                checkbox.addEventListener('change', function() {
                                    var groupName = this.getAttribute('data-group');
                                    if (groupName === 'all') {
                                        var allCheckboxes = document.querySelectorAll('input[name="permissions_id[]"]');
                                        allCheckboxes.forEach(function(box) {
                                            box.checked = checkbox.checked;
                                        });
                                    } else {
                                        var groupCheckboxes = document.querySelectorAll('input[name="permissions_id[]"][data-group="' + groupName + '"]');
                                        groupCheckboxes.forEach(function(groupCheckbox) {
                                            groupCheckbox.checked = checkbox.checked;
                                        });
                                    }
                                });
                            });
                        </script>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                    <button type="button" class="btn btn-success"><a class="text-white" href="{{route('role.index')}}">Danh Sách</a></button>
                </form>
            </div>
        </div>
    </div>
    @endsection