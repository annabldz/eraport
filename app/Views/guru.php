<main id="main" class="main">

<div class="pagetitle">
    <h1>Table Guru</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item">Data Master</li>
            <li class="breadcrumb-item active">Data Guru</li>
        </ol>
        </nav>
</div>

<section class="section">
    <div class="row">
    <div class="col-lg-12">
    <div class="card">
    <div class="card-body">
        <pre></pre>
        <button class="btn btn-success mb-3"><a href="/home/inputguru" class="text-white">Tambah</a></button>


            <table class="table datatable" border="1" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col" width="3%">No</th>
                     <th scope="col">Foto</th>
                    <th scope="col">Nama Guru</th>
                    <th scope="col">NIK</th>
                    <th>Username</th>
                    <th>Level</th>
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
                    <td><img src="<?= base_url('img/'.$value->foto);?>" width="30px"></td>
                    <td><?= $value->nama_guru ?></td>
                    <td><?= $value->nik ?></td>
                    <td><?= $value->username ?></td>
                    <td><?= $value->level ?></td>

                    <td>
                    <a href="<?= base_url('home/editguru/'.$value->id_guru)?>" class="btn btn-warning">Edit</a>
                    <a href="<?= base_url('home/hapusguru/'.$value->id_guru)?>" class="btn btn-danger">Hapus</a>
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