<div class="row">
    <div class="col-lg-12 col-xlg-12 col-md-12">
        <?php cardIdentity($peserta[0]) ?>
    </div>
    <!-- <div class="col-12">
    </div> -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <p>Data Fisik Detail</p>
            </div>
            <div class="card-body">

            </div>
            <div class="card-footer">
                <button class="btn btn-md btn-danger">Cancel</button>
                <a href="<?= site_url('Dashboard/Datafisik/edit?session_id=') ?><?= encode($peserta[0]->id) ?>" class="btn btn-md btn-success">Edit</a>
            </div>
        </div>
    </div>
</div>
