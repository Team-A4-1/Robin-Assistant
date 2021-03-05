<?php
include "../header/dashboard-header-sidebar.php";
?>

<link rel="stylesheet" href="dashboard-home.css" />
    <div class="head">
        <h1 class="title">Home</h1>
        <div class="crumb">   <div class="crumbs crumbhome"><i class="fas fa-home"></i> ></div>
            <div class="crumbs crumbsfirst">Home</div>
        </div>
    </div>

<div class="wrapper">
	<div class="grid-container">

    <div class="home-box-1" style="padding:10px">
    Opkomende Taken
    <div class="calender">
		<?php
		require_once(__DIR__.'/taskHandling-2.php');
        $tasks = new taskHandling();
        $tasks->printTasks(true,true,true);

		?>
    </div>
    </div>

    
		<div class="home-box-2" style="padding:10px">
        Kalender
        <div class="calender">
		<?php
		require_once(__DIR__.'/taskHandling-2.php');
        $tasks = new taskHandling();
        $tasks->printTasks(true,true,true);
		?>
    </div>
        
        </div>
		<div class="home-box-3" style="padding:10px">
            Patiënten
            <div class="patient-cards">

                    <div class="patient-card">
                        <div class="user-home-icon">
                            <img class="user-home-image" src="../assets/mike-andrei-433.jpeg" alt="user-icon">
                        </div>
                        <div class="user-home-gegevens">
                            <p class="">Test gebruiker 1</p>
                            <p class="">19</p>
                            <p class="">Man</p>
                        </div>
                        <div class="user-home-arrow">
                            <a href="patient.php" class="fas fa-2x fa-arrow-alt-circle-right patient-card-right"></a>
                        </div>
                    </div>
                

                <div class="patient-card">
                        <div class="user-home-icon">
                            <img class="" src="../assets/account_box-black-18dp.svg" alt="user-icon">
                        </div>
                        <div class="user-home-gegevens">
                            <p class="">Naam</p>
                            <p class="">Leeftijd</p>
                            <p class="">Geslacht</p>
                        </div>
                        <div class="user-home-arrow">
                            <i class="fas fa-2x fa-arrow-alt-circle-right "></i>
                        </div>
                    </div>
                

                <div class="patient-card">
                        <div class="user-home-icon">
                            <img class="" src="../assets/account_box-black-18dp.svg" alt="user-icon">
                        </div>
                        <div class="user-home-gegevens">
                            <p class="">Naam</p>
                            <p class="">Leeftijd</p>
                            <p class="">Geslacht</p>
                        </div>
                        <div class="user-home-arrow">
                            <i class="fas fa-2x fa-arrow-alt-circle-right "></i>
                        </div>
                    </div>

                    <div class="patient-card">
                        <div class="user-home-icon">
                            <img class="" src="../assets/account_box-black-18dp.svg" alt="user-icon">
                        </div>
                        <div class="user-home-gegevens">
                            <p class="">Naam</p>
                            <p class="">Leeftijd</p>
                            <p class="">Geslacht</p>
                        </div>
                        <div class="user-home-arrow">
                            <i class="fas fa-2x fa-arrow-alt-circle-right "></i>
                        </div>
                    </div>

                    <div class="patient-card">
                        <div class="user-home-icon">
                            <img class="" src="../assets/account_box-black-18dp.svg" alt="user-icon">
                        </div>
                        <div class="user-home-gegevens">
                            <p class="">Naam</p>
                            <p class="">Leeftijd</p>
                            <p class="">Geslacht</p>
                        </div>
                        <div class="user-home-arrow">
                            <i class="fas fa-2x fa-arrow-alt-circle-right "></i>
                        </div>
                    </div>
                

            </div>
        </div>
	</div>
</div>

<?php
include "../header/dashboard-footer.php";
