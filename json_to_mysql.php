<?php

$connect = mysqli_connect("localhost", "root", "", "crud_vue");

$data = file_get_contents("user_data.json");

$array = json_decode($data, true);

foreach ($array as $row) {

    $sql = "INSERT INTO users (name, email, phone) VALUES ('" . $row['name'] . "','" . $row['email'] . "','" . $row['phone'] . "')";

    mysqli_query($connect, $sql);
}

echo "Data Inserted!";

echo $data;
