<!-- Modal -->
<div class="modal fade" id="ModalMutasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-muted">Nomor Mutasi</p>
        <p id="nomor_surat"></p>
        <p class="text-muted">Nama</p>
        <p id="nama"></p>
        <p class="text-muted">Pangkat / Jabatan</p>
        <p id="pangkat"></p>
        <p class="text-muted">Tanggal Mutasi</p>
        <p id="tanggal"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="print_button" onclick="MutasiServices.ACTION('print', null)">Print</button>
      </div>
    </div>
  </div>
</div>