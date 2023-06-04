<?php
class ProductManager extends Database{
    private $product_name, $product_description,$product_price,$image_name, $image_tmp;

   function __construct($name,$desc, $price,$img_name,$img_tmp){
        $this->product_name=$name;
        $this->product_description=$desc;
        $this->product_price=$price;
        $this->image_name=$img_name;
        $this->image_tmp=$img_tmp;
    }


    public function createProduct()
    {
        $tm=md5(time());
        $dstenation1="../product_images/".$tm.$this->image_name;
        $dstenation2="../product_images/".$tm.$this->image_name;
        move_uploaded_file($this->image_tmp, $dstenation2);

        $sql="INSERT INTO products(product_name,product_description,product_image,product_price)
        VALUES(?,?,?,?)";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$this->product_name,$this->product_description,$dstenation2, $this->product_price]);

        header("location:../pages/admin_dashboard.php");
    }
}

?>