<html>
<head>
    <title>Toko Sepatu</title>
</head>
<body>
    <center>
        <table>
        <tr>
            <th colspan="3">
            Toko Sepatu<br>
            </th>
        </tr>
        <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>
        <tr>
            <td>Nama Pembeli</td>
            <td>:</td>
            <td>
                <?= $nama; ?>
                    </td>
            </tr>
            <tr>
            <td>No Hp</td>
            <td>:</td>
            <td>
                <?= $nohp; ?>
            </td>
            </tr>
            <tr>
            <td>Merk Sepatu</td>
            <td>:</td>
            <td>
                <?= $merk; ?>
            </td>
            </tr>
            <tr>
            <td>Ukuran Sepatu</td>
            <td>:</td>
            <td>
                <?= $ukuran; ?>
                </td>
            </tr>
            <tr>
            <td>Harga Sepatu</td>
            <td>:</td>
            <td>Rp.
            <?= $harga; ?>
                </td>
            </tr>
            <tr>
            <td colspan="3" align="center">
                <a href="<?php echo base_url() ?>tokosepatu">Kembali</a>
            </td>
            </tr>
    </table>
    <form>
    </center>
</body>
</html>        