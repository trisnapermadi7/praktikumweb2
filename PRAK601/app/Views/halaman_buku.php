<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">PRAK601</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <?php if (session()->get('logged_in')) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Selamat Datang, <?= htmlspecialchars(session()->get('username')); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login/logout'); ?>">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login'); ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('register'); ?>">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-black text-center">
                    <h4>Perpustakaan</h4>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('success'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('error'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <table class="table table-bordered table-striped table-hover">
                        <thead class="bg-success text-white text-center">
                            <tr>
                                <th scope="col">Judul</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tahun Terbit</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($posts) && is_array($posts)) : ?>
                                <?php foreach ($posts as $row) : ?>
                                    <tr>
                                        <td><?= htmlspecialchars($row['judul']); ?></td>
                                        <td><?= htmlspecialchars($row['penulis']); ?></td>
                                        <td><?= htmlspecialchars($row['penerbit']); ?></td>
                                        <td><?= htmlspecialchars($row['tahun_terbit']); ?></td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?= base_url('buku/delete/' . $row['id']); ?>" method="POST">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <a href="<?= base_url('buku/edit/' . $row['id']); ?>" class="btn btn-warning btn-sm me-1">Edit</a>
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="5" class="text-center">No post found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        <?= $pager->links(); ?>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <a href="<?= base_url('buku/create'); ?>" class="btn btn-primary btn-sm">Tambahkan Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('extra-js') ?>
<script>
    $(document).ready(function() {
        $('.pagination li').addClass('page-item');
        $('.pagination li a').addClass('page-link');
    });
</script>
<?= $this->endSection() ?>
