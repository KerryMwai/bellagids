<?php
class ProductManager extends Database{
    public function getAllProducts()
    {
        $sql="SELECT * FROM products";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        foreach($rows as $row){
            echo $row['product_name'];
        }
    }



    public function addCategory($name)
    {
        $sql="INSERT INTO categories(category_name) VALUES(?)";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$name]);
    }

    public function addProduct($name,$desc,$price, $image_name,$image_tmp)
    {
        $tm=md5(time());
        $dstenation1="../images/".$tm.$image_name;
        $dstenation2="../images/".$tm.$image_name;
        move_uploaded_file($image_tmp, $dstenation2);
        $sql="INSERT INTO products(product_name,product_description,product_image,product_price) VALUES(?,?,?,?)";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$name,$desc,$dstenation1,$price]);
    }
}

?>