<h2>Edit Artikel</h2>

<form action="<?php echo URL; ?>/artikel/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id_artikel']; ?>">
    <table>
        <tr>
            <td>JUDUL ARTIKEL</td>
            <td><input type="text" name="judul" value="<?php echo $data['row']['judul']; ?>" required></td>
        </tr>
        <tr>
            <td>KODE KATEGORI</td>
            <td><input type="text" name="kode" value="<?php echo $data['row']['kode']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>