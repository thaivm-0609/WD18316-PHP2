<?php
    require "pdo.php";

    function getUsers() {
        $sql = "SELECT * FROM users WHERE 1";
        $users = pdo_query($sql);

        return $users;
    }
?>