<?php
require_once 'controller/airlineController.php';
require_once 'controller/flightController.php';

$url = isset($_GET['url']) == true ? $_GET['url'] : '/';

$airMain = new airController;
$flightMain = new fliController;

switch ($url) {

    case '/':
        $airMain->home();
        break;

    case 'list-flight':
        $flightMain->listFlight();
        break;

    case 'add-flight':
        if (isset($_POST['add'])) {
            $flightMain->addFlights($_POST['flight_number'], $_FILES['image'], $_POST['total_passengers'], $_POST['description'], $_POST['airline_id']);
        }
        $flightMain->addVieFlight();
        break;

    case 'update-flight':
        if (isset($_POST['update'])) {
            $flightMain->uppFlight($_GET['id'], $_POST['flight_number'], $_FILES['image'], $_POST['total_passengers'], $_POST['description'], $_POST['airline_id']);
            // var_dump($_GET['id'], $_POST['flight_number'], $_FILES['image'], $_POST['total_passengers'], $_POST['description'], $_POST['airline_id']);
            // die;
        }
        $flightMain->updateFlight($_GET['id']);
        break;


    case 'delete-flight';
        $flightMain->deleteFlight($_GET['id']);
        header('location: index.php?url=list-flight');
        break;
        ///////////////////////////////////

    case 'list-airline':
        $airMain->listAirline();
        break;

    case 'add-airline':
        if (isset($_POST['add'])) {
            $airMain->addViewAirs($_POST['name']);
            header('location: index.php?url=list-airline');
        }
        $airMain->addViewAir();
        break;


    case 'update-airline':
        if (isset($_POST['update'])) {
            $airMain->updateAir($_GET['id'], $_POST['name']);
            header('location: index.php?url=list-airline');
        }
        $airMain->updateAirline($_GET['id']);
        break;

    case 'delete-airline';
        $airMain->deleteAirline($_GET['id']);
        header('location: index.php?url=list-airline');
        break;
}
