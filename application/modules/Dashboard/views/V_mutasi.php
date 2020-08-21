<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="width:100%;">
        <thead class="text-center text-uppercase">
            <tr>
                <th>
                    nama
                </th>
                <th>
                    nrp / nip
                </th>
                <th>
                    pangkat
                </th>
                <th>
                    kesatuan
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
                    <td class="text-center">
                        <?= $t_peserta->nip; ?>
                    </td>
                    <td class="text-center">
                        <?= $t_peserta->pangkat; ?>
                    </td>
                    <td class="text-center">
                        <?= $t_peserta->kesatuan; ?>
                    </td>
                    <td>
                        <div class="text-center">
                            <?php $url = str_replace(['+', '/', '='], ['-', '_', '~'], $this->encryption->encrypt($t_peserta->id)); ?>
                            <div class="btn-group">
                                <a href="<?= base_url('Dashboard/Mutasi/Usulan/' . $url . ''); ?>" class="btn waves-effect waves-light btn-primary btn-xs" title="Usulan Mutasi"><i class="fas fa-edit"></i></a>
<!--                                <a href="<?= base_url('Dashboard/Mutasi/Detail/' . $url . ''); ?>" class="btn waves-effect waves-light btn-success btn-xs" title="Usulan Mutasi"><i class="fas fa-check-circle"></i></a>-->
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<script>
    $('table').dataTable();
</script>