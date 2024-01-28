<?php
namespace App\Models;

use PDO;
//khởi tạo class db để thực hiện kết nối CSDL
class db {
    protected $servername="localhost";
    protected $dbname = "wd18316";
    protected $username="root";
    protected $password="";

    //tạo kế nối với CSDL
    public function getConnect() {
        $connect = new PDO(
            //4 tham số truyền vào PDO
            // "mysql:host=localhost;dbname=wd18316","root",""

            "mysql:host=" . $this->servername //tương đương "mysql:host=localhost
            . ";dbname=" . $this->dbname, //tương đương ;dbname=wd18316
            $this->username,
            $this->password
        );

        return $connect;
    }

    //thực hiện câu truy vấn để lấy danh sách dữ liệu từ CSDL
    public function getData($query) {
        $conn = $this->getConnect(); //khởi tạo kết nối CSDL
        $stmt = $conn->prepare($query); //
        $stmt->execute(); //thực thi câu truy vấn

        return $stmt->fetchAll();
    }

    //lấy duy nhất 1 bản ghi theo ID
    public function getDataById($query) {
        $conn = $this->getConnect(); //khởi tạo kết nối CSDL
        $stmt = $conn->prepare($query); //
        $stmt->execute(); //thực thi câu truy vấn

        return $stmt->fetch();
    }
}

?>