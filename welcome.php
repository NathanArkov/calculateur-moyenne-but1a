<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// Create connection



/* ADD NOTE */
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['addnote']))
{
  for($i =0; $i < $_POST["coeff"]; $i++){
    add_note();
  }
}

function add_note(){
  $conn = new mysqli("localhost", "u559873887_NathanArkov", "Arkov_57", "u559873887_users");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO note (user, note, matiere) VALUES ('{$_SESSION["username"]}', '{$_POST["note"]}', '{$_POST["matiere"]}')";
  $addnote = $conn->query($sql);
  $conn->close();
}

/* SHOW NOTE */

function show_note($ue){
  $conn = new mysqli("localhost", "u559873887_NathanArkov", "Arkov_57", "u559873887_users");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  switch ($ue) {
    case "1.1":
      $sql = "SELECT ((SELECT (AVG(note.note)*12) FROM `note` WHERE user = ? AND matiere = 'devweb') + (SELECT (AVG(note.note)*42) FROM `note` WHERE user = ? AND matiere = 'initdev') + (SELECT (AVG(note.note)*6) FROM `note` WHERE user = ? AND matiere = 'anglaistech') + (SELECT (AVG(note.note)*40) FROM `note` WHERE user = ? AND matiere = 'sae101')) / 100 FROM `note`";
      $stmt = $conn->prepare($sql);
      if ($stmt === false) {
 printf("Message d'erreur : %s\n", $conn->error);
die();
}
      $stmt->bind_param("ssss", $_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username']);
      $stmt->execute();
      $result = $stmt->get_result();
      $resultat = $result->fetch_row();
      $conn->close();
      break;
    case "1.2":
    $sql = "SELECT ((SELECT (AVG(note.note)*3) FROM `note` WHERE user = ? AND matiere = 'introarchi') + (SELECT (AVG(note.note)*24) FROM `note` WHERE user = ? AND matiere = 'initdev') + (SELECT (AVG(note.note)*3) FROM `note` WHERE user = ? AND matiere = 'introsyst') + (SELECT (AVG(note.note)*15) FROM `note` WHERE user = ? AND matiere = 'mathdisc') + (SELECT (AVG(note.note)*15) FROM `note` WHERE user = ? AND matiere = 'mathfond') + (SELECT (AVG(note.note)*40) FROM `note` WHERE user = ? AND matiere = 'sae102')) / 100 FROM `note`";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
printf("Message d'erreur : %s\n", $conn->error);
die();
}
    $stmt->bind_param("ssssss", $_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username']);
    $stmt->execute();
    $result = $stmt->get_result();
    $resultat = $result->fetch_row();
    $conn->close();
      break;
    case "1.3":
    $sql = "SELECT ((SELECT (AVG(note.note)*21) FROM `note` WHERE user = ? AND matiere = 'introarchi') + (SELECT (AVG(note.note)*12) FROM `note` WHERE user = ? AND matiere = 'anglaistech') + (SELECT (AVG(note.note)*21) FROM `note` WHERE user = ? AND matiere = 'introsyst') + (SELECT (AVG(note.note)*6) FROM `note` WHERE user = ? AND matiere = 'comm1') + (SELECT (AVG(note.note)*40) FROM `note` WHERE user = ? AND matiere = 'sae103')) / 100 FROM `note`";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
printf("Message d'erreur : %s\n", $conn->error);
die();
}
    $stmt->bind_param("sssss", $_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username']);
    $stmt->execute();
    $result = $stmt->get_result();
    $resultat = $result->fetch_row();
    $conn->close();
      break;
    case "1.4":
    $sql = "SELECT ((SELECT (AVG(note.note)*36) FROM `note` WHERE user = ? AND matiere = 'introbdd') + (SELECT (AVG(note.note)*18) FROM `note` WHERE user = ? AND matiere = 'mathdisc') + (SELECT (AVG(note.note)*6) FROM `note` WHERE user = ? AND matiere = 'econum') + (SELECT (AVG(note.note)*40) FROM `note` WHERE user = ? AND matiere = 'sae104')) / 100 FROM `note`";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
printf("Message d'erreur : %s\n", $conn->error);
die();
}
    $stmt->bind_param("ssss", $_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username']);
    $stmt->execute();
    $result = $stmt->get_result();
    $resultat = $result->fetch_row();
    $conn->close();
      break;
    case "1.5":
    $sql = "SELECT ((SELECT (AVG(note.note)*18) FROM `note` WHERE user = ? AND matiere = 'devweb') + (SELECT (AVG(note.note)*27) FROM `note` WHERE user = ? AND matiere = 'gpo1') + (SELECT (AVG(note.note)*15) FROM `note` WHERE user = ? AND matiere = 'comm1') + (SELECT (AVG(note.note)*40) FROM `note` WHERE user = ? AND matiere = 'sae105')) / 100 FROM `note`";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
printf("Message d'erreur : %s\n", $conn->error);
die();
}
    $stmt->bind_param("ssss", $_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username']);
    $stmt->execute();
    $result = $stmt->get_result();
    $resultat = $result->fetch_row();
    $conn->close();
      break;
    case "1.6":
    $sql = "SELECT ((SELECT (AVG(note.note)*5) FROM `note` WHERE user = ? AND matiere = 'devweb') + (SELECT (AVG(note.note)*11) FROM `note` WHERE user = ? AND matiere = 'gpo1') + (SELECT (AVG(note.note)*11) FROM `note` WHERE user = ? AND matiere = 'econum') + (SELECT (AVG(note.note)*11) FROM `note` WHERE user = ? AND matiere = 'anglaistech') + (SELECT (AVG(note.note)*11) FROM `note` WHERE user = ? AND matiere = 'comm1') + (SELECT (AVG(note.note)*11) FROM `note` WHERE user = ? AND matiere = 'ppp1') + (SELECT (AVG(note.note)*40) FROM `note` WHERE user = ? AND matiere = 'sae106')) / 100 FROM `note`";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
printf("Message d'erreur : %s\n", $conn->error);
die();
}
    $stmt->bind_param("sssssss", $_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username']);
    $stmt->execute();
    $result = $stmt->get_result();
    $resultat = $result->fetch_row();
    $conn->close();
      break;
    case "2.1":
    $sql = "SELECT ((SELECT (AVG(note.note)*21) FROM `note` WHERE user = ? AND matiere = 'doo') + (SELECT (AVG(note.note)*21) FROM `note` WHERE user = ? AND matiere = 'ihm') + (SELECT (AVG(note.note)*12) FROM `note` WHERE user = ? AND matiere = 'qualitedev') + (SELECT (AVG(note.note)*6) FROM `note` WHERE user = ? AND matiere = 'comm2') + (SELECT (AVG(note.note)*38) FROM `note` WHERE user = ? AND matiere = 'sae201') + (SELECT (AVG(note.note)*2) FROM `note` WHERE user = ? AND matiere = 's2folio')) / 100 FROM `note`";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
printf("Message d'erreur : %s\n", $conn->error);
die();
}
    $stmt->bind_param("ssssss", $_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username']);
    $stmt->execute();
    $result = $stmt->get_result();
    $resultat = $result->fetch_row();
    $conn->close();
      break;
    case "2.2":
    $sql = "SELECT ((SELECT (AVG(note.note)*15) FROM `note` WHERE user = ? AND matiere = 'doo') + (SELECT (AVG(note.note)*12) FROM `note` WHERE user = ? AND matiere = 'basniveau') + (SELECT (AVG(note.note)*21) FROM `note` WHERE user = ? AND matiere = 'graphes') + (SELECT (AVG(note.note)*12) FROM `note` WHERE user = ? AND matiere = 'methnum') + (SELECT (AVG(note.note)*38) FROM `note` WHERE user = ? AND matiere = 'sae202') + (SELECT (AVG(note.note)*2) FROM `note` WHERE user = ? AND matiere = 's2folio')) / 100 FROM `note`";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
printf("Message d'erreur : %s\n", $conn->error);
die();
}
    $stmt->bind_param("ssssss", $_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username']);
    $stmt->execute();
    $result = $stmt->get_result();
    $resultat = $result->fetch_row();
    $conn->close();
      break;
    case "2.3":
    $sql = "SELECT ((SELECT (AVG(note.note)*36) FROM `note` WHERE user = ? AND matiere = 'basniveau') + (SELECT (AVG(note.note)*15) FROM `note` WHERE user = ? AND matiere = 'reseaux') + (SELECT (AVG(note.note)*6) FROM `note` WHERE user = ? AND matiere = 'anglaisentr') + (SELECT (AVG(note.note)*3) FROM `note` WHERE user = ? AND matiere = 'comm2') + (SELECT (AVG(note.note)*38) FROM `note` WHERE user = ? AND matiere = 'sae203') + (SELECT (AVG(note.note)*2) FROM `note` WHERE user = ? AND matiere = 's2folio')) / 100 FROM `note`";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
printf("Message d'erreur : %s\n", $conn->error);
die();
}
    $stmt->bind_param("ssssss", $_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username']);
    $stmt->execute();
    $result = $stmt->get_result();
    $resultat = $result->fetch_row();
    $conn->close();
      break;
    case "2.4":
    $sql = "SELECT ((SELECT (AVG(note.note)*30) FROM `note` WHERE user = ? AND matiere = 'bdd2') + (SELECT (AVG(note.note)*12) FROM `note` WHERE user = ? AND matiere = 'stats') + (SELECT (AVG(note.note)*12) FROM `note` WHERE user = ? AND matiere = 'gpo2') + (SELECT (AVG(note.note)*6) FROM `note` WHERE user = ? AND matiere = 'anglaisentr') + (SELECT (AVG(note.note)*38) FROM `note` WHERE user = ? AND matiere = 'sae204') + (SELECT (AVG(note.note)*2) FROM `note` WHERE user = ? AND matiere = 's2folio')) / 100 FROM `note`";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
printf("Message d'erreur : %s\n", $conn->error);
die();
}
    $stmt->bind_param("ssssss", $_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username']);
    $stmt->execute();
    $result = $stmt->get_result();
    $resultat = $result->fetch_row();
    $conn->close();
      break;
    case "2.5":
    $sql = "SELECT ((SELECT (AVG(note.note)*3) FROM `note` WHERE user = ? AND matiere = 'ihm') + (SELECT (AVG(note.note)*6) FROM `note` WHERE user = ? AND matiere = 'qualitedev') + (SELECT (AVG(note.note)*6) FROM `note` WHERE user = ? AND matiere = 'graphes') + (SELECT (AVG(note.note)*30) FROM `note` WHERE user = ? AND matiere = 'gpo2') + (SELECT (AVG(note.note)*6) FROM `note` WHERE user = ? AND matiere = 'anglaisentr') + (SELECT (AVG(note.note)*9) FROM `note` WHERE user = ? AND matiere = 'comm2') + (SELECT (AVG(note.note)*38) FROM `note` WHERE user = ? AND matiere = 'sae205') + (SELECT (AVG(note.note)*2) FROM `note` WHERE user = ? AND matiere = 's2folio')) / 100 FROM `note`";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
printf("Message d'erreur : %s\n", $conn->error);
die();
}
    $stmt->bind_param("ssssssss", $_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username']);
    $stmt->execute();
    $result = $stmt->get_result();
    $resultat = $result->fetch_row();
    $conn->close();
      break;
    case "2.6":
    $sql = "SELECT ((SELECT (AVG(note.note)*4) FROM `note` WHERE user = ? AND matiere = 'ihm') + (SELECT (AVG(note.note)*17) FROM `note` WHERE user = ? AND matiere = 'droit') + (SELECT (AVG(note.note)*17) FROM `note` WHERE user = ? AND matiere = 'anglaisentr') + (SELECT (AVG(note.note)*11) FROM `note` WHERE user = ? AND matiere = 'comm2') + (SELECT (AVG(note.note)*11) FROM `note` WHERE user = ? AND matiere = 'ppp2') + (SELECT (AVG(note.note)*38) FROM `note` WHERE user = ? AND matiere = 'sae204') + (SELECT (AVG(note.note)*2) FROM `note` WHERE user = ? AND matiere = 's2folio')) / 100 FROM `note`";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
printf("Message d'erreur : %s\n", $conn->error);
die();
}
    $stmt->bind_param("sssssss", $_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username'],$_SESSION['username']);
    $stmt->execute();
    $result = $stmt->get_result();
    $resultat = $result->fetch_row();
    $conn->close();
      break;


  }
  return $resultat[0];
}
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['resetnote']))
{
  reset_note();
}

