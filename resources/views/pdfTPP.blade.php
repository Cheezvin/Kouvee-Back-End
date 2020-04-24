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
        <h2 align="center">Nota Lunas</h2>
        <p align="right">{{$pembayaran->tanggal}}</p>
        <p align="left">{{$pembayaran->id_transaksi}}</p>
        
        <table style="width:100%;">
          <tr>
            <td align="left">Customer : {{$pembayaran->nama_customer}}</td>
            <td></td>
            <td align="right">CS : {{$data[0]->logAktor}}</td>
          </tr>
          <tr>
            <td align="left">Telepon : {{$pembayaran->telp_customer}}</td>
            <td></td>
            <td align="right">Kasir : {{$pembayaran->logAktor}}</td>
          </tr>
        </table>
        <div style="border-top: 1px solid black; border-bottom: 1px solid black; margin-top: 2%;">
          <h3 align="center">Produk</h3>
        </div>
        <table class="tabel"  style="width:100%; margin-top: 2%;">
          <tr>
            <th>No</th>
            <th>Nama Produk</th> 
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
          </tr>
          @foreach($data as $dt)
          <tr>
            <td>{{$no = $no +1}}</td>
            <td>{{$dt->nama_produk}}</td>
            <td>{{$dt->harga}}</td>
            <td>{{$dt->jumlah}}</td>
            <td>{{$dt->subtotal}}</td>
          </tr>
          @endforeach
        </table>
        <p align="right">Subtotal : {{$pembayaran->total_harga = $pembayaran->total_harga+$pembayaran->diskon }}</p>
        <p align="right">Diskon : {{$pembayaran->diskon}}</p>
        <h4 align="right">Total : {{$pembayaran->total_harga = $pembayaran->total_harga-$pembayaran->diskon}}</h4>
      </div>
    </div>
  </body>
</html>
