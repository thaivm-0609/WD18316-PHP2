<?php 
    //lớp trừu tượng (abstract class)
    //abstract class là class có ít nhất 1 abstract function
    abstract class Animal {
        //thuộc tính (attribute)
        //phương thức (method)
    }

    //lớp con, kế thừa từ một lớp trừu tượng
    class Cat extends Animal {

    }
    // $animal = new Animal();
    $cat = new Cat();
    var_dump($cat);

    //interface
    /*nếu implements Interface thì có thể lấy 
    function trong interface nhưng phải ghi đè
    */
    interface TenInterface 
    {
        //chỉ chứa phương thức (method), ko có attribute
        function run();
        function eat();
    }

    class Cat implements TenInterface {
        function run() {
            echo "Chạy bằng 4 chân";
        }
    }

    class Human implements TenInterface {
        function run() {
            echo "Chạy bằng 2 chân";
        }
    }
    
    //traits
    //php đơn kế thừa: 1 class sẽ chỉ extends 1 class
    //để kế thừa từ nhiều traits
    trait TenTraits {
        function tenFunction() {
        }
    }
    trait Traits2 {
        function tenFunction2() {
        }
    }
    class TenClass {
        use TenTraits,Trait2; //class sử dụng nhiều traits 
    }
?>