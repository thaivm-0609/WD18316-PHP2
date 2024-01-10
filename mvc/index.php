<?php
    // require "Models/Users.php";

    // $url = isset($_GET['url']) 
    //     ? $_GET['url']
    //     : "/";

    // switch ($url) {
    //     case '/':
    //         $users = getUsers();
    //         include "Views/Users.php";
    // }

    /*
    1. Class (lớp): tập hợp những 
        đối tượng/thực thể có 
        thuộc tính/phương thức giống nhau
        1.1. Thuộc tính (attribute): những thông tin của đối tượng
        1.2. Phương thức (method): hành động mà class đó thực hiện
    */

    class SinhVien {
        function __construct($maSV,$ten,$chuyenNganh,$queQuan) {
            //sử dụng biến giả (psuedo)
            $this->maSV = $maSV;
            $this->ten = $ten;
            $this->chuyenNganh = $chuyenNganh;
            $this->queQuan = $queQuan;
        }

        public $namSinh = 'năm sinh'; //truy cập từ bất kỳ đâu
        protected $password = 'mật khẩu'; //chỉ những class kế thừa ms sử dụng đc
        private $abc = 'test'; //chỉ 1 mình nó đc sử dụng.
        //phương thức/method:
        public function hienThiThongTin() {
            echo $this->maSV.'-'.$this->ten.'-'.$this->chuyenNganh.'-'.$this->queQuan;
        } 

        function test() {
            echo $this->namSinh;
            echo $this->password;
            echo $this->abc;
        }
    }

    class SinhVienCNTT extends SinhVien {
        function test2() {
            echo $this->namSinh;
            echo $this->password;
            echo $this->abc;
        }
    }

    // bên ngoài class, chỉ có thể truy cập đc vào những thuộc tính public
    $sinhVien1 = new SinhVien('PH12345','Nguyen Van A','CNTT','BacNinh');
    // echo $sinhVien1->namSinh; // trả về "năm sinh"
    // echo $sinhVien1->password; // lỗi cannot access protected property
    // echo $sinhVien1->abc; // lỗi cannot access private property
    // $sinhVien1->test();

    $svCNTT1 = new SinhVienCNTT('PH12345','Nguyen Van B', 'CNTT', 'VN');
    // echo $svCNTT1->namSinh;
    // echo $svCNTT1->password;
    // echo $svCNTT1->abc;
    // $svCNTT1->test2();

    // khởi tạo object
    // $sinhVien1 = new SinhVien('PH12345','Nguyen Van A','CNTT','BacNinh');
    // $sinhVien1->hienThiThongTin();

    // $sinhVien2 = new SinhVien();

    //class hình chữ nhật:
    class HinhChuNhat {
        function __construct($chieuDai, $chieuRong) {
            $this->chieuDai = $chieuDai;
            $this->chieuRong = $chieuRong;
        } 

        public function tinhDienTich() {
            echo $this->chieuDai*$this->chieuRong;
        }
    }

    class HinhVuong extends HinhChuNhat {
        function __construct($canh) {
            $this->chieuDai = $canh;
            $this->chieuRong = $canh;
        }
    }

    $x = new HinhChuNhat(5,4);
    $x->tinhDienTich();

    $y = new HinhVuong(5);
    $y->tinhDienTich();
?>