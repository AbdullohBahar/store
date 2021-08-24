<?php include('layouts/header.php');
include('layouts/navbar.php');
include('layouts/sidebar.php')
?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Produk</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="create.php" class="btn btn-primary ml-auto">Tambah Produk</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tr>
                                        <th>#</th>
                                        <th>Foto</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="./../assets/img/upload/download.jpeg" class="w-50"></td>
                                        <td>Menara</td>
                                        <td>
                                            <div class="badge badge-success">Rp. 20.000,00</div>
                                        </td>
                                        <td><a href="#" class="btn btn-info">Edit</a> <a href="#" class="btn btn-danger">Hapus</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php include('layouts/footer.php') ?>