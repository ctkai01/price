<?php
include_once 'database.php';
if (
    isset($_POST['1name']) && isset($_POST['1ban_ra']) && isset($_POST['1mua_vao'])
    && isset($_POST['2name']) && isset($_POST['2ban_ra']) && isset($_POST['2mua_vao'])
    && isset($_POST['3name']) && isset($_POST['3ban_ra']) && isset($_POST['3mua_vao'])
    && isset($_POST['4name']) && isset($_POST['4ban_ra']) && isset($_POST['4mua_vao'])
    && isset($_POST['5name']) && isset($_POST['5ban_ra']) && isset($_POST['5mua_vao'])
    && isset($_POST['7name']) && isset($_POST['7ban_ra']) && isset($_POST['7mua_vao'])
    && isset($_POST['8name']) && isset($_POST['8ban_ra']) && isset($_POST['8mua_vao'])
) {
    $sql = "
        INSERT INTO railway.price (id, name, ban_ra, mua_vao) 
        VALUES 
        (1, '" . $_POST['1name'] . "', '" . $_POST['1ban_ra'] . "', '" . $_POST['1mua_vao'] . "'),
        (2, '" . $_POST['2name'] . "', '" . $_POST['2mua_vao'] . "', '" . $_POST['2ban_ra'] . "'),
        (3, '" . $_POST['3name'] . "', '" . $_POST['3mua_vao'] . "', '" . $_POST['3ban_ra'] . "'),
        (4, '" . $_POST['4name'] . "', '" . $_POST['4mua_vao'] . "', '" . $_POST['4ban_ra'] . "'),
        (5, '" . $_POST['5name'] . "', '" . $_POST['5mua_vao'] . "', '" . $_POST['5ban_ra'] . "'),
        (7, '" . $_POST['7name'] . "', '" . $_POST['7mua_vao'] . "', '" . $_POST['7ban_ra'] . "'),
        (8, '" . $_POST['8name'] . "', '" . $_POST['8mua_vao'] . "', '" . $_POST['8ban_ra'] . "') as t
        ON DUPLICATE KEY UPDATE id=t.id,
        name=t.name,
        mua_vao=t.mua_vao,
        ban_ra=t.ban_ra;
        ";

    try {
        if ($conn->query($sql)) {
            header("Location: change-price.php");
        } else {
            echo "Update thất bại: " . $conn->error;
        }
    } catch (Exception $e) {
        echo $conn->error;
    }
    $conn->close();
}
