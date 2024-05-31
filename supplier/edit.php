<?php include_once('header.php'); ?>
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header row">
                    <div class="card-title h3 col-8">Edit Data Jurusan</div>
                    <div class="col-4">
                        <a href="?m=supplier&s=view" class="btn btn-lg btn-secondary float-end">kembali</a>
                    </div>
                </div>

                <?php
                include_once('setting.php');
                $id = $_GET['id'];
                $sql = "SELECT * FROM supplier WHERE id='$id'";
                $result = mysqli_query($koneksi, $sql);
                $r = mysqli_fetch_assoc($result);
                ?>
                <div class="card-body">
                    <form action="?m=supplier&s=update" method="post">
                        <div class="mb-3">
                            <input type="text" name="nama" class="form-control" value="<?= $r['nama']; ?>" placeholder="Nama " required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="alamat" class="form-control" value="<?= $r['alamat']; ?>" placeholder="alamat" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="hp" class="form-control" value="<?= $r['hp']; ?>" placeholder="hp" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="email" class="form-control" value="<?= $r['email']; ?>" placeholder="email" required>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="id" value="<?= $r['id'] ?>">
                            <input type="reset" class="btn btn-secondary">&nbsp;
                            <input type="submit" class="btn btn-primary" name="update" value="update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>