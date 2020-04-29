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
.tebal, .tebal td, .tebal th {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  vertical-align: middle;
}
img{
  width: 100%;
}
.pagar{
  border-style: dotted;
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
        <h2 align="center">Laporan Pendapatan Bulanan</h2>
        <p align="left">Bulan :{{$data[0]->bulan}}</p>
        <p align="left">Tahun :{{$data[0]->tahun}}</p>
        
        <table class="tabel"  style="width:100%; margin-top: 2%;">
          <tr>
            <th>No</th>
            <th>Nama Produk</th> 
            <th>Harga</th>
          </tr>
          @foreach($data as $dt)
          <tr>
            <td>{{$no = $no +1}}</td>
            <td>{{$dt->nama_produk}}</td>
            <td>Rp.{{$dt->total_penjualan}}</td>
          </tr>
          <div style="display: none">{{$total = $total + $dt->total_penjualan}}</div>
          @endforeach         
        </table>
        <h3 align="right">Total Rp.{{$total}}</h3>
        <table class="tebal"  style="width:100%; margin-top: 2%;">
          <tr>
            <th>No</th>
            <th>Nama Jasa Layanan</th> 
            <th>Harga</th>
          </tr>
          @foreach($data2 as $dt2)
          <tr>
            <td>{{$no2 = $no2 +1}}</td>
            <td>{{$dt2->nama_layanan}}</td>
            <td>Rp.{{$dt2->total_penjualan}}</td>
          </tr>
          <div style="display: none">{{$total2 = $total2 + $dt2->total_penjualan}}</div>
          @endforeach         
        </table>
        <h3 align="right">Total Rp.{{$total2}}</h3>
        <div style="margin-top: 5%">
          <p align="right">Dicetak pada {{date("Y-m-d")}}</p>
        </div>
      </div>
    </div>
  </body>
</html>
