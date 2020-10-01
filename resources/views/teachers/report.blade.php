<!DOCTYPE html>
<html>
<head>
    <title>Отправить отчет</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
</head>
<style type="text/css">
    .container{
        margin-top:150px;
    }
    h4{
        margin-bottom:30px;
    }
</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                <div class="col-md-12 text-right mb-5">
                    <a class="btn btn-success" href="javascript:void(0)" id="createNewReport">Отправить отчет</a>
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Педагог</th>
                                <th>Квантум</th>
                                <th>Детей</th>
                                <th>Дата</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
   
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="teacherReportForm" name="teacherReportForm" class="form-horizontal">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Педагог</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="teacher_full_name" name="teacher_full_name" placeholder="Enter teacher Name" value="" maxlength="50" required="">
                        </div>
                    </div>
     
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Квантум</label>
                        <div class="col-sm-12">
                            <input id="inputsKvantum" name="inputsKvantum" required="" placeholder="Enter Kvantums" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Количество детей</label>
                        <div class="col-sm-12">
                            <input id="student_count" name="student_count" required="" placeholder="Enter Количество" class="form-control">
                        </div>
                    </div>

                    {{-- <div class="form-group">
                        <label class="col-sm-2 control-label">Дата</label>
                        <div class="col-sm-12">
                            <input id="created_at" type="date" name="created_at" required="" placeholder="Enter Дату" class="form-control">
                        </div>
                    </div> --}}
      
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Отправить отчет</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
    
<script type="text/javascript">
    $(function () {
     
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('teachers_report.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'teacher_full_name', name: 'teacher_full_name'},
            {data: 'inputsKvantum', name: 'inputsKvantum'},
            {data: 'student_count', name: 'student_count'},
            // {data: 'report_date_input', name: 'report_date_input'},
            {data: 'created_at', name: 'created_at'},
        ]
    });
     
    $('#createNewReport').click(function () {
        $('#saveBtn').val("create-report");
        $('#id').val('');
        $('#teacherReportForm').trigger("reset");
        $('#modelHeading').html("Формирование нового отчета");
        $('#ajaxModel').modal('show');
    });
    
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Обработка..');
    
        $.ajax({
            data: $('#teacherReportForm').serialize(),
            url: "{{ route('teachers_report.store') }}",
            type: "POST",
            dataType: 'json',
            success: function (data) {
                $('#teacherReportForm').trigger("reset");
                $('#ajaxModel').modal('hide');
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
                $('#saveBtn').html('Сохранить изменения');
            }
        });
    });
});
</script>
</html>