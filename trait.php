
<?php
//trait dùng để khai báo, kế thừa nhiều hành vi/phương thức của nhiều lớp
class TongHieu {
    public function Tong($a,$b) {
        return $a + $b;
    }
    public function Hieu($a,$b){
        return $a-$b;
    }
}
trait TichThuong{
    public function Tich($a,$b) {
        return $a * $b;
    }
    public function Thuong($a,$b){
        return $a/$b;
    }

}
class TinhToan extends TongHieu{
    use TichThuong;
}
$tinhtoan= new TinhToan();
//Tong
echo "Tong:".$tinhtoan->Tong(4,5);

//Hieu
echo "Hieu:".$tinhtoan->Hieu(4,5);
//Tich
echo "Tich:".$tinhtoan->Tich(4,5);
//Thuong
echo "Thuong:".$tinhtoan->Thuong(4,5);


?>

