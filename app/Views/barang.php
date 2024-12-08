<main id="main" class="main">

<div class="pagetitle">
    <h1>Table Barang</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item">Data Master</li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
        </nav>
</div>

<section class="section">
    <div class="row">
    <div class="col-lg-12">
    <div class="card">
    <div class="card-body">
        <button class="btn btn-success mb-3"><a href="/home/tb" class="text-white">Tambah</a></button>


            <table class="table datatable" border="1" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col" width="3%">No</th>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Foto</th>
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
                    <td><?= $value->kode_barang ?></td>
                    <td><?= $value->nama_barang ?></td>
                    <td><?= $value->stok ?></td>
                    <td><img src="<?= base_url('img/'.$value->foto);?>" width="30px"></td>

                    <td>
                    <a href="<?= base_url('home/editbarang/'.$value->id_barang)?>" class="btn btn-warning">Edit</a>
                    <a href="<?= base_url('home/hapus_barang/'.$value->id_barang)?>" class="btn btn-danger">Hapus</a>
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