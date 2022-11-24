<?php
//là tiên trình băt lỗi đc tạo bởi chương trình của các bạn và sau đó thực hiện các hành động thích hợp. Nếu xử lí lỗi
//không chính xác thì có thể dẫn đến kết quả k mong đợi

try {
    throw new Exception('lỗi ở đây');
}
catch (Exception $e){
    echo "lỗi: " .$e->getMessage();
}