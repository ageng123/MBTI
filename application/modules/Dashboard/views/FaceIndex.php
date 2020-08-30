<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= base_url('Dashboard/index/'); ?>">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Face Detect</li>
    </ol>
</nav>
<div class="card">
    <div class="card-body">
        <form action="">
            <div class="row">
                <div class="col-md-3"><input type="file"></div>
                <div class="col-md-5"></div>
                <div class="col-md-4"><button class="btn btn-secondary btn-block" type="button" id="search_face">Search</button></div>
            </div>
        </form>
    </div>
</div>
<div class="table-responsive hidden" id="tb_faceindex">
    <table class="table table-striped table-bordered table-hover">
        <thead class="text-center text-uppercase">
            <tr>
                <th>
                    Foto
                </th>
                <th>
                    nama
                </th>
                <th>
                    instansi
                </th>
                <th>
                    pangkat
                </th>
                <th>
                    NRP
                </th>
                <th>
                    action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peserta as $t_peserta) { ?>
                <tr>
                    <td>
                        <img src="<?= $t_peserta->foto ? base_url('resources/'.$t_peserta->foto.'?i=3') : base_url('resources/6.jpg?i=3') ; ?>" width="40" height='60' alt="">
                        <?= $t_peserta->foto; ?>
                    </td>
                    <td>
                        <?= $t_peserta->nama; ?>
                    </td>
                    <td>
                        <?= $t_peserta->kesatuan; ?>
                    </td>
                    <td>
                        <?= $t_peserta->pangkat; ?>
                    </td>
                    <td>
                        <?= $t_peserta->nip; ?>
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <?php $id = str_replace(['+', '/', '='], ['-', '_', '~'], $this->encryption->encrypt($t_peserta->id)); ?>
                            <a href="<?= base_url('Dashboard/Datafisik/Detail/' . $id . ''); ?>" class="btn waves-effect waves-light btn-default btn-xs" title="Detail Fisik Anggota"><i class="fas fa-edit"></i></a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<script>
    window.onload = function () {
        $('table').dataTable();
        var a = '<?= $this->session->flashdata('message') ?>';
        var b = '<?= $this->session->flashdata('error') ?>';
        if (a !== '') {
            toastr.success(a);
        } else if (b !== '') {
            toastr.error(b);
        } else {
            return false;
        }
    };
</script>