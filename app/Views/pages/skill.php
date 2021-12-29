<?= $this->extend('layout/template') ; ?>
    
<?= $this->Section('content'); ?>


<!-- Daftar Skills Start -->
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Di bawah ini adalah Daftar Skill yang ada.<br/>
                    Kamu bisa mencari nama mereka melalui fasilitas pencarian di sebelah kanan.<br/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h3>Task #5 Daftar Skill</h3>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Pencarian" aria-describedby="basic-addon1">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Cari</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Terbang</td>
                        <td>
                            <a href="#" class="btn btn-primary">View Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Makan Beling</td>
                        <td>
                            <a href="#" class="btn btn-primary">View Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Bisa Tidur Tanpa Merem</td>
                        <td>
                            <a href="#" class="btn btn-primary">View Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Bisa Merem Tanpa Tidur</td>
                        <td>
                            <a href="#" class="btn btn-primary">View Detail</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<!-- Daftar Skills End -->



<?= $this->endSection(); ?>