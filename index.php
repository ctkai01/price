<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./main.css" />
    <link>
</head>
<?php
include('./database.php')
?>

<body>
    <header>
        <!-- <div class="symbol-header" style="background-color: blue;"> -->
        <img src="./logo_ring.png" class="logo" height="80" />
        <!-- </div> -->
        <div class="content-header">
            <div class="title">DANH NGHIỆP VÀNG BẠC VIỆT HOÀN</div>
            <div class="content">
                <div class="text-main">Giá Vàng Hôm Nay</div>
                <div class="text-contact">
                    <div class="time" style="margin-bottom: 5px; color:coral"></div>
                    <div class="address" style="margin-bottom: 10px;">Ngã 3 - Cát Thịnh - Văn Chấn - Yên Bái</div>
                    <div class="phone">ĐT: 0346 147 495</div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="header-main">
            <div class="title-unit">ĐVT: 1000đ/ chỉ</div>
            <div class="title-main">BẢNG GIÁ VÀNG</div>
        </div>
        <div class="price-container">
            <table>
                <thead>
                    <tr>
                        <th>Loại vàng</th>
                        <th>Mua vào</th>
                        <th>Bán ra</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM price";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>".$row['name']."</td>
                            <td class='price_value'>".$row['mua_vao']."</td>
                            <td class='price_value'>".$row['ban_ra']."</td>
                        </tr>";
                        }
                    } else {
                        echo "0";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
            <div class="symbol-container">
                <div class="title">Điểm Bán Vàng Ủy Quyền Của Tập Đoàn </div>

                <div class="logo-container" style="display: flex;
    justify-content: center; margin-top: 10px;">
                    <img src="./dọi.jpeg" style="width: 415px; height: auto;" />
                </div>
            </div>
        </div>
    </main>
    <footer>
        <marquee direction="left">Doanh nghiệp Vàng Bạc Việt Hoàn Kính Chào Quý Khách - Chúc Quý Khách Hàng An Khanh Thịnh Vượng </marquee>
    </footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/locale/vi.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
<script src="https://unpkg.com/currency.js@~2.0.0/dist/currency.min.js"></script>
<script src="./main.js"></script>

</html>