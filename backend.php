<?php
$con = mysqli_connect("localhost", "root", "", "formation");
if (!$con) {
    die("Erreur de connexion: " . mysqli_connect_error());
}

$nom = $prenom = $email = $date_naissance = $adresse = $niveau = $cin = "";
$update_mode = false;
$id_update = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $date_naissance = $_POST['date_naissance'];
    $adresse = $_POST['adresse'];
    $niveau = $_POST['niveau'];
    $cin = $_POST['cin'];

    if (!empty($_POST['id'])) {
        $id_update = $_POST['id'];
        $sql = "UPDATE etudient SET nom='$nom', prenom='$prenom', email='$email',
                date_naissance='$date_naissance', adresse='$adresse', niveau='$niveau', cin='$cin'
                WHERE id=$id_update";
        mysqli_query($con, $sql);
    } else {
        $sql = "INSERT INTO etudient (nom, prenom, email, date_naissance, adresse, niveau, cin)
                VALUES ('$nom', '$prenom', '$email', '$date_naissance', '$adresse', '$niveau', '$cin')";
        mysqli_query($con, $sql);
    }
}


?>
