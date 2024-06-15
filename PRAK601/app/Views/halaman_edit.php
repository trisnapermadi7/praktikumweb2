<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title"><?= $title ?></h5>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <?= validation_list_errors() ?>
                    <?= form_open('buku/update/'. $post['id']); ?>
                        <input type="hidden" name="_method" value="PUT">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul">
                        </div>
                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Masukkan Penulis">
                        </div>
                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukkan Penerbit">
                        </div>
                        <div class="mb-3">
                            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                            <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Masukkan Tahun Terbit">
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-block" type="submit">Perbarui</button>
                            <a href="<?= base_url('/') ?>" class="btn btn-secondary btn-block mt-3">Kembali</a>
                        </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('extra-js') ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#post_content').summernote({
            tabsize: 2,
            height: 500
        });
    })
</script>
<?= $this->endSection() ?>
