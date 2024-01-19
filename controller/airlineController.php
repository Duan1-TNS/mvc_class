<?php
require_once 'model/airline.php';
session_start();
class airController extends Airline
{
    private $airlineInstance;

    private function getAirInstance(){
        if(!$this -> airlineInstance){
            $this -> airlineInstance = new Airline;
        }
        return $this -> airlineInstance;
    }
    
    public function home()
    {
      include 'view/home.php';
    }

    public function listAirline(){
        $listAir = $this->getAirInstance()->getAllAirline();
        $this -> home();
        include 'view/airline/list.php';  
    }

    public function addViewAir(){
        $this -> home();
        include 'view/airline/add.php';
    }

    public function addViewAirs($name){
        $error = [];

        if(empty(trim($name))){
            $error['name']['required'] = 'Không bỏ trống tên sản phẩm';
        }else{
            if(strlen(trim($name))<5){
                $error['name']['length'] = 'Tên sản phẩm phải có ít nhất 5 kí tự';
            }
        }

        if(!empty($error)){
            $_SESSION['error_messages'] = $error;
        }else{
            $check = $this -> getAirInstance() -> addAirline($name);
            if($check){
                echo '<script>alert("Thêm sản phẩm thành công")</script>';
            }
        }
    }

    public function updateAirline($id){
        $airline = $this->getAirInstance()->getOneAirline($id);
        $this -> home();
        include 'view/airline/update.php';
    }
}
?>
