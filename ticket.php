<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <h1 align="center"> Tempat Wisata di Yogyakarta</h1>
    <form action="" method="post">
        <table align=center>
        <tr>
            <th></th>
            <th align="left">Tempat</th>
            <th>Harga Tiket</th>
        </tr>
        <tr>
            <td>1.</td>
            <td>Bukit Bintang</td>
            <td>Rp. 10.000</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Pantai Sadranan</td>
            <td>Rp. 15.000</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Candi Borobudur</td>
            <td>Rp. 50.000</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Candi Prambanan</td>
            <td>Rp. 50.000</td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Keraton Yogyakarta</td>
            <td>Rp. 5.000</td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Malioboro</td>
            <td>Rp. 5.000</td>
        </tr>
        <tr>
            <td>7.</td>
            <td>Pendopo Lawas</td>
            <td> -> Cafe</td>
        </tr>
        <tr>
            <td>8.</td>
            <td>Goa Pindul</td>
            <td>Rp. 100.000</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
            <tr>
                <td></td>
                <td><select name="destinasi" id="">
                    <option selected>-- Pilih Destinasi --</option>
                    <option value="1">Bukit Bintang</option>
                    <option value="2">Pantai Sadranan</option>
                    <option value="3">Candi Borobudur</option>
                    <option value="4">Candi Prambanan</option>
                    <option value="5">Kraton Yogyakarta</option>
                    <option value="6">Malioboro</option>
                    <option value="7">Pendopo Lawas -> Cafe</option>
                    <option value="8">Goa Pindul</option>
                </select></td>
                <td><input type="submit" value="Enter" name="proses"></td>
            </tr>
        </table>
        <?php
            if(isset($_POST['proses'])){
                $destinasi=$_POST['destinasi'];
                if($destinasi == "1"){
        ?>
                  <h2 align="center">Selamat datang di Bukit Bintang</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Bukit Bintang</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 10.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="bukitbintang" value="kirim"></td>
                    </tr>
                  </table>
    
          <?php }elseif($destinasi == "2"){ ?>
                  <h2 align="center">Selamat datang di Pantai Sadranan</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Pantai Sadranan</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="pantaisadranan" value="kirim"></td>
                    </tr>
                  </table>
                    
          <?php }elseif($destinasi == "3"){ ?>
                  <h2 align="center">Selamat datang di Candi Borobudur</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Candi Borobudur</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 50.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="candiborobudur" value="kirim"></td>
                    </tr>
                  </table>
                
          <?php }elseif($destinasi == "4"){ ?>
                  <h2 align="center">Selamat datang di Candi Prambanan</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Candi Prambanan</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 50.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="candiprambanan" value="kirim"></td>
                    </tr>
                  </table>
                 
          <?php }elseif($destinasi == "5"){ ?>
                  <h2 align="center">Selamat datang di Kraton Yogyakarta</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Kraton Yogyakarta</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="kraton" value="kirim"></td>
                    </tr>
                  </table>
           
          <?php }elseif($destinasi == "6"){ ?>
                  <h2 align="center">Selamat datang di Malioboro</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Malioboro</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 5.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="Malioboro" value="kirim"></td>
                    </tr>
                  </table>
                
         <?php }elseif($destinasi == "7"){ ?>
                  <h2 align="center">Selamat datang di caffe Pendopo Lawas</h2>
                  <table align="center" cellpadding="6"> 
                    <tr>
                      <th colspan="2">MENU</th>
                    </tr>
                    <tr>
                      <th>Daftar</th>
                      <th>Harga</th>
                    </tr>
                    <tr>
                      <td>nasi goreng</td>
                      <td>Rp.15.000</td>
                    </tr>
                    <tr>
                      <td>teh manis</td>
                      <td>Rp. 6.000</td>
                    </tr>
                    <tr>
                      <td>americano</td>
                      <td>Rp.20.000</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                    </tr>
                  </table>
                  <div  class="caffe">
                        <select name="pilih">
                        <option selected>-- Pilih Menu --</option>
                        <option value="1">nasi goreng</option>
                        <option value="2">teh manis</option>
                        <option value="3">americano</option>
                      </select>
                     <input type="number" name="jumlah" placeholder="jumlah pesanan">
                     <input type="number" name="bayar" placeholder="total uang">
                     <input type="submit" name="keshi" value="kirim">
                  </div>
         <?php }elseif($destinasi == "8"){ ?>
                  <h2 align="center">Selamat datang di Goa Pindul</h2>
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Goa Pindul</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket/Orang</td>
                      <td>:</td>
                      <td>Rp. 100.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="goa" value="kirim"></td>
                    </tr>
                  </table>
                    
          <?php }
            }
            if(isset($_POST['kirim'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*10000;
                if ($jumlah >= 7) {
                    $diskon=$total*0.15;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=5) {
                    $diskon=$total*0.1;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
          ?> 
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>
          <?php }
            if(isset($_POST['submit'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*15000;
                if ($jumlah >= 7) {
                    $diskon=$total*0.15;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=5) {
                    $diskon=$total*0.1;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
          ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>
         <?php }
            if(isset($_POST['ok'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*50000;
                if ($jumlah >= 7) {
                    $diskon=$total*0.15;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=5) {
                    $diskon=$total*0.1;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
          ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>
          <?php }
            if(isset($_POST['ya'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*5000;
                if ($jumlah >= 7) {
                    $diskon=$total*0.15;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=5) {
                    $diskon=$total*0.1;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
          
          ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>
          <?php }
            if(isset($_POST['goa'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*100000;
                if ($jumlah >= 7) {
                    $diskon=$total*0.15;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >= 5) {
                    $diskon=$total*0.1;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
          ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $totalakhir;?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon;?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar;?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian;?></td>
                  </tr>
                </table>
          <?php }
            if(isset($_POST['cafe'])){
              $pilih = $_POST['pilih'];
              $jumlah = $_POST['jumlah'];
              $bayar = $_POST['bayar'];
              
              if($pilih == 1){
                $total = $jumlah * 15000;
                if($jumlah >= 7){
                  $diskon1 = "15%";
                  $diskon = $total * 0.15;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=4){
                  $diskon1 = "10%";
                  $diskon = $total * 0.1;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=2){
                  $diskon1 = "5%";
                  $diskon = $total * 0.05;
                  $totalakhir = $total - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $total;
                }
              }else if($pilih == 2){
                $total = $jumlah * 10000;
                if($jumlah >= 7){
                  $diskon1 = "15%";
                  $diskon = $total * 0.15;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=4){
                  $diskon1 = "10%";
                  $diskon = $total * 0.1;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=2){
                  $diskon1 = "5%";
                  $diskon = $total * 0.05;
                  $totalakhir = $total - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $total;
                }
              }else if($pilih == 3){
                $total = $jumlah * 13000;
                if($jumlah >= 7){
                  $diskon1 = "15%";
                  $diskon = $total * 0.15;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=4){
                  $diskon1 = "10%";
                  $diskon = $total * 0.1;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=2){
                  $diskon1 = "5%";
                  $diskon = $total * 0.05;
                  $totalakhir = $total - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $total;
                }
              }else if($pilih == 4){
                $total = $jumlah * 13000;
                if($jumlah >= 7){
                  $diskon1 = "15%";
                  $diskon = $total * 0.15;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=4){
                  $diskon1 = "10%";
                  $diskon = $total * 0.1;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=2){
                  $diskon1 = "5%";
                  $diskon = $total * 0.05;
                  $totalakhir = $total - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $total;
                }
              }else if($pilih == 5){
                $total = $jumlah * 11000;
                if($jumlah >= 7){
                  $diskon1 = "15%";
                  $diskon = $total * 0.15;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=4){
                  $diskon1 = "10%";
                  $diskon = $total * 0.1;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=2){
                  $diskon1 = "5%";
                  $diskon = $total * 0.05;
                  $totalakhir = $total - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $total;
                }
              }else if($pilih == 6){
                $total = $jumlah * 12000;
                if($jumlah >= 7){
                  $diskon1 = "15%";
                  $diskon = $total * 0.15;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=4){
                  $diskon1 = "10%";
                  $diskon = $total * 0.1;
                  $totalakhir = $total - $diskon;
                }else if($jumlah >=2){
                  $diskon1 = "5%";
                  $diskon = $total * 0.05;
                  $totalakhir = $total - $diskon;
                }else{
                  $diskon1 = "0";
                  $totalakhir = $total;
                }
              }
              $kembalian = $bayar - $totalakhir;
          ?>
               <table align="center">
                 <tr>
                   <td>Total Pembayaran</td>
                   <td>:</td>
                   <td><?php echo $totalakhir;?></td>
                 </tr>
                 <tr>
                   <td>Potongan Harga</td>
                   <td>:</td>
                   <td><?php echo $diskon1;?></td>
                 </tr>
                 <tr>
                   <td>Pembayaran</td>
                   <td>:</td>
                   <td><?php echo $bayar;?></td>
                 </tr>
                 <tr>
                   <td>Kembali</td>
                   <td>:</td>
                   <td><?php echo $kembalian;?></td>
                 </tr>
               </table>
          <?php }
          ?>
    </form>    
</body>
</html>