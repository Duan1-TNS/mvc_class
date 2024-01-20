<?php require_once 'model/db.php';
class Flight extends DB
{
    public function getAllFlight()
    {
        $sql = "SELECT fl.id, fl.flight_number, fl.image, fl.total_passengers, fl.description, ai.name FROM flights AS fl INNER JOIN airlines as ai ON ai.id = fl.airline_id";
        return $this->getData($sql, true);
    }

    public function addFlight($flight_number, $image, $total_passengers, $description, $airline_id)
    {
        $sql = "INSERT INTO flights(id, flight_number,image, total_passengers, description, airline_id) VALUES ('null', '$flight_number','$image','$total_passengers','$description','$airline_id')";
        return $this->getData($sql);
    }

    public function getOneFlight($id)
    {
        $sql = "SELECT fl.flight_number,fl.image, fl.total_passengers, fl.description, ai.name FROM flights AS fl INNER JOIN airlines AS ai ON fl.airline_id = ai.id WHERE fl.id =" . $id;
        return $this->getData($sql, false);
    }

    public function uppFlight($id, $flight_number, $image, $total_passengers, $description, $airline_id)
    {
        $sql = "UPDATE flights SET flight_number ='$flight_number', image ='$image', total_passengers ='$total_passengers', description ='$description', airline_id ='$airline_id' WHERE id=" . $id;
        return $this->getData($sql);
    }

    public function deleteFlight($id)
    {
        $sql = "DELETE FROM flights WHERE id=" . $id;
        return $this->getData($sql, false);
    }
}
