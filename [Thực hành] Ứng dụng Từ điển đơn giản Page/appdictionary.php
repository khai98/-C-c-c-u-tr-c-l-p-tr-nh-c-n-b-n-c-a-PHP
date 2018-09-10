<?php
$dictionarys = ( ["name" => "khai", "age" => "18", "location" => "hanoi", "home" => "saison", "id" => "dinh", "computer" => "pc", "money" => "tien"]);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $search = $_POST["search"];
        $savekey = 0;
        foreach ($dictionarys as $key => $dictionary) {
            if ($search == $key) {
                echo " Từ: " . $key . ". <br/>  Nghĩa của từ: " . $dictionary;
                echo "<br/>";
                $savekey = 1;
            }

        }
        if($savekey == 0){
            echo "Không tìm thấy từ cần tra.";
        }

    }

?>


<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Từ Điển Anh - Việt</h2>
<form method="post">
    <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
    <input type="submit" id="submit" value="Tìm"/>
</form>
</body>
</html>
