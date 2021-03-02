<?php
include "../header/dashboard-header-sidebar.php";
?>

<link rel="stylesheet" href="patient.css" />
    <div class="head">
        <h1 class="title">Patient</h1>
        <div class="crumb">   <div class="crumbs crumbhome"><i class="fas fa-home"></i> ></div>
            <div class="crumbs crumbsfirst">Patient</div>
        </div>
    </div>

    <div class="patient-cards">
        <div class="patient-card">
            <img class="patient-card-center user-image" src="../assets/mike-andrei-433.jpeg" alt="user-icon">
            <hr class="patient-card-hr">
            <p class="patient-card-left">Test gebruiker 1</p>
            <p class="patient-card-left">19</p>
            <p class="patient-card-left">Man</p>
        </div>

        <div class="patient-card-taken">
            Taken
        </div>

        <div class="patient-card-kalender">
            Kalender
        </div>
    </div>

<?php
include "../header/dashboard-footer.php";
