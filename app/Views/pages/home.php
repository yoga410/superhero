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
                            <a href="/pages/detail" <?= $sh['id'] ; ?> class="btn btn-primary">View Detail</a>
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


</div>

<?= $this->endSection(); ?>
