<?php include_once('header.php'); ?>
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header row">
                    <div class="card-title h3 col-8">Tambah penjualan</div>
                    <div class="col-4">
                        <a href="?m=penjualan&s=view" class="btn btn-lg btn-secondary float-end">kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="?m=penjualan&s=save" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <div class="mb-3">
                                <input type="text" name="supplier" class="form-control" placeholder="supplier" required autofocus autocomplete="on">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="total" class="form-control" placeholder="total" required autofocus autocomplete="on">
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="id" value="<?= $r['id'] ?>">
                            <input type="reset" class="btn btn-secondary">&nbsp;
                            <input type="submit" class="btn btn-primary" name="simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>