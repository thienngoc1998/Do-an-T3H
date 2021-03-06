@extends('Admin.index')
@section('bodycontent')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Quản lý danh mục </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="dataTable_length">
                                    <button class="btn btn-success btn-sm add-modal" style="margin-top: 25px;">Thêm mới</button>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="dataTable_filter" class="dataTables_filter" style="float: right;">
                                    <label>Search:
                                        <input type="search" class="form-control form-control-sm" placeholder=""
                                               aria-controls="dataTable">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên danh mục </th>
                                        <th>Mô tả </th>
                                        <th>Trạng thái </th>
                                        <th>Sửa </th>
                                        <th>Xóa</th>
                                    </tr>
                                    </thead>
                                    <tbody id="addtr">
                                    @foreach($list as $item )
                                    <tr id="{{$item->id}}">
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>
                                            @if($item->active==1)
                                                <p>Hiện</p>
                                            @else
                                                <p>Ẩn </p>
                                             @endif
                                        </td>
                                        <td><button class="edit-modal btn btn-primary btn-sm" data-id="{{$item->id}}" data-name="{{$item->name}}" data-desc="{{$item->description}}" data-active="{{$item->active}}"> Sửa </button></td>
                                        <td><button class="delete-modal btn btn-danger btn-sm" id="id_delete" onclick="DeleteCategory({{$item->id}})" > Xóa </button></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="addModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thêm mới </h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Tên danh mục :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title_add" autofocus>
                                <p class="errorTitle text-center alert alert-danger " style="display:none;"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="content">Mô tả :</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="content_add" cols="40" rows="5"></textarea>
                                <p class="errorContent text-center alert alert-danger" style="display:none;"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label ">Trạng thái :</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" value="1" name="active">Option 1
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" value="0" name="active">Option 2
                                </label>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success add" data-dismiss="modal">
                            <span id="" class='glyphicon glyphicon-check'></span> Add
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sửa danh mục </h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Tên danh mục :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title_edit" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="content">Mô tả :</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="content_edit" cols="20" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label ">Trạng thái :</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" value="1" name="active_edit">Hiện
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" value="0" name="active_edit">Ẩn
                                </label>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success editcategory" id="id_edit" data-id="" data-dismiss="modal" >
                            <span id="" class='glyphicon glyphicon-check'></span> Sửa
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Thoát
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        $(document).on('click', '.add-modal', function() {
            $('#addModal').modal('show');
        });
        $('.modal-footer').on('click', '.add', function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
           let name= $('#title_add').val();
           let desc =$('#content_add').val();
           let active =$("input[name='active']:checked"). val();
           $.ajax({
                type: 'POST',
                url: 'admin/Category/category',
                data: {
                    name:name,
                    description:desc,
                    active:active
                }
                })
               .done(function (Data) {
                   toastr.success('Thêm  thành công rồi ', 'Success Alert', {timeOut: 5000});
                   $('#addModal').modal('hide');
                   let active = "";
                   if (Data.active == 1) {
                       active = "<p style=\"color:green;\" id=\"status\"> Hiện </p>";
                   } else {
                       active = " <p style=\"color:red;\" id=\"status\"> Ẩn  </p>";

                   }
                   $('#addtr').append(
                       '<tr class="text-center" id="' + Data.id + '">' +
                       '<td>'+Data.id+'</td>' +
                       '<td>'+Data.name+'</td>' +
                       '<td>' + active +
                       '</td>' +
                       '<td><button class="edit-modal btn btn-info btn-sm edit-modal" id="idset" data-id="' + Data.id + '" data-name="' + Data.name + '"   data-active="' + Data.active + '">Sửa</button></td>' +
                       '<td><button class="delete-modal btn btn-warning"  data-id="' + Data.id + '" data-name="' + Data.name + '"   data-active="' + Data.active + '" >Xóa</button></td>' +
                       '</tr>'
                   )

            });
        });

        function DeleteCategory(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var check=confirm('Bạn có muốn xóa không ?');
              if (check==true){
                  $.ajax({
                      type: 'get',
                      url: 'admin/Category/category/' + id,
                      dataType: 'json',
                      success: function(data) {
                          toastr.success('Xóa thành công', 'Success Alert', {timeOut: 5000});
                          $('#'+id).remove();
                      }
                  });
              }

        }
        $(document).on('click', '.edit-modal', function() {
            $('#title_edit').val($(this).data('name'));
            $('#content_edit').val($(this).data('desc'));
            if ($(this).data('active') == 0) {
                $('input:radio[name="active_edit"][value="0"]').prop('checked', true);
            } else {
                $('input:radio[name="active_edit"][value="1"]').prop('checked', true);
            }
            $('#id_edit').attr('data-id', $(this).data('id'));
            $('#editModal').modal('show');
        });
        $('.editcategory').on('click', function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            let id = document.getElementById('id_edit').attributes[3].value;
            let name = $('#title_edit').val();
            let desc = $('#content_edit').val();
            let active = $("input[name='active_edit']:checked").val();
            $.ajax({
                url: 'admin/Category/category/' + id,
                type: 'put',
                dataType: 'json',
                data: {name: name,description:desc, active: active},
            })
                .done(function (Data) {
                 console.log(Data);
                })
                .fail(function (Err) {

                })
                .always(function () {
                    console.log("complete");
                });
        });
    </script>
@endsection

