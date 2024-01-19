<?php
//khởi tạo class db để thực hiện kết nối CSDL
class db {
    protected $servername="localhost";
    protected $dbname = "wd18316";
    protected $username="root";
    protected $password="";

    //tạo kế nối với CSDL
    public function getConnect() {
        $connect = new PDO(
            "mysql:host=$this->servername;
            dbname=$this->dbname;
            $this->username;
            $this->password"
        );

        return $connect;
    }

    //thực hiện câu truy vấn để lấy dữ liệu từ CSDL
    public function getData($query) {
        $conn = $this->getConnect();
        $stmt = $conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}

?>