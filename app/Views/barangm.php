<!-- <a href="<?= base_url('home/tbm/'.$value->id_karyawan) ?>" class="btn btn-success"> Tambah </a>
<table class="table table-striped">
<form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    <thead>
      <tr>
        <th width="3%">No</th>
        <th>ID Barang</th>
        <th width="5%">Jumlah</th>
        <th>Tanggal</th>
         
        
      </tr>
    </thead>
    <tbody>

      <?php
      $ms=1;
      foreach ($anjas as $key =>$value){
        ?>
        <tr>
          <td><?= $ms++ ?></td>
          <td><?= $value->nama_barang ?></td>
          <td><?= $value->jumlah ?></td>
          <td><?= $value->tanggal_masuk ?></td>
          
          <?php 
        if (session()->get('level')=='1' || session()->get('level')=='3') {  ?>
           <td>
            <a href="<?= base_url('home/hapusbarang/'.$value->id_barang)?>"><button class="btn btn-danger">Hapus</button></a> 
            
      </td>
      <?php } ?>
    </tr>
        <?php } ?>
 
    </tbody>
  </table> -->


  <main id="main" class="main">

    <div class="pagetitle">
        <h1>Table Barang Masuk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item">Transaksi</li>
                <li class="breadcrumb-item active">Barang Masuk</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Table with stripped rows -->
                        <button class="btn btn-success mb-3"><a href="<?= base_url('home/tbm/'.$value->id_karyawan) ?>" class="btn btn-success"> Tambah </a>
                        </button>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col" width="3%">No</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Tanggal Masuk</th>
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
                                    <td><?= $value->nama_barang ?></td>
                                    <td><?= $value->jumlah ?></td>
                                    <td><?= $value->tanggal_masuk ?></td>
                                   <td><img src="<?= base_url('img/$value->foto') ?>" style="width: 100px"></td>
                                    <td>
                                        <a href="<?= base_url('home/hapusbarang/'.$value->id_barang)?>"><button class="btn btn-danger">Hapus</button></a> 
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