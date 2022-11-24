<?php
//giúp bảo mật/bảo vệ dữ liệu của các phương thức/ thuộc tính trong 1 lớp.
//tránh việc vô tình, cố ý thay đổi dữ liệu của thuộc tính đã đc định nghĩa hoặc cố tình thực thi trái phép
//3 từ khóa protected, private, public sẽ giới hạn phạm vi truy cập của các thuộc tinh/pt trong 1 class

//private thì phương thức hoặc tt ch đc phép truy cập trong phạm vi lớp định ra nó
//protected thì phương thức hoặc tt ch đc phép truy cập trong phạm vi lớp định ra nó và kế thừa
class  Animal{
    private $name ="Thuandeptrai";
    protected $age = 20;
    function getName(){
        return $this->name;
    }
}
class duck extends Animal{
    function getAge(){
        return $this->age;
    }
}
$thun = new duck();

//echo $thun->getName();
echo $thun->getAge();