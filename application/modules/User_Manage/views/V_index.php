<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="width:100%;">
        <thead class="text-center text-uppercase">
            <tr>
                <th>username</th>
                <th>status</th>
                <th>action</th>
            </tr>
        </thead>
    </table>
</div>
<script>
    window.onload = function () {
        $('table').dataTable({
            "ServerSide": true,
            "order": [[0, "asc"]],
            "paging": true,
            "ordering": true,
            "info": true,
            "processing": true,
            "deferRender": true,
            "scrollCollapse": true,
            "scrollX": true,
            "scrollY": "400px",
            "ajax": {
                dataSrc: '',
                method: "GET",
                async: false,
                url: "<?= base_url('User_Manage/Get_User/'); ?>"
            },
            columns: [
                {data: 'uname'},
                {data: 'status', className: "text-center text-uppercase"},
                {
                    data: null, className: "text-center",
                    "render": function (data) {
                        return '<a href="" class="btn waves-effect waves-light btn-default btn-xs" title="Reset password to default"><i class="fas fa-key"></i></a>';
                    }
                }
            ]
        });
    };
</script>