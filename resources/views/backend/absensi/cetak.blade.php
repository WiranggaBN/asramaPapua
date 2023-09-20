<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/cetak.css">
  <style>
    table.static {
      position: relative;
      border: 1px solid #000;
    }

    .mengetahui {
      margin-top: 15px;
      text-align: center;
      /* margin-left: 700px; */
    }

    .ttd {
      height: 50px;
      width: 50px;
    }
  </style>
  <title>Asrama Papua | Cetak</title>
</head>
<body>
  <div class="form-group">
    <h1 align="center">Data Absensi</h1>
    <table class="static" align="center" rules="all" border="1px" style="width: 95%">
    
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama</th>
              <th scope="col">Nama Kamar</th>
              <th scope="col">Tanggal Keluar</th>
              <th scope="col">Tanggal Masuk</th>
              <th scope="col">Jam Keluar</th>
              <th scope="col">Jam Masuk</th>              
              <th scope="col">Alasan</th>
              <th scope="col">Keterangan</th>              
              
            </tr>
          
          <tbody>
          @foreach ($absensi as $absensis)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $absensis->name }}</td>
              <td>{{ $absensis->kamar->namakamar ?? ''}}</td>
              <td>{{ dateID($absensis->tanggal_keluar) }}</td>          
              <td>{{ dateID($absensis->tanggal_masuk) }}</td>          
              <td>{{ $absensis->jam_keluar }} WIB</td>
              <td>{{ $absensis->jam_masuk }} WIB</td>
              <td>{{ $absensis->alasan }}</td>                            
              <td>{{ $absensis->keterangan }}</td>                                          
            </tr>
            @endforeach
          </tbody>     
    </table>
  </div>

  <div class="mengetahui">
    Semarang, 
    <?php
    function translate_month($date_str) {
        $en_months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $id_months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        return str_replace($en_months, $id_months, $date_str);
    }
    $date_str = date('d F Y');
    $date_str_id = translate_month($date_str);
    echo $date_str_id;
    ?>
    <br>
    Ketua Asrama<br>
    <img src="/image/Aron.png" alt="" class="ttd"><br>
    <b>Aron</b>
  </div>

<script type="text/javascript">
  window.print();
</script>
</body>
</html>