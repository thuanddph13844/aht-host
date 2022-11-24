<?php
//tính đa hình áp dụng cho các lớp kế thừa
//tính chất này thể hiện qua overwrite(ghi đè/ định nghĩa lại) thuộc tính phương thức


class Animal
{
    function say (){
        echo "Hello world";
    }
}
class Duck extends Animal{
    function say()
    {
        echo "quac quac";
    }
}
class Chicken extends Animal{

}
//đa tính đa hình sẽ ưu tiên kiểm tra xem trong lớp con có hàm đc định nghĩa lại hay k, nếu có thì php sẽ ưu tiên dùng hàm ở lơp con
//k có thì sẽ dùng lại của lớp cha
$vit = new Duck();
$vit ->say();
$ga = new Chicken();
$ga ->say();
