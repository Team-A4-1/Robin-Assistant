<?php
include "../header/dashboard-header-sidebar.php";
?>

<link rel="stylesheet" href="patient-toevoegen.css" />
    <div class="head">
        <h1 class="title">Patiënt toevoegen</h1>
        <div class="crumb">   <div class="crumbs crumbhome"><i class="fas fa-home"></i> ></div>
            <div class="crumbs crumbsfirst">Patiënten</div>
        </div>
    </div>

<div class="patient-cards">
  <div class="patient-card">

    <label for="">Voornaam</label><br>
    <input type="text" id="" name="" placeholder="Voornaam..."><br><br>

    <label for="">Achternaam</label><br>
    <input type="text" id="" name="" placeholder="Achternaam..."><br><br>

    <label for="">Leeftijd</label><br>
    <input type="text" id="" name="" placeholder="Leeftijd..."><br><br>

    <label for="">Geslacht</label><br>
    <select id="" name="">
        <option value="">Man</option>
        <option value="">Vrouw</option>
        <option value="">Andere</option>
    </select>
    <br><br>

    <label for="">Profiel afbeelding</label><br>
    <input type="file" id="myFile" name="filename">
    <br><br>

    <label for="">Extra informatie over patiënt</label><br>
    <textarea name="" rows="10" cols="30">Extra informatie...</textarea>

    <button class="button">Opslaan</button>

  </div>
</div>

<?php
include "../header/dashboard-footer.php";
