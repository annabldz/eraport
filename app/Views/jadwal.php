<main id="main" class="main">

<div class="pagetitle">
    <h1>Table Jadwal</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item">Data Sekolah</li>
            <li class="breadcrumb-item active">Data Jadwal</li>
        </ol>
        </nav>
</div>

<section class="section">
    <div class="row">
    <div class="col-lg-12">
    <div class="card">
    <div class="card-body">
        <pre></pre>
        <button class="btn btn-success mb-3"><a href="/home/inputjadwal" class="text-white">Tambah</a></button>


            <table class="table datatable" border="1" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col" width="3%">No</th>
                    <th scope="col">Nama Rombel</th>
                    <th scope="col">Nama Mapel</th>
                    <th scope="col">Nama Guru</th>
                    <th scope="col">Blok</th>  
                    <th scope="col">Semester</th>
                    <th scope="col">Tahun Ajaran</th>  
                    <th scope="col">Sesi</th>
                    <th scope="col">Jam</th>
                    <th scope="col">Aksi</th>         
                </tr>
            </thead>

            <tbody>
            <?php 
            $ms = 1;
            foreach ($anjas as $key => $value) {
            ?>
                <tr>
                    <th scope="row"><?= $ms++ ?></th>
                    <td><?= $value->nama_rombel ?></td>
                    <td><?= $value->nama_mapel ?></td>
                    <td><?= $value->nama_guru ?></td>
                    <td><?= $value->kode_blok ?></td>
                    <td><?= $value->kode_semester ?></td>
                    <td><?= $value->nama_tahun ?></td>
                    <td><?= $value->sesi ?></td>
                    <td><?= $value->jam_sesi ?></td>

                    <td>
                    <a href="<?= base_url('home/editjadwal/'.$value->id_jadwal)?>" class="btn btn-warning">Edit</a>
                    <a href="<?= base_url('home/hapusjadwal/'.$value->id_jadwal)?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
            </table>
                        <!-- End Table with stripped rows -->

                </div>
            </div>
         </div>
    </div>
</section>

</main><!-- End #main -->