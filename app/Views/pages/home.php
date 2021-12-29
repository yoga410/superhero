<?= $this->extend('layout/template') ; ?>
    
<?= $this->Section('content'); ?>

    <div style="margin:0 0 30px 0; padding:20px; width:100%; background: #e9e9f9;" >
    <div >
        <p>
            Alhamdulilah kita mendapatkan sebuah projek baru dari Organisasi X-MEN. Mereka membutuhkan sebuah applikasi untuk men-data anggota-anggota superhero yang mereka miliki. Mohon dibantu ya teman-teman. Di bawah ini sudah ada mock-upnya, tapi belum berfungsi. Teman-teman tinggal isi saja codenya supaya berfungsi.
            
        </p>
        <p>
            Tolong gunakan github ya. Setiap 1 task selesai, silahkan di-commit push. Lalu share URL github kalian ke email hrd@jdteknologi.com.
            
            <b>Terima kasih :)</b>
        </p>
    </div>
</div>

<div class="outer-wrapper">

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h1>X-MEN</h1>
        <p>
            Ini adalah X-MEN, ini adalah tentang para pahlawan pembela bumi.
        </p>
    </div>
    <div class="col-md-2"></div>

</div>

<hr class="hr100"/>

<!-- Daftar SuperHero Start -->


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Di bawah ini adalah Daftar orang-orang yang super hebat itu.<br/>
                    Kamu bisa mencari nama mereka melalui fasilitas pencarian di sebelah kanan.<br/>
                    Kita beruntung memiliki data-data mereka. Jangan sampai jatuh ke tangan musuh, ini akan mengubah dunia..
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h3>Task #1 Daftar Superhero</h3>
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
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                    </thead>                    
                    <tbody>
                    <?php foreach($superhero as $sh):?>
                    <tr>
                        <td><?= $sh['id']; ?></td>                        
                        <td><?= $sh['nama']; ?></td>
                        <td><?= $sh['j_kelamin']; ?></td>
                        <td>
                            <a href="/pages/detail<?= $sh['id'] ; ?>" class="btn btn-primary">View Detail</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    
                    <?php endforeach;?>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<!-- Daftar SuperHero End -->

<hr class="hr100"/>



<hr class="hr100"/>

<!-- Simulasi Start -->
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    <p>
                    Nah, ini adalah simulasi jika <stromg>Wolverine & Storm</stromg> menikah.
                    Maka anak-anak mereka kemungkinan akan mewarisi Skill dari Ayah dan Ibunya.
                    Kamu bisa mengganti-ganti Suami / Istri untuk melihat Skill yang akan dimiliki oleh anak-anaknya.
                    </p>

                    <p>
                    <i>Tentunya Laki-laki hanya bisa menikah dengan Perempuan ya, awas jangan sampai jenis kelaminnya sama! Jeruk makan jeruk dong :D</i>
                    </p>
                </div>
                <hr/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h3>Task #3 Simulasi Jika Superhero Menikah</h3>
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
                        <td>Suami</td>
                        <td>
                            <select class="form-control">
                                <option value="1" selected>Wolverine</option>
                                <option value="2">Professor X</option>
                                <option value="3">Beast</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Istri</td>
                        <td>
                            <select class="form-control">
                                <option value="p">Raven</option>
                                <option value="l" selected>Storm</option>
                            </select>
                        </td>
                    </tr>
                </table>

                <h5>Maka Anaknya Kemungkinan Akan Memiliki Skill Berikut:</h5>
                <table class="table table-bordered">
                    <thead>
                    <th>No</th>
                    <th>Skill</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bisa Terbang</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bisa Membuat Hujan</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Bisa Membuat Petir</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Bisa Mengendalikan Angin dan Badai</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Bisa Sembuh Dengan Cepat</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Mempunyai Cakar Yang Lebih Kuat Dari Baja</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>

<hr class="hr100"/>

<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
        <h3>Task #4 Exporting Data</h3>
        
        <p>
            Data-data di atas harus bisa di export dalam bentuk Excel / PDF. Akan sangat mudah jika teman2 menggunakan Datatable.
        </p>
        
        <button class="btn btn-primary">Export To Excel</button>
        <button class="btn btn-primary">Export To PDF</button>

        <hr/>

        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    <p>
                        Kamu juga bisa meng-export data hasil simulasi ini ke EXCEL / PDF. Ingat, data ini rahasia. Jangan sampai jatuh ke tangan musuh ya! Berbahaya!
                    </p>
                </div>
                <hr/>
            </div>
        </div>
    </div>
    <div class="col-md-2">

    </div>
</div>
<!-- Simulasi End-->



<hr class="hr100"/>


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


<hr class="hr100"/>

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
</div>

<?= $this->endSection(); ?>
