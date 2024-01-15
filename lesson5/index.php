<?php 
    //lớp trừu tượng (abstract class)
    //abstract class là class có ít nhất 1 abstract function
    abstract class Animal {
        //thuộc tính (attribute)
        //phương thức (method)
        abstract public function hamTruuTuong(); //không có phần xử lý logic bên trong
        //trong abstract class(lớp trừu tượng) có thể có
        //cả abstract function và function thường
        public function test() {

        }
    }

    //lớp con, kế thừa từ một lớp trừu tượng
    // class Cat extends Animal {
    //     //phải ghi đè abstract function (phương thức trừu tượng) thì
    //     //mới có thể sử dụng
    //     public function hamTruuTuong() { 

    //     }

    //     //không thể khai báo abstract function ở trong class thường
    //     // abstract public function hamTruuTuong2();
    // }
    // $animal = new Animal(); //không khởi tạo được object từ abstract class
    // $cat = new Cat(); //class thường thì khởi tạo được
    // var_dump($cat);

    //interface: là một templates, bản thiết kế các phương thức (method)
    /*nếu implements Interface thì phải ghi 
    đè toàn bộ function ở trong interface*/
    interface HanhDongDongVat 
    {
        // $public = 'public'; //không thể khai báo biến
        CONST Pi = 3.14; //có thể khai báo hằng số
        //chỉ chứa phương thức (method), ko có attribute
        public function run();
        public function eat();
    }

    //1 class có thể implements nhiều interface
    class Cat implements HanhDongDongVat {
        function run() {
            echo "Chạy bằng 4 chân";
        }
        function eat() {
            echo "chuột";
        }
    }
    /*class khi implements interface thì phải ghi đè
    lại toàn bộ phương thức (method) có trong 
    interface đó*/
    class Human implements HanhDongDongVat {
        function run() {
            echo "Chạy bằng 2 chân";
        }
        function eat() {
            echo "Ăn tạp";
        }
    }
    
    //traits
    //php dưới 5.4 đơn kế thừa: 1 class sẽ chỉ extends 1 class
    //traits (ra đời từ PHP 5.4): hỗ trợ cho đa kế thừa
    trait Traits1 {
        //khai báo phương thức (method)
        function getAll() {
            echo "Đây là trait 1";
        }
    }
    trait Traits2 {
        function getAll() {
            echo "Đây là trait 2";
        }
    }
    class TenClass {
        //1 class có thể use được nhiều traits
        // use Traits1,Traits2;
        
        //sử dụng insteadof để đặt độ ưu tiên cho trait
        use Traits1,Traits2 { 
            //đằng trước insteadOf sẽ là phương thức
            //được ưu tiên hơn
            Traits2::getAll insteadOf Traits1;  
        }
        
        //khi có các hàm trùng tên ở trong các trait 
        //được use trong cùng 1 class
        public function get() {
            return $this->getAll();
        }
    }

    $newObject = new TenClass();
    $newObject->get();
?>