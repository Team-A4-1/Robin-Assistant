<?php
include "../header/dashboard-header-sidebar.php";
?>

<link rel="stylesheet" href="patienten.css" />
    <div class="head">
        <h1 class="title">Patiënten</h1>
        <div class="crumb">   <div class="crumbs crumbhome"><i class="fas fa-home"></i> ></div>
            <div class="crumbs crumbsfirst">Patiënten</div>
        </div>
    </div>

<div class="patient-cards">
  <div class="patient-card">
  <img class="patient-card-center user-image" src="../assets/mike-andrei-433.jpeg" alt="user-icon">
        <hr class="patient-card-hr">
        <p class="patient-card-left">Test gebruiker 1</p>
        <p class="patient-card-left">19</p>
        <p class="patient-card-left">Man</p>
        <a href="patient.php" class="fas fa-2x fa-arrow-alt-circle-right patient-card-right"></a>
  </div>

  <div class="patient-card">
  <img class="patient-card-center" src="../assets/account_box-black-18dp.svg" alt="user-icon">
        <hr class="patient-card-hr">
        <p class="patient-card-left">Naam</p>
        <p class="patient-card-left">Leeftijd</p>
        <p class="patient-card-left">Geslacht</p>
        <i class="fas fa-2x fa-arrow-alt-circle-right patient-card-right"></i>
  </div>

  <div class="patient-card">
  <img class="patient-card-center" src="../assets/account_box-black-18dp.svg" alt="user-icon">
        <hr class="patient-card-hr">
        <p class="patient-card-left">Naam</p>
        <p class="patient-card-left">Leeftijd</p>
        <p class="patient-card-left">Geslacht</p>
        <i class="fas fa-2x fa-arrow-alt-circle-right patient-card-right"></i>
  </div>

  <div class="patient-card">
  <img class="patient-card-center" src="../assets/account_box-black-18dp.svg" alt="user-icon">
        <hr class="patient-card-hr">
        <p class="patient-card-left">Naam</p>
        <p class="patient-card-left">Leeftijd</p>
        <p class="patient-card-left">Geslacht</p>
        <i class="fas fa-2x fa-arrow-alt-circle-right patient-card-right"></i>
  </div>

  <div class="patient-card">
  <img class="patient-card-center" src="../assets/account_box-black-18dp.svg" alt="user-icon">
        <hr class="patient-card-hr">
        <p class="patient-card-left">Naam</p>
        <p class="patient-card-left">Leeftijd</p>
        <p class="patient-card-left">Geslacht</p>
        <i class="fas fa-2x fa-arrow-alt-circle-right patient-card-right"></i>
  </div>

  <div class="card"><a href="patient-toevoegen.php" class="fas plus-knop fa-4x fa-plus-circle"></a></div>
</div>

<?php
include "../header/dashboard-footer.php";
