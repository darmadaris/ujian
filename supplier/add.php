<?php include_once('header.php'); ?>
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header row">
                    <div class="card-title h3 col-8">Tambah Data Jurusan</div>
                    <div class="col-4">
                        <a href="?m=supplier&s=view" class="btn btn-lg btn-secondary float-end">kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="?m=supplier&s=save" method="post">
                        <div class="mb-3">
                            <input type="text" name="nama" class="form-control" placeholder="nama" required autofocus autocomplete="on">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="alamat" class="form-control" placeholder="alamat" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="hp" class="form-control" placeholder="hp" required autofocus autocomplete="on">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="email" class="form-control" placeholder="email" required autofocus autocomplete="on">
                        </div>
                        <div class="mb-3">
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