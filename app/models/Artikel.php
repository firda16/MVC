<?php

namespace App\Models;

use App\Core\Model;

class Artikel extends Model
{

     public function show()
     {
          $query = "SELECT * FROM artikel";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $judul = $_POST['judul'];
          $kode = $_POST['kode'];

          $sql = "INSERT INTO artikel(judul, kode) VALUES (:judul, :kode)";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":judul", $judul);
          $stmt->bindParam(":kode", $kode);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM artikel WHERE id_artikel=:id_artikel";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":id_artikel", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $judul = $_POST['judul'];
          $kode = $_POST['kode'];
          $id = $_POST['id'];

          $sql = "UPDATE artikel
          SET judul=:judul, kode=:kode WHERE id_artikel=:id_artikel";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":judul", $judul);
          $stmt->bindParam(":kode", $kode);
          $stmt->bindParam(":id_artikel", $id);

          $stmt->execute();
     }
     public function delete($id)
     {
          $sql = "DELETE FROM artikel WHERE id_artikel=:id_artikel";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":id_artikel", $id);
          $stmt->execute();
     }
}
