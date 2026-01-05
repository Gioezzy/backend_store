<?php

  include_once 'dbconnect.php';
  $statement = $conn->prepare("SELECT id, name, price, promo, description, images, stock, vendors, category FROM product_items WHERE category = 'Sepatu Wanita';");
  $statement->execute();
  $statement->bind_result($id, $name, $price, $promo, $description, $images, $stock, $vendors, $category);
  $arrayProduct = array();

  while ($statement->fetch()) {
    $data = array();
    $data['id'] = $id;
    $data['name'] = $name;
    $data['price'] = $price;
    $data['promo'] = $promo;
    $data['description'] = $description;
    $data['images'] = $images;
    $data['stock'] = $stock;
    $data['vendors'] = $vendors;
    $data['category'] = $category;
    array_push($arrayProduct, $data);
  }
  echo json_encode($arrayProduct);
