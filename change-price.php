<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        h1 {
            margin-bottom: 20px;
        }
        
        .space {
            padding: 0 12px;
            visibility: hidden;
        }

        .line {
            height: 1px;
            width: 100%;
            background-color: #000;
        }
    </style>
</head>
<?php 
include('./database.php')

?>
<body style="display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 0 15px;">
    <h1>Đổi bảng giá</h1>
    <form class="row g-3" method="POST" action="./server.php">
        <?php 
            $sql = "SELECT * FROM price";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $name = $row['name'];
                    echo($name);
                    echo "<div class='input-group'>
                    <span class='space'>".$row['name']."</span>
                    <span class='form-control'>Mua vào</span>
                    <span class='form-control'>Bán ra</span>
                </div>
                <div class='input-group'>
                    <span class='input-group-text'>".$row['name']."</span>
                    <input type='text' name=".$row['id'].'mua_vao'." class='form-control number-separator' value=".$row['mua_vao'].">
                    <input type='text' name=".$row['id'].'ban_ra'." class='form-control number-separator' value=".$row['ban_ra'].">
                </div>
                <input type='hidden' name=".$row['id'].'name'." value='".$row['name']."'>
                <div class='line'></div>
                ";
                }
            } else {
                echo "0";
            }
        $conn->close();
        
        ?>
        <button type="submit" class="btn btn-success" style="margin-bottom: 40px;">Cập nhật</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/amiryxe/easy-number-separator/easy-number-separator.js"></script>
    <script>
        easyNumberSeparator({
            selector: '.number-separator',
            separator: '.'
        })
    </script>
</body>

</html>