<?php
require_once 'model/flight.php';
require_once 'model/airline.php';

class fliController extends Flight
{
    private $flightInstance;
    private $airConInstance;

    private function getFliInstance()
    {
        if (!$this->flightInstance) {
            $this->flightInstance = new Flight;
        }
        return $this->flightInstance;
    }

    private function getListAir()
    {
        if (!$this->airConInstance) {
            $this->airConInstance = new airController;
        }
        return $this->airConInstance;
    }

    public function listFlight()
    {
        $listFlight = $this->getFliInstance()->getAllFlight();
        $this->getListAir()->home();
        include 'view/flight/list.php';
    }

    public function addVieFlight()
    {
        $listAir = $this->getListAir()->getAllAirline();
        // print_r($listAir);
        $this->getListAir()->home();
        include 'view/flight/add.php';
    }

    public function addFlights($flight_number, $image, $total_passengers, $description, $airline_id)
    {
        //Thêm ảnh
        // var_dump($image);
        $targetDir = "public/image/"; // đường dẫn lưu ảnh
        $targetFile = $targetDir . $image['name'];
        if (move_uploaded_file($image['tmp_name'], $targetFile)) {
            $imageUrl = $targetFile;
        }

        $checkAdd = $this->getFliInstance()->addFlight($flight_number, $imageUrl, $total_passengers, $description, $airline_id);
        if (!$checkAdd) {
            echo '<script>alert("Thêm thành công")</script>';
            header('location: index.php?url=list-flight');
        }
    }

    public function updateFlight($id)
    {
        $listAir = $this->getListAir()->getAllAirline();
        $vieUppdate = $this->getFliInstance()->getOneFlight($id);
        $this->getListAir()->home();
        include 'view/flight/update.php';
    }

    public function updateFlights($id, $flight_number, $image, $total_passengers, $description, $airline_id)
    {

        $vieUppdate = $this->getFliInstance()->getOneFlight($id);

        if ($image['size'] != 0) {
            $targetDir = "public/image/";
            $targetFile = $targetDir . $image['name'];

            if (move_uploaded_file($image['tmp_name'], $targetFile)) {
                $imageUrl = $targetFile;
            }
        } else {
            $imageUrl = $vieUppdate['image'];
        }


        $check = $this->getFliInstance()->uppFlight($id, $flight_number, $imageUrl, $total_passengers, $description, $airline_id);

        if (!$check) {
            echo '<script>alert("Cap nhat sản phẩm thành công")</script>';
            echo '<script>window.location.href = "index.php?url=list-flight";</script>';
        }
    }
}
