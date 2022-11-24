<?php
//claas b kế thừa class a (B extent A)
//Class B có thể truy cập được các thuộc tinh /phuong thuc của class a
//a k dc sd các thuộc tinh và phương thức của lớp con (b)
//php là ngôn ngữ đơn kê thừa(tưc là 1 class chỉ đc phép extent 1 class khác)\
//nhưng class A có thể class cha của nhiều lơp

class Animal{
    //thuoc tinh
    var $name;
    var $age;
    //phuong thuc construct để tạo thuộc tính gán cho nhanh
    function __construct($name = "", $age = 0)
    {
        $this->name =$name;
        $this->age =$age;
    }
    //phương thức hiển thị thông tin
    public function getInfor()
    {
        echo "Tôi tên là $this->name - Năm nay tôi được $this->age tuổi ";
    }
}
class Dog extends Animal{

}
class Cat extends Animal{

}
$infoDog = new Dog('Tuấn', 20); //obj
$inforCat = new Cat('Hùng', 20);

$infoDog -> getInfor();

echo "<br>";
$inforCat->getInfor();

