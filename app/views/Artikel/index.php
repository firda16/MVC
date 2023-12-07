<h2>Artikel</h2>

<a href="<?php echo URL; ?>/artikel/input" class="btn">Input Artikel</a>

<table>
      <tr>
            <th>NO</th>
            <th>JUDUL</th>
            <th>KODE</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['judul']; ?></td>
                  <td><?php echo $row['kode']; ?></td>
                  <td><a href="<?php echo URL; ?>/artikel/edit/<?php echo $row['id_artikel']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/artikel/delete/<?php echo $row['id_artikel']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>