function reset_note() {
  $conn = new mysqli("localhost", "u559873887_NathanArkov", "Arkov_57", "u559873887_users");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "DELETE FROM `note` WHERE `user` = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $_SESSION['username']);
  $stmt->execute();
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; background-color: #242424; color: white;}
        .s1{ border: solid 4px #2a4253; width: 95%; margin: 20px auto; padding: 14px 28px; display: inline-block; border-radius: 5px; }
        .s2{ border: solid 4px #7b1738; width: 95%; margin: 20px auto; padding: 14px 28px; display: inline-block; border-radius: 5px; }
        .s1 h2 { text-shadow: 0px 2px 3px #000000;}
        .s2 h2 { text-shadow: 0px 2px 3px #000000;}
        .FlexContainer {
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
    align-content: flex-start;
    overflow: auto;
    flex-direction: row;
}
.FlexContainer div {
    margin: 5px;
    height: 400px;
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
    align-content: flex-start;
    overflow: auto;
    flex-direction: column;
}
.addnotes1 { border: solid 3px #1d8c93; width: 60%; padding: 14px 28px; background-color: rgba(29, 141, 149, 0.3); }
.shownotes1 { border: solid 3px #60cbbe; width: 30%; padding: 14px 28px; background-color: rgba(97, 204, 191, 0.3);}
.addnotes2 { border: solid 3px #ff6470; width: 60%; padding: 14px 28px; background-color: rgba(255, 100, 112, 0.3);}
.shownotes2 { border: solid 3px #ff9886; width: 30%; padding: 14px 28px; background-color: rgba(255, 152, 134, 0.3);}
.SAE { width: 90% !important;}
#semestre-1 { margin-bottom: 50px;}
header p { margin: 30px auto;}
.bouton { border: 2px solid black; border-radius: 5px; background-color: transparent; color: white; padding: 14px 28px; font-size: 17px; cursor: pointer;}
.bouton-jaune { color: #e6aa07; border-color: #e6aa07; }
.bouton-jaune:hover{ color: white; background-color: #e6aa07;}
.bouton-rouge { color: #c70c0c; border-color: #c70c0c; }
.bouton-rouge:hover {color: white; background-color:#c70c0c;}
header { margin-bottom: 50px;}
    </style>
</head>
<body>
  <header>
    <h1 class="my-5 blanc">Bienvenue, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
    <p class="blanc"><i>Pour signaler un problème, sur discord : nathan-chan#0069</i></p>
    <p>
        <button type="button" name="button" class="bouton bouton-rouge">Réinitialiser mes notes</button>
        <a href="reset-password.php" class="bouton bouton-jaune">Informations</a>
        <a href="logout.php" class="bouton bouton-rouge">Se Déconnecter</a>

    </p>
  </header>
    <div id="semestre-1">

      <div class="s1 FlexContainer">
        <h2 class="blanc">Semestre 1</h2>
      </div>
      <div class="s1 FlexContainer">

        <div class="addnotes1">
          <h2 class="my-5  blanc">Ajouter une note pour le S1</h2>
          <form action="welcome.php" method="post">
            <input type="radio" id="anglais" name="matiere" value="anglaistech">
            <label for="anglais">Anglais Technique</label>
            <input type="radio" id="mathdisc" name="matiere" value="mathdisc">
            <label for="mathdisc">MathsDisc</label>
            <input type="radio" id="mathfond" name="matiere" value="mathfond">
            <label for="mathfond">MathsFond</label>
            <input type="radio" id="initdev" name="matiere" value="initdev">
            <label for="initdev">InitDev</label>
            <input type="radio" id="introsyst" name="matiere" value="introsyst">
            <label for="introsyst">IntroSyst</label>
            <input type="radio" id="introbdd" name="matiere" value="introbdd">
            <label for="introbdd">IntroBDD</label>
            <input type="radio" id="introarchi" name="matiere" value="introarchi">
            <label for="introarchi">IntroArchi</label>
            <input type="radio" id="devweb" name="matiere" value="devweb">
            <label for="devweb">DevWeb</label>
            <input type="radio" id="comm1" name="matiere" value="comm1">
            <label for="comm1">Communication</label>
            <input type="radio" id="ppp1" name="matiere" value="ppp1">
            <label for="ppp1">PPP</label>
            <input type="radio" id="gpo1" name="matiere" value="gpo1">
            <label for="gpo1">GPO</label>
            <input type="radio" id="econum" name="matiere" value="econum">
            <label for="econum">Econum</label><br>
            Coef : <input type="number" name="coeff" step="0.01" min=0><br>
            Note : <input type="number" name="note" step="0.01" min=0><br>
            <input type="submit" name="resetnote">
          </form>
        </div>



        <div class="shownotes1">
          <h2 class="my-5  blanc">Vos moyennes</h2>
          <p>UE 1.1 : <?php echo show_note("1.1") ?></p>
          <p>UE 1.2 : <?php echo show_note("1.2") ?></p>
          <p>UE 1.3 : <?php echo show_note("1.3") ?></p>
          <p>UE 1.4 : <?php echo show_note("1.4") ?></p>
          <p>UE 1.5 : <?php echo show_note("1.5") ?></p>
          <p>UE 1.6 : <?php echo show_note("1.6") ?></p>
        </div>
      </div>

      <div class="s1 FlexContainer">
        <div class="addnotes1 SAE">
          <h2 class="my-5  blanc">Ajouter une note de SAE pour le S1</h2>
          <form action="welcome.php" method="post">
            <input type="radio" id="sae101" name="matiere" value="sae101">
            <label for="sae101">SAE 1.01</label>
            <input type="radio" id="sae102" name="matiere" value="sae102">
            <label for="sae102">SAE 1.02</label>
            <input type="radio" id="sae103" name="matiere" value="sae103">
            <label for="sae103">SAE 1.03</label>
            <input type="radio" id="sae104" name="matiere" value="sae104">
            <label for="sae104">SAE 1.04</label>
            <input type="radio" id="sae105" name="matiere" value="sae105">
            <label for="sae105">SAE 1.05</label>
            <input type="radio" id="sae106" name="matiere" value="sae106">
            <label for="sae106">SAE 1.06</label><br>
            Coef : <input type="number" name="coeff" step="0.01" min=0><br>
            Note : <input type="number" name="note" step="0.01" min=0><br>
            <input type="submit" name="addnote">
          </form>
        </div>
      </div>
    </div>

    <div id="semestre-2">
      <div class="s2 FlexContainer">
        <h2 class="blanc">Semestre 2</h2>
      </div>
      <div class="s2 FlexContainer">

        <div class="addnotes2">
          <h2 class="my-5  blanc">Ajouter une note pour le S2</h2>
          <form action="welcome.php" method="post">
            <input type="radio" id="anglais" name="matiere" value="anglaisentr">
            <label for="anglais">Anglais d'Entreprise</label>
            <input type="radio" id="doo" name="matiere" value="doo">
            <label for="doo">DevOriObj</label>
            <input type="radio" id="ihm" name="matiere" value="ihm">
            <label for="ihm">Dev IHM</label>
            <input type="radio" id="qualitedev" name="matiere" value="qualitedev">
            <label for="qualitedev">Qualité de Dev</label>
            <input type="radio" id="basniveau" name="matiere" value="basniveau">
            <label for="basniveau">Bas Niveau</label>
            <input type="radio" id="reseaux" name="matiere" value="reseaux">
            <label for="reseaux">IntroReseaux</label>
            <input type="radio" id="bdd2" name="matiere" value="bdd2">
            <label for="bdd2">Exploitation BDD</label>
            <input type="radio" id="graphes" name="matiere" value="graphes">
            <label for="graphes">Graphes</label>
            <input type="radio" id="stats" name="matiere" value="stats">
            <label for="stats">Stats</label>
            <input type="radio" id="methnum" name="matiere" value="methnum">
            <label for="methnum">MethodesNum</label>
            <input type="radio" id="gpo2" name="matiere" value="gpo2">
            <label for="gpo2">GPO</label>
            <input type="radio" id="droit" name="matiere" value="droit">
            <label for="droit">Droit</label>
            <input type="radio" id="comm2" name="matiere" value="comm2">
            <label for="comm2">Communication</label>
            <input type="radio" id="ppp2" name="matiere" value="ppp2">
            <label for="ppp2">PPP</label><br>
            Coef : <input type="number" name="coeff" step="0.01" min=0><br>
            Note : <input type="number" name="note" step="0.01" min=0><br>
            <input type="submit" name="addnote">
          </form>
        </div>



        <div class="shownotes2">
          <h2 class="my-5  blanc">Vos moyennes</h2>
          <p>UE 2.1 : <?php echo show_note("2.1") ?></p>
          <p>UE 2.2 : <?php echo show_note("2.2") ?></p>
          <p>UE 2.3 : <?php echo show_note("2.3") ?></p>
          <p>UE 2.4 : <?php echo show_note("2.4") ?></p>
          <p>UE 2.5 : <?php echo show_note("2.5") ?></p>
          <p>UE 2.6 : <?php echo show_note("2.6") ?></p>
        </div>
      </div>

      <div class="s2 FlexContainer">
        <div class="addnotes2 SAE">
          <h2 class="my-5  blanc">Ajouter une note de SAE pour le S2</h2>
          <form action="welcome.php" method="post">
            <input type="radio" id="sae201" name="matiere" value="sae201">
            <label for="sae201">SAE 2.01</label>
            <input type="radio" id="sae202" name="matiere" value="sae202">
            <label for="sae202">SAE 2.02</label>
            <input type="radio" id="sae203" name="matiere" value="sae203">
            <label for="sae203">SAE 2.03</label>
            <input type="radio" id="sae204" name="matiere" value="sae204">
            <label for="sae204">SAE 2.04</label>
            <input type="radio" id="sae205" name="matiere" value="sae205">
            <label for="sae205">SAE 2.05</label>
            <input type="radio" id="sae206" name="matiere" value="sae206">
            <label for="sae206">SAE 2.06</label><br>
            <input type="radio" id="s2folio" name="matiere" value="s2folio">
            <label for="s2folio">Portfolio</label><br>
            Coef : <input type="number" name="coeff" step="0.01" min=0><br>
            Note : <input type="number" name="note" step="0.01" min=0><br>
            <input type="submit" name="addnote">
          </form>
        </div>
      </div>

    </div>
</body>
</html>
