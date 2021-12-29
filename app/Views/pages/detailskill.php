<?= $this->extend('layout/template') ; ?>
    
<?= $this->Section('content'); ?>



<!-- Detail Skill Start -->
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Ini adalah skill Bisa Tidur Tanpa Merem. Skill yang berbahaya. Musuh akan terkejut melihat skill ini.
                </div>
                <hr/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h3>Detail Skill: Bisa Tidur Tanpa Merem</h3>
            </div>
            <div class="col-md-4  text-right">
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-danger">Hapus</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <td>ID</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="text" class="form-control" value="Bisa Tidur Tanpa Merem"/>
                        </td>
                    </tr>
                </table>

                <table class="table table-bordered">
                    <thead>
                    <th>No</th>
                    <th>Heroes</th>
                    <th>
                        <button class="btn btn-primary btn-small">Tambah Hero</button>
                    </th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Wolverine</td>
                        <td>
                            <button class="btn btn-danger btn-small">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Storm</td>
                        <td>
                            <button class="btn btn-danger btn-small">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Proffesor X</td>
                        <td>
                            <button class="btn btn-danger btn-small">Hapus</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<!-- Detail Skill End-->



<?= $this->endSection(); ?>