
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
      <tr>
        <td>
          {{$user->id_transaksi}}
        </td>
        <td>
          {{$user->nama_produk}}
        </td>
      </tr>
      <tr>
        <td>
          {{$user->logAktor}}
        </td>
        <td>
          {{$user->logAksi}}
        </td>
      </tr>
    </table>
  </body>
</html>