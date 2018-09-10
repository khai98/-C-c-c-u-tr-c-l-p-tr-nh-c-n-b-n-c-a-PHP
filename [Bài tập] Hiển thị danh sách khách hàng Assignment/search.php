<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .thumbnail {
            height: 60px;
            width: 100px;
            overflow: hidden;
        }

        .thumbnail img {
            width: 100%;
        }

        .text {
            text-align: center;
            font-weight: bold;
        }

        .search {
            width: 40%;
            margin-left: 280px;

        }
    </style>
</head>
<body>
<table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>

    <?php
    $customerlists = array(
        "1" => array("ten" => "Mai Văn Hoàn", "ngaysinh" => "1983-08-20", "diachi" => "Hà Nội", "anh" => "images/img2.jpg"),
        "2" => array("ten" => "Nguyễn Văn Nam", "ngaysinh" => "1983-08-21", "diachi" => "Bắc Giang", "anh" => "images/img2.jpg"),
        "3" => array("ten" => "Nguyễn Thái Hòa", "ngaysinh" => "1983-08-22", "diachi" => "Nam Định", "anh" => "images/img2.jpg"),
        "4" => array("ten" => "Trần Đăng Khoa", "ngaysinh" => "1983-08-17", "diachi" => "Hà Tây", "anh" => "images/img2.jpg"),
        "5" => array("ten" => "Nguyễn Đình Thi", "ngaysinh" => "1983-08-19", "diachi" => "Hà Nội", "anh" => "images/img2.jpg")
    );

    foreach ($customerlists as $key => $values) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $values['ten'] . "</td>";
        echo "<td>" . $values['ngaysinh'] . "</td>";
        echo "<td>" . $values['diachi'] . "</td>";
        echo "<td><div class='thumbnail'><image src = '" . $values['anh'] . "'/></div></td>";
        echo "</tr>";
    }

    ?>
</table>
</body>
</html>

 <p> Tên mà bạn muốn tìm là :</p>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $search = $_GET["search"];
    $savekey = 0;


    foreach ($customerlists as $key => $customerlist) {
        $find = strpos($customerlist['ten'], $search);
        if ($find !== false) {

            echo " Tên : ".$customerlist['ten']." Ngày sinh : ".$customerlist['ngaysinh']. " Địa chỉ : " . $customerlist['diachi'] . "</br>" ."<td><div class='thumbnail'><image src = '" . $values['anh'] . "'/></div></td>" ;
           $savekey = 1;
        }
    }


    if($savekey == 0){
        echo "Không tìm thấy từ cần tra.";
    }
}
?>