<html>
<head>
    <title>Toko Sepatu</title>
</head>
<body>
    <center>
        <form action="<?php echo base_url() ?>tokosepatu/cetak" method="post">
        <table>
            <tr>
                <th colspan="3">
            Form Transaksi Toko Sepatu
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
                <input type="text" name="nama" id="nama" value="<?php echo set_value('nama'); ?>">
                </td>
                <td><?= form_eror('nama'); ?></td>
            </tr>
            <tr>
            <td>Nomer hp</td>
            <td>:</td>
            <td>
                <input type="text" name="nohp" id="nohp" value="<?php echo set_value('nohp'); ?>">
                </td>
                <td><?= form_eror('nohp'); ?></td>
            </tr>
            <tr>
                <td>Merk Sepatu</td>
                <td>:</td>
                <td>
                    <select name="merk" id="merk">
                        <option value="">-Pilih-</option>
                        <option value="Adidas">Adidas</option>
                        <option value="Nike">Nike</option>
                        <option value="Kickers">Kickers</option>
                        <option value="Hush Pupies">Hush Pupies</option>
                        <option value="Onitsuka Tiger">Onitsuka Tiger</option>
                    </select>
                </td>
                    <td><?= form_eror('merk'); ?></td>
                </tr>
                <tr>
                <td>Ukuran Sepatu</td>
                <td<:</td>
                <td>
                    <select name="ukuran" id="ukuran">
                        <option value="">-Pilih-</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                    </select>
                </td>
                <td><?= form_eror('ukuran'); ?></td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Simpan">
                    </td>
                </tr>
        </table>
    </center>
</body>
</html>