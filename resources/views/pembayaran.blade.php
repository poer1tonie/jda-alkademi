<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran - perelekIN</title>
</head>
<body>
    <h1>Cek Pembayaran Iuran Perelek</h1>
    <p>Daftar warga yang sudah/ belum membayar iuran bulanan:</p>
    <!-- Tabel Daftar Pembayaran -->
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>No. HP</th>
                <th>Alamat</th>
                <th>Status Pembayaran Iuran</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Heru</td>
                <td>08xxxxxxxx</td>
                <td>Jl. Mawar No. 3</td>
                <td>Sudah Bayar</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Joko</td>
                <td>08xxxxxxxx</td>
                <td>Jl. Melati No. 26</td>
                <td>Sudah Bayar</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Dian</td>
                <td>08xxxxxxxx</td>
                <td>Jl. Kenanga No. 47</td>
                <td>Belum Bayar</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" align="right"><strong>Total Belum Bayar:</strong></td>
                <td><strong>1</strong></td> <!-- Jumlah warga yang belum bayar -->
            </tr>
        </tfoot>
    </table>
    <!-- Akhir Tabel -->

    <!-- Kolom Baru Summary -->
    <div id="warga-belum-bayar" style="margin-top: 20px;">
        <h3>Warga Belum Bayar</h3>
        <!-- Tambahkan daftar warga yang belum bayar di sini -->
        <ul>
            <li>Dian - 08xxxxxxxx - Jl. Kenanga No. 47</li>
        </ul>
    </div>

    <a href="/">Kembali ke Home</a>
</body>
</html>
