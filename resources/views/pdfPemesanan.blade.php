<!DOCTYPE html>
<html>
<head>
<style>
.tabel, .tabel td, .tabel th {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  vertical-align: middle;
}
img{
  width: 100%;
}
.pagar{
  border-style: dashed;
  padding-top: 2%;
  padding-left: 2%;
  padding-right: 2%;
  padding-bottom: 2%;
}
.solid {
  border-style: solid;
  width: 100%;
  padding-top: 5%;
  padding-left: 10%;
  padding-right: 10%;
}
.container {
  width: 100%;
}
</style>
</head>
  <body>
    <div class="container">
      <div class="solid">
        <img src="https://firebasestorage.googleapis.com/v0/b/kouvee-17f92.appspot.com/o/produk%2Fgambar.png?alt=media&token=3b7099fb-0fdf-4035-82e6-5d502d0fff30">
        <h2 align="center">Surat Pemesanan</h2>
        <h4 align="right">No: {{$pemesanan->id_transaksi}}</h4>
        <h4 align="right">Tanggal: {{date("Y-m-d")}}</h4>
        
        <table class="pagar">
          <tr>
            <td align="left">Kepada Yth:</td>
          </tr>
          <tr>
            <td align="left">{{$pemesanan->nama_supp}}</td>
          </tr>
          <tr>
            <td align="left">{{$pemesanan->kota_supp}}</td>
          </tr>
          <tr>
            <td align="left">{{$pemesanan->telp_supp}}</td>
          </tr>
        </table>
        <p style="margin-top: 7%;">Mohon untuk disediakan produk-produk berikut ini :</p>
        <table class="tabel"  style="width:100%; margin-top: 2%;">
          <tr>
            <th>No</th>
            <th>Nama Produk</th> 
            <th>Satuan</th>
            <th>Jumlah</th>
          </tr>
          @foreach($data as $dt)
          <tr>
            <td>{{$no = $no +1}}</td>
            <td>{{$dt->namaProduk}}</td>
            <td>{{$dt->satuan}}</td>
            <td>{{$dt->jumlah}}</td>
          </tr>
          @endforeach
        </table>
        <div style="margin-top: 5%">
          <p align="right">Dicetak pada {{date("Y-m-d")}}</p>
        </div>
      </div>
    </div>
  </body>
</html>
