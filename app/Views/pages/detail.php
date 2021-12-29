
<?= $this->extend('layout/template') ; ?>
    
<?= $this->Section('content'); ?>
    <!-- Detail SuperHero Start -->

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Meng-klik "View Detail" di atas akan membawamu ke halaman detail di bawah ini.
                    Ini jika kamu mengklik data milik Wolverine.
                </div>
                <hr/>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8">
                <h3>Task #2 Detail Superhero: Wolverine</h3>
            </div>
            <div class="col-md-4  text-right">
                <button class="btn btn-primary">Edit</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <td>ID</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="text" class="form-control" value="Wolverine"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <select class="form-control">
                                <option value="p" selected>Laki-laki</option>
                                <option value="l" >Perempuan</option>
                            </select>
                        </td>
                    </tr>
                </table>

                <table class="table table-bordered">
                    <thead>
                    <th>No</th>
                    <th>Skill</th>
                    <th>
                        <button class="btn btn-primary btn-small">Tambah Skill</button>
                    </th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bisa Sembuh Dengan Cepat</td>
                        <td>
                            <button class="btn btn-danger btn-small">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mempunyai Cakar Yang Lebih Kuat Dari Baja</td>
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
<!-- Detail SuperHero End-->

<hr class="hr100"/>

<!-- Detail SuperHero Start -->
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Ini data milik Storm. Kamu tau nggak sih kalo selain kuat, dia itu juga cantik banget? <3
                </div>
                <hr/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h3>Detail Superhero: Storm</h3>
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
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="text" class="form-control" value="Storm"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <select class="form-control">
                                <option value="p">Laki-laki</option>
                                <option value="l" selected>Perempuan</option>
                            </select>
                        </td>
                    </tr>
                </table>

                <table class="table table-bordered">
                    <thead>
                    <th>No</th>
                    <th>Skill</th>
                    <th>
                        <button class="btn btn-primary btn-small">Tambah Skill</button>
                    </th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bisa Terbang</td>
                        <td>
                            <button class="btn btn-danger btn-small">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bisa Membuat Hujan</td>
                        <td>
                            <button class="btn btn-danger btn-small">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Bisa Membuat Petir</td>
                        <td>
                            <button class="btn btn-danger btn-small">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Bisa Mengendalikan Angin dan Badai</td>
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
<!-- Detail SuperHero End-->
<?= $this->endSection(); ?>