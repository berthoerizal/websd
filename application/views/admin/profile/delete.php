<a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#delModal<?php echo $profile->gambar; ?>">
    <i class="fa fa-trash"></i>
    Hapus
</a>
<!-- Tambah Modal-->
<div class="modal fade" id="delModal<?php echo $profile->gambar; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus gambar</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Yakin ingin menghapus Gambar?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                <a href="<?php echo base_url('profile/destroy/' . $profile->gambar); ?>" class="btn btn-danger btn-sm">Hapus</a>
            </div>
        </div>
    </div>
</div>