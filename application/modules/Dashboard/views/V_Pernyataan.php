<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= base_url('Dashboard/index/'); ?>">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Pernyataan</li>
    </ol>
</nav>
<div class="form-group">
    <div class="text-right">
        <a href="<?= base_url('Dashboard/Pernyataan/Add/'); ?>" class="btn btn-default"><i class="fas fa-plus"></i> Add New</a>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead class="text-center text-uppercase">
            <tr>
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
                            <a href="<?= base_url('Dashboard/Pernyataan/Detail/' . $id . ''); ?>" class="btn waves-effect waves-light btn-default btn-xs" title="Detail Anggota"><i class="fas fa-eye"></i></a>
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