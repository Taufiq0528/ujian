<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <center><img src="assalaam.jpeg"></center>
    <div class="container">
    <center><h2>PENGGAJIHAN GURU/KARYAWAN YAYASAN ASSALAAM</h2></center>
    <form action="" method="post">
         <div class="card">
             <div class="card-header">
                  Data Penggajihan
             </div>
             <div class="card-body col-12">
                    <label>No</label>
                     <input type="number" class="form-control" name="no" placeholder="No">

                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama">
          
                    <label>Unit Pendidikan</label>
                  <select class="form-select" aria-label="Default select example" name="unit">
                      <option selected>Pilih Unit Pendidikan</option>
                      <option value="SD">SD</option>
                      <option value="SMP">SMP</option>
                      <option value="SMA">SMA</option>
                      <option value="SMK">SMK</option>
                </select>
               
                  <label>Tanggal Gaji</label>
                 <input type="date" class="form-control" name="tanggal" aria-label="Sizing example input">
          
                <div class="row g-3">
                  <div class="col-sm-6">
                  <h2 class="text-center">Gaji</h2>
                    <div class="col">
                    <label>Jabatan</label>
                    <select class="form-select" aria-label="Default select example" name="jabatan">
                      <option selected>Pilih Jabatan</option>
                      <option value="Kepala Sekolah">Kepala Sekolah</option>
                      <option value="Wakasek">Wakasek</option>
                      <option value="Guru">Guru</option>
                      <option value="Karyawan">Karyawan</option>
                </select>
                  </div>
                  <div class="col">
                    <label>Lama Kerja</label>
                    <input type="text" class="form-control" name="lama" placeholder="Lama Kerja">
                  </div>
                  <div class="col">
                    <label>Status Kerja</label>
                    <select class="form-select" aria-label="Default select example" name="status">
                      <option selected>Pilih Status Kerja</option>
                      <option value="Tetap">Tetap</option>
                      <option value="Kontrak">Kontrak</option>
                 </select>
                  </div>
                  </div>
               
                  
                  <div class="col">
                    <h2 class="text-center">Potongan</h2>
                    <div class="col">
                    <label>BPJS</label>
                    <input type="number" class="form-control" name="bpjs">
                  </div>
                  <div class="col">
                    <label>Pinjaman</label>
                    <input type="number" class="form-control" name="pinjaman" placeholder="Pinjaman">
                  </div>
                  <div class="col">
                    <label>Cicilan</label>
                    <input type="number" class="form-control" name="tabungan" placeholder="Tabungan">
                  </div>
                  <div class="col">
                    <label>Infaq</label>
                    <input type="number" class="form-control" name="lainya" placeholder="Lainya">
                  </div>
                  </div>
                 </div>
                 <center><button type="submit" class="btn btn-primary mt-5" name="submit">Submit</button></center>
              </form>
              </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
<?php
if (isset($_POST['submit'])) {
 
  $no = $_POST['no'];
  $nama = $_POST['nama'];
  $unit = $_POST['unit'];
  $tggl = $_POST['tanggal'];
  //gaji
  $jabatan = $_POST['jabatan'];
  $lama = $_POST['lama'];
  $status = $_POST['status'];
  //potongan
  $bpjs = $_POST['bpjs'];
  $pinjaman = $_POST['pinjaman'];
  $tabungan = $_POST['tabungan'];
  $infaq = $_POST['lainya'];

  $gaji = [
    'Kepala Sekolah' => 10000000,
    'Wakasek' => 7000000,
    'Guru' => 5000000,
    'Karyawan' => 2500000
];

$total_gaji = $gaji[$jabatan];

if ($status == "Tetap") {
    $bonus = 1000000;
} else if ($status == "Kontrak"){
    $bonus = 0;
} else{
  echo "eror";
}
$gaji_bersih = ($total_gaji + $bonus) - ($bpjs + $pinjaman + $tabungan + $infaq);

  class Penggajihan{
    public function Data_penggajihan($no2,$nama2,$unit2,$tggl2){
      echo "<h3 style='text-align-center'>Struktur Gaji</h3>";
      echo "No : ".$no2."<br>";
      echo "Nama : ".$nama2."<br>";
      echo "Unit Pendidikan : ".$unit2."<br>";
      echo "Tanggal Gaji : ".$tggl2."<br>";
  
}
   public function Gajih($jabatan2,$gaji2,$lama2,$status2,$bonus2){
  echo "Jabatan : ".$jabatan2."<br>";
  echo "Gaji : ".$gaji2."<br>";
  echo "Lama Kerja : ".$lama2."<br>";
  echo "Status Kerja : ".$status2."<br>";
  echo "Bonus : ".$bonus2."<br>";
}
public function potongan($bpjs2,$pinjaman2,$tabungan2,$infaq2,$gaji_bersih2){

  echo "BPJS  : ".$bpjs2."<br>";
  echo "Pinjaman : ".$pinjaman2."<br>";
  echo "Cicilan : ".$tabungan2."<br>";
  echo "Infaq : ".$infaq2."<br>";
  echo "Gaji Bersih : ".$gaji_bersih2."<br>";
  }
}
$cetak = new Penggajihan();
echo "<center><div class='card' style='width: 20rem;'>
        <div class='card-body'>";
echo $cetak->Data_penggajihan($no,$nama,$unit,$tggl); 
echo $cetak->Gajih($jabatan,$total_gaji,$lama,$status,$bonus);
echo $cetak->potongan($bpjs,$pinjaman,$tabungan,$infaq,$gaji_bersih);
echo "</div>
      </div>";
}
?>
  </body>
</html>