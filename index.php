<?php include 'backend.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Gestion des Étudiants</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>

<h2><?php echo $update_mode ? "Modifier Étudiant" : "Ajouter Étudiant"; ?></h2>
<form method="post">
  <input type="hidden" name="id" value="<?php echo $id_update; ?>">
  <input type="text" name="nom" placeholder="Nom" value="<?php echo $nom; ?>">
  <input type="text" name="prenom" placeholder="Prénom" value="<?php echo $prenom; ?>">
  <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
  <input type="date" name="date_naissance" value="<?php echo $date_naissance; ?>">
  <input type="text" name="adresse" placeholder="Adresse" value="<?php echo $adresse; ?>">
  <input type="text" name="niveau" placeholder="Niveau" value="<?php echo $niveau; ?>">
  <input type="text" name="cin" placeholder="CIN" value="<?php echo $cin; ?>">
  <button type="submit"><?php echo $update_mode ? "Modifier" : "Envoyer"; ?></button>
</form>

<h2>Liste des Étudiants</h2>
<table>
  <tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Email</th>
    <th>Date Naissance</th>
    <th>Adresse</th>
    <th>Niveau</th>
    <th>CIN</th>
    <th>Actions</th>
  </tr>
  <?php
    $res = mysqli_query($con, "SELECT * FROM etudient");
    while($row = mysqli_fetch_assoc($res)) {
      echo "<tr>
              <td>".$row['id']."</td>
              <td>".$row['nom']."</td>
              <td>".$row['prenom']."</td>
              <td>".$row['email']."</td>
              <td>".$row['date_naissance']."</td>
              <td>".$row['adresse']."</td>
              <td>".$row['niveau']."</td>
              <td>".$row['cin']."</td>
              <td>
                <a class='edit' href='?edit=".$row['id']."'>Modifier</a>
                <a href='?delete=".$row['id']."' onclick='return confirmDelete();'>Supprimer</a>
              </td>
            </tr>";
    }
  ?>
</table>
<script src="script.js" defer></script>
</body>
</html>
