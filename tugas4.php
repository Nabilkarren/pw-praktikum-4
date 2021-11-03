<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style4.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 4</title>
</head>
<body>

    <body style = "background-color:#1A1A1D;">

<table>
  <caption>Tabel Data Karyawan</caption>

  <thead>
    <tr>
      <th scope="col" style="text-align: center">Nomor</th>
      <th scope="col" style="text-align: center">Nama</th>
      <th scope="col" style="text-align: center">Tempat Tanggal Lahir</th>
      <th scope="col" style="text-align: center">Jenis Kelamin</th>
      <th scope="col" style="text-align: center">Level Karyawan</th>
      <th scope="col" style="text-align: center">Status</th>
      <th scope="col" style="text-align: center">Gaji</th>
    </tr>
  </thead>

  <tbody>
    <?php 

      abstract class Karyawan{
          public $nama;
          public $ttl;
          public $kelamin;
          public $level;
          public $status;
          public $gaji;

          public function set_Nama($nama){
            $this -> nama = $nama;
          }

          public function set_Ttl($ttl){
            $this -> ttl = $ttl;
          }
          
          public function set_Kelamin($kelamin){
            $this -> kelamin = $kelamin;
          }
          
          public function set_Status($status){
            $this -> status = $status;
          }
          
          public function set_Gaji($gaji){
            $this -> gaji = $gaji;
          }
          
          public function set_Level($level){
            $this -> level = $level;
          }
          
          public function get_Nama(){
            return $this -> nama;
          }
          
          public function get_Ttl(){
            return $this -> ttl;
          }
          
          public function get_Kelamin(){
            return $this -> kelamin;
          }
          
          public function get_Level(){
            return $this -> level;
          }
          
          public function get_Status(){
            return $this -> status;
          }
          
          public function get_Gaji(){
            return $this -> gaji;
          }

          abstract function hitungGaji();
      }

      class Fulltime extends Karyawan{
          function __construct($nama, $ttl, $kelamin, $level, $status){
            $this -> nama = $nama;
            $this -> ttl = $ttl;
            $this -> kelamin = $kelamin;
            $this -> level = $level;
            $this -> status = $status;
          }

          function hitungGaji(){
            if($this -> level == 'Junior'){
              $this -> gaji = 200000;
            }
            else if($this -> level == 'Amateur'){
              $this -> gaji = 350000;
            }
            else if($this -> level == 'Senior'){
              $this -> gaji = 500000;
            }
            else{$this -> gaji = 'Tidak kerja';}
          }

      }

      class Parttime extends Karyawan{
          function __construct($nama, $ttl, $kelamin, $level, $status){
            $this -> nama = $nama;
            $this -> ttl = $ttl;
            $this -> kelamin = $kelamin;
            $this -> level = $level;
            $this -> status = $status;
          }

          function hitungGaji(){
            if($this -> level == 'Junior'){
              $this -> gaji = 200000/2;
            }
            else if($this -> level == 'Amateur'){
              $this -> gaji = 350000/2;
            }
            else if($this -> level == 'Senior'){
              $this -> gaji = 500000/2;
            }
            else{$this -> gaji = 'Tidak kerja';}
          }
      }

        $kar1 = new Fulltime('John Sawit','Denmark, 19 Agustus 1995','Laki - laki','Senior','Fulltime');
        $kar2 = new Parttime('Jina Hukkay','Bekasi, 15 april 2000','Perempuan','Amateur','Parttime');
        $kar3 = new Fulltime('Kilko Kola','Jakarta Selatan, 7 Maret 1997','Laki - laki','Junior','Fulltime');
        $kar4 = new Fulltime('Hana Julika','Bandung, 23 Desember 2001','Perempuan','Amateur','Fulltime');

        $kar1 -> hitungGaji();
        $kar2 -> hitungGaji();
        $kar3 -> hitungGaji();
        $kar4 -> hitungGaji();

      $Datakaryawan = array($kar1, $kar2, $kar3, $kar4);

      foreach($Datakaryawan as $nomor => $data){ ?>
      
        <tr>
          <td scope = "row" data-label="Nomor" style="text-align: center"> <?php echo $nomor + 1 ?> </td>
          <td data-label="Nama"> <?php echo $data->get_Nama(); ?> </td>
          <td data-label="Tempat Tanggal Lahir"> <?php echo $data->get_Ttl(); ?> </td>
          <td data-label="Jenis Kelamin"> <?php echo $data->get_Kelamin(); ?> </td>
          <td data-label="Level Karyawan"> <?php echo $data->get_Level(); ?> </td>
          <td data-label="Status"> <?php echo $data->get_Status(); ?> </td>
          <td data-label="Gaji"> <?php echo $data->get_Gaji(); ?> </td>
        </tr>

      <?php }

    ?>
  </tbody>
</table>

  <h5 style = "color : rgb(233, 233, 233)">Nabil Karren Y <br> 105219056 <br> </h5> 

</body>
</html>