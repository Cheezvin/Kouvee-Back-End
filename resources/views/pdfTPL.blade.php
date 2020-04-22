<!DOCTYPE html>
<html>
<head>
<style>
.tabel, .tabel td, .tabel th {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  vertical-align: middle;
  padding-top: 10px;
  padding-bottom: 10px;
}
img{
  width: 100%;
  height: 30%;
}
.solid {
  border-style: solid;
  width: 50%;
  height: 100%;
  margin-left: 20%;
  padding-top: 2%;
  padding-bottom: 2%;
  padding-left: 5%;
  padding-right: 5%;
}
.container {
  width: 100%;
  height: 100%;
}
</style>
</head>
  <body>
    <div class="container">
      <div class="solid">
        <img src="./gambar.png">
        <h2 align="center">Nota Lunas</h2>
        <p align="right">Tanggal</p>
        <p align="left">ID Transaksi</p>
        
        <table style="width:100%;">
          <tr>
            <td align="left">Firstname</td>
            <td></td>
            <td align="right">Age</td>
          </tr>
          <tr>
            <td align="left">Firstname</td>
            <td></td>
            <td align="right">Age</td>
          </tr>
        </table>
        <div style="border-top: 1px solid black; border-bottom: 1px solid black; margin-top: 5%;">
          <h2 align="center">Produk</h2>
        </div>
        <table class="tabel"  style="width:100%; margin-top: 5%;">
          <tr>
            <th>No</th>
            <th>Nama Layanan</th> 
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
          </tr>
          @foreach($user as $us)
          <tr>
            <td>{{$us->id}}</td>
            <td>{{$us->nama_layanan}}</td>
            <td>{{$us->harga}}</td>
            <td>1</td>
            <td>{{$us->subtotal}}</td>
          </tr>
          @endforeach
        </table>
        <p align="right">Subtotal</p>
        <p align="right">Diskon</p>
        <h3 align="right">Total</h3>
      </div>
    </div>
  </body>
</html>
