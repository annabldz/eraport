<!DOCTYPE html>
<html>
<head>
	<title>Hasil Nilai Blok</title>
	<style type="text/css">
		table,
		th,
		td{
			
			border-collapse: collapse;
		}
	</style>
  
</head>

<body>
  <table>
 
   
    <h1 width="250%" style="text-align: center">SEKOLAH PERMATA HARAPAN</h1>
    
  
  </table>
<hr></hr>
  <table class="table table-striped" border = "1" width = "701px">
    
    <h1 width="250%" align="center">KARTU HASIL STUDI ( KHS )</h1>
    <h1 align="center"> <?= $nilai->kode_blok ?> SEMESTER <?= $nilai->kode_semester ?> - TP. <?= $nilai->nama_tahun ?></h1>
  
    <hr></hr>
    
    <h3 align="left-center">NIS: <?= $nilai->nis ?></h3>
    <h3>NAMA: <?= $nilai->nama_siswa ?></h3>
    <h3>KELAS: <?= $nilai->nama_rombel ?></h3>
  
    <hr></hr>

    <strong><p>Petunjuk Umum:</p></strong>
    <p>1. Nilai yang tertera adalah hasil pembelajaran siswa yang bersangkutan selama satu blok yang berjalan.</p>
    <p>2. KHS dibagikan kepada siswa untuk disampaikan kepada orang tua/wali dan ditandatangani oleh orang tua sebagai tanda bahwa raport telah diperiksa dan menjadi perhatian orang tua/wali.</p>
    <p>3. Setelah KHS ditandatangani oleh orang tua/wali siswa segera dikembalikan ke sekolah (bagian akademik/database), maksimum 1 (satu) minggu sejak diterbitkan.</p>

    <pre></pre>
    <pre></pre>
<table class="table table-striped" border = "1" align="center" width = "600px">
    <thead>
      <tr>
        <th scope="col" width="5%">No</th>
        <th scope="col" width="20%">Mapel</th>
        <th scope="col" width="15%">Blok</th>  
        <th scope="col" width="20%">Guru</th>    
        <th scope="col" width="25%">Nilai Pengetahuan</th>
        <th scope="col" width="25%">Nilai Keterampilan</th>
      </tr>
    </thead>
    <tbody>
       <?php
      $ms=1;
      foreach ($raport as $key =>$value){
        ?>
        <tr>
          <td align="center"><?= $ms++ ?></td>
          <td align="center"><?= $value->nama_mapel ?></td>
          <td align="center"><?= $value->kode_blok ?></td>
          <td align="center"><?= $value->nama_guru ?></td>
          <td align="center"><?= $value->nilai_pengetahuan ?></td>
          <td align="center"><?= $value->nilai_keterampilan ?></td>
      <?php } ?>
        
          
      

    </tr> 
    </tbody>
  </table>

</body>
</table>
</html>
