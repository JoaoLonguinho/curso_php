<?php

require_once "db.php";
require_once "globals.php";
require_once "model/Message.php";
require_once "model/Product.php";

class ProductDao{

    private $conn;

    private $url;

    private $message;

    public function __construct(PDO $conn, $url){
        $this->conn = $conn;
        $this->url = $url;
        $this->message = new Message($url);
    }

    public function buildProduct($data){
        $product = new Product();

        $product->id = $data->id;
        $product->productName = $data->name;
        $product->productDesc = $data->description;
        $product->productPrice = $data->price;
        $product->user_id = $data->user_id;

        return $product;
    }
    public function createProduct($user_id, $productName, $productDesc, $productPrice){
        $stmt = $this->conn->prepare("INSERT INTO products (name, description, price, user_id
        ) VALUES (:name, :description, :price, :user_id)");

        $stmt->bindParam(":name", $productName);
        $stmt->bindParam(":description", $productDesc);
        $stmt->bindParam(":price", $productPrice);
        $stmt->bindParam(":user_id", $user_id);

        $stmt->execute();
    }
    public function getAllProducts(){
        $allProducts = [];

        $stmt = $this->conn->prepare("SELECT * FROM products");

        $stmt->execute();

        $productListInDB = $stmt->fetchAll();


        foreach($productListInDB as $productInDB){
            $product = new Product();

            $product->id = $productInDB["id"];
            $product->name = $productInDB["name"];
            $product->description = $productInDB["description"];
            $product->price = $productInDB["price"];
            $product->user_id = $productInDB["user_id"];

            $allProducts[] = $this->buildProduct($product);

        }
        return $allProducts;
    }
    public function getProductsById($id){
        $stmt = $this->conn->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    
        $productInDb = $stmt->fetch();
    
        if($productInDb){
            $product = new Product();
            $product->id = $productInDb["id"];
            $product->productName = $productInDb["name"];
            $product->productDesc = $productInDb["description"];
            $product->productPrice = $productInDb["price"];
            $product->user_id = $productInDb["user_id"];
    
            return $product;
        }
        return null;
    }
    public function getProductsByUserId($user_id){
        $allProducts = [];

        $stmt = $this->conn->prepare("SELECT * FROM products WHERE user_id = :user_id");

        $stmt->bindParam(":user_id", $user_id);

        $stmt->execute();

        $productListInDB = $stmt->fetchAll();


        foreach($productListInDB as $productInDB){
            $product = new Product();

            $product->id = $productInDB["id"];
            $product->name = $productInDB["name"];
            $product->description = $productInDB["description"];
            $product->price = $productInDB["price"];
            $product->user_id = $productInDB["user_id"];

            $allProducts[] = $this->buildProduct($product);

        }
        return $allProducts;
    }
    
}