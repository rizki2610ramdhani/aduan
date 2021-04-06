<html>
    <head>
        <title>Cetak Laporan</title>
    </head>
    <body>
        <div class="form-group">
            <br>
            <p align="center"><b>Daftar Pengaduan</b></p>
            <table class="static" align="center" rules="all" style="width:95%;" border="1" cellpadding="7">
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Judul
                    <th>Tanggal Pengaduan</th>
                    <th>Tanggal Tanggapan</th>
                    <th>NIK Petugas</th>
                    <th>Nama Petugas</th>
                    <th>Status</th>
                </tr>
                @foreach($dtall as $dt)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$dt->masyarakat->nik}}</td>
                    <td>{{$dt->masyarakat->nama}}</td>
                    <td>{{$dt->judul}}</td>
                    <td>{{$dt->tgl_aduan}}</td>
                    <td>{{$dt->tanggapan->tgl_tanggapan}}</td>
                    <td>{{$dt->tanggapan->petugas->nik}}</td>
                    <td>{{$dt->tanggapan->petugas->nama}}</td>
                        @if($dt->status == "0")
                            <td style="color:yellow;">Belum Diproses</td>
                        @elseif($dt->status == "proses")
                            <td style="color:blue;">Diproses</td>
                        @elseif($dt->status == "selesai")
                            <td style="color:green;">Selesai</td>
                        @else
                            <td style="color:red;">Ditolak</td>
                        @endif
                </tr>
                @endforeach
            </table>
        </div>

        <script type="text/javascript">
            window.print()
        </script>
    </body>
</html>
