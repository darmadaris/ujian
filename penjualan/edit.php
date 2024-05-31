<?php include_once('header.php'); ?>
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header row">
                    <div class="card-title h3 col-8">penjualan</div>
                    <div class="col-4">
                        <a href="?m=penjualan&s=view" class="btn btn-lg btn-secondary float-end">kembali</a>
                    </div>
                </div>

                <?php
                include_once('setting.php');
                $id = $_GET['id'];
                $sql = "SELECT * FROM penjualan WHERE id='$id'";
                $result = mysqli_query($koneksi, $sql);
                $r = mysqli_fetch_assoc($result);
                ?>
                <div class="card-body">
                    <form action="?m=penjualan&s=update" method="post">
                        <div class="mb-3">
                            <input type="text" name="supplier" class="form-control" value="<?= $r['supplier_id']; ?>" placeholder="supplier" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="total" class="form-control" value="<?= $r['total']; ?>" placeholder="total" required>
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