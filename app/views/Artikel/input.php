<h2>Input Artikel</h2>

<form action="<?php echo URL; ?>/artikel/save" method="post">
    <table>
        <tr>
            <td>JUDUL ARTIKEL</td>
            <td><input type="text" name="judul" required></td>
        </tr>
        <tr>
            <td>KODE KATEGORI</td>
            <td><input type="text" name="kode" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>