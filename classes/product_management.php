<?php
class ProductManager extends Database{
    public function getAllProductsTodisplayForAdmin()
    {
        $sql="SELECT * FROM products";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        $count=0;
        foreach($rows as $row){
            echo "
            <div class='col-lg-4 col-md-6 col-sm-12'>
                <div class='card m-sm-2 m-xsm-2'>
                <div class='card-header bg-dark'>
                    <h3 class='text-white'>$row[product_name]</h3>
                    <p class='text-white'><span class='text-warning'>Price </span>  KES $row[product_price]/=</p>
                </div>
                <div class='card-body bg-secondary'>
                    <img class='img-fluid' src='$row[product_image]' style='height:25rem;'>
                </div>
                <div class='card-footer bg-dark'>
                    <div class='row d-flex'>
                        <div class='col-8'>
                            <a href='edit_product.php?id=$row[id]' class='btn  btn-success'>Edit</a>
                        </div>
                        <div class='col-4 '>
                            <a href='delete_product.php?id=$row[id]' class='btn btn-danger float-right'>Delete</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
           ";
        }
    }

    public function getAllProductsTodisplayForAdminCategory($category)
    {
        $sql="SELECT * FROM products  WHERE category=?";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$category]);
        $rows=$stmt->fetchAll();
        $count=0;
        if($rows){
            foreach($rows as $row){
                echo "
                <div class='col-lg-4 col-md-6 col-sm-12'>
                    <div class='card m-sm-2 m-xsm-2'>
                    <div class='card-header bg-dark'>
                        <h3 class='text-white'>$row[product_name]</h3>
                        <p class='text-white'><span class='text-warning'>Price </span>  KES $row[product_price]/=</p>
                    </div>
                    <div class='card-body bg-secondary'>
                        <img class='img-fluid' src='$row[product_image]' style='height:25rem;' alt=''>
                    </div>
                    <div class='card-footer bg-dark'>
                        <div class='row d-flex'>
                            <div class='col-8'>
                                <a href='edit_product.php?id=$row[id]' class='btn  btn-success'>Edit</a>
                            </div>
                            <div class='col-4 '>
                                <a href='delete_product.php?id=$row[id]' class='btn btn-danger float-right'>Delete</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
               ";
            }
        }else{
            echo"
            <div class='card'>
                <div class='card-body bg-white'>
                <h4>There no product of that category</h4>
                </div> 
            </div>
        ";
        }
    }

    public function getAllProductsTodisplayForUsers()
    {
        $sql="SELECT * FROM products";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        foreach($rows as $row){
            echo "
            <div class='col-lg-4 col-md-6 col-sm-12'>
                <div class='card m-sm-2 m-xsm-2'>
                <div class='card-header bg-dark'>
                    <h3 class='text-white'>$row[product_name]</h3>
                    <p class='text-white'><span class='text-warning'>Price </span>  KES $row[product_price]/=</p>
                </div>
                <div class='card-body bg-secondary'>
                    <img class='img-fluid' src='$row[product_image]' style='height:25rem;' alt=''>
                </div>
                <div class='card-footer bg-dark'>
                    <div class='row d-flex'>
                        <div class='col-6'>
                            <a href='add_to_cart.php?id=$row[id]' class='text-decoration-none text-warning'><h6>Add to cart</h6></a>
                        </div>
                        <div class='col-6'>
                            <a href='show_by_uscategory.php?category=$row[category]' class='text-decoration-none text-primary'><h6>See More>></h6></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
           ";
        }
    }


    public function getAllProductsTodisplayForUsersForIndexPage()
    {
        $sql="SELECT * FROM products";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        foreach($rows as $row){
            echo "
            <div class='col-lg-4 col-md-6 col-sm-12'>
                <div class='card m-sm-2 m-xsm-2'>
                <div class='card-header bg-dark'>
                    <h3 class='text-white'>$row[product_name]</h3>
                    <p class='text-white'><span class='text-warning'>Price </span>  KES $row[product_price]/=</p>
                </div>
                <div class='card-body bg-secondary'>
                    <img class='img-fluid' src='$row[path2]' style='height:25rem;' alt=''>
                </div>
                <div class='card-footer bg-dark'>
                    <div class='row d-flex'>
                        <div class='col-6'>
                            <a href='pages/signin.php' class='text-decoration-none text-warning'><h6>Buy Now</h6></a>
                        </div>
                        <div class='col-6'>
                            <a href='pages/show_by_incategory.php?category=$row[category]' class='text-decoration-none text-primary'><h6>See More>></h6></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
           ";
        }
    }

    public function getAllProductsTodisplayForUsersForIndexPageCategory($category)
    {
        $sql="SELECT * FROM products WHERE category=?";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$category]);
        $rows=$stmt->fetchAll();
       if($rows){
        foreach($rows as $row){
            echo "
            <div class='col-lg-4 col-md-6 col-sm-12'>
                <div class='card m-sm-2 m-xsm-2'>
                <div class='card-header bg-dark'>
                    <h3 class='text-white'>$row[product_name]</h3>
                    <p class='text-white'><span class='text-warning'>Price </span>  KES $row[product_price]/=</p>
                </div>
                <div class='card-body bg-secondary'>
                    <img class='img-fluid' src='$row[product_image]' style='height:25rem;' alt=''>
                </div>
                <div class='card-footer bg-dark'>
                    <div class='row d-flex'>
                        <div class='col-6'>
                            <a href='./pages/signin.php' class='text-decoration-none text-warning'><h6>Buy Now</h6></a>
                        </div>
                        <div class='col-6'>
                            <a href='#' class='text-decoration-none text-primary'><h6>See More>></h6></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
           ";
        }
       }else{
        echo"
            <div class='card'>
                <div class='card-body bg-white'>
                <h4>There no products of that category</h4>
                </div> 
            </div>
        ";
       }
    }

    public function addCategory($name)
    {
        $sql="INSERT INTO categories(category_name) VALUES(?)";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$name]);
    }

    public function addProduct($name,$desc,$price, $image_name,$image_tmp, $category)
    {
        $tm=md5(time());
        $dstenation1="../images/".$tm.$image_name;
        $dstenation2="../images/".$tm.$image_name;
        $dstenation3="./images/".$tm.$image_name;
        move_uploaded_file($image_tmp, $dstenation2);
        $sql="INSERT INTO products(product_name,product_description,product_image,product_price,path2, category) VALUES(?,?,?,?,?,?)";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$name,$desc,$dstenation1,$price,$dstenation3,$category]);
    }


    public function addTocart($user_id,$product_id)
    {
        $sql="SELECT * FROM products WHERE id=?";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$product_id]);
        $row=$stmt->fetch();
        if($row){

                $sql0="SELECT * FROM cart WHERE client_id=? AND product_id=?";
                $stmt0=$this->Connect()->prepare($sql0);
                $stmt0->execute([$user_id,$product_id]);
                $row0=$stmt0->fetch();
                if($row0){
                    return;
                }else{
           
                $sql1="INSERT INTO cart(client_id, product_id,item_count, item_total_amount)VALUES(?,?,?,?)";
                $stmt1=$this->Connect()->prepare($sql1);
                $stmt1->execute([$user_id,$product_id,1,$row['product_price']]);
                echo "Added to cart successfully";
            }
       
        }
    }

    public function incrementItemCountOnCart($user_id,$product_id)
    {
         $sql="SELECT * FROM cart WHERE client_id=? AND product_id=?";
         $stmt=$this->Connect()->prepare($sql);
         $stmt->execute([$user_id, $product_id]);
         $row=$stmt->fetch();
         if($row){
            if($row['item_count']==500){
             return;
            }else{
             $increased=$row['item_count']+1;
             
             $sql1="SELECT * FROM products WHERE id=?";
             $stmt1=$this->Connect()->prepare($sql1);
             $stmt1->execute([$product_id]);
             $row1=$stmt1->fetch();
             if($row1){
                 $total=$increased*$row1['product_price'];
                 $sql0="UPDATE cart SET item_count=?, item_total_amount=? WHERE client_id=? AND product_id=?";
                 $stmt0=$this->Connect()->prepare($sql0);
                 $stmt0->execute([$increased,$total,$user_id,$product_id]);
             }
            }
         }
    }


   public function decrementItemCountOnCart($user_id,$product_id)
   {
        $sql="SELECT * FROM cart WHERE client_id=? AND product_id=?";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$user_id, $product_id]);
        $row=$stmt->fetch();
        if($row){
           if($row['item_count']==1){
            return;
           }else{
            $increased=$row['item_count']-1;
            
            $sql1="SELECT * FROM products WHERE id=?";
            $stmt1=$this->Connect()->prepare($sql1);
            $stmt1->execute([$product_id]);
            $row1=$stmt1->fetch();
            if($row1){
                $total=$increased*$row1['product_price'];
                $sql0="UPDATE cart SET item_count=?, item_total_amount=? WHERE client_id=? AND product_id=?";
                $stmt0=$this->Connect()->prepare($sql0);
                $stmt0->execute([$increased,$total,$user_id,$product_id]);
            }
           }
        }
   }

    public function fetchUsersProductToDisplayOnCart($client_id)
    {
        $sql="SELECT * FROM cart WHERE client_id=?";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$client_id]);
        $rows=$stmt->fetchAll();
        $total=0;
        $total_amount=0;
        if($rows){
            echo  "<div class='card-body'>";
            foreach($rows as $row){
                $total_amount+=$row['item_total_amount'];
                $sql1="SELECT * FROM products WHERE id=?";
                $stmt1=$this->Connect()->prepare($sql1);
                $stmt1->execute([$row['product_id']]);
                $row1=$stmt1->fetch();
                if($row1){
                    $total+=$row1['product_price'];
                   if($_SESSION['id']==$row['client_id']){
                    echo "
                        <div class='row mb-3'>
                            <div class='col-2'>
                                <img width='60' height='60' src='$row1[product_image]' alt='Product image' class='mb-2'>
                                <h6>$row1[product_name]</h6>
                            </div>
                            <div class='col-2'>
                                <p>$row1[product_description]</p>
                            </div>
                            <div class='col-2'>
                                <p><span class='text-black text-bold'>Price: </span><span>Ksh. $row[item_total_amount]</span></p>
                            </div>
                            <div class='col-6 justify-content-end'>
                                <a href='decrement.php?id=$row[product_id]' class='btn btn-outline-danger'><span style='font-size:20px'>-</span></a>

                                
                                <span class='mx-2' style='font-size:20; font-weight:bold'>$row[item_count]</span>

                                <a href='increment.php?id=$row[product_id]' class='btn btn-outline-success'><span style='font-size:20px'>+</span></a>
                                

                                <a href='delete_from_cart.php?id=$row[id]' class='btn btn-outline-danger btn-sm mx-4' > Remove </a>
                            </div>
                        </div>
                    
                        ";
                   }else{
                        echo "An Error occured";
                   }

                  
                }
            }
            $_SESSION['total_amount']=$total_amount;
            echo "
            </div>
            <div class='card-footer'>
                <div class='row d-flex'>
                <div class='col-8 justify-content-end'>
                    <button class='btn btn-secondary'>
                        <span class='ml-4'>Total</span>
                        <span >Ksh. $total_amount</span>
                    </button>
                </div>
                <div class='col-4'>
                    <a href='buy_now.php' class='btn btn-outline-success'>Buy now</a>
                </div>
                  
                </div>
                
            </div>
            ";
           
        }

    }

    public function countProductsOnCart($id)
    {
        $sql="SELECT * FROM cart WHERE client_id=?";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$id]);
        $rows=$stmt->fetchAll();
        $total_items=0;
        if($rows){
            foreach($rows as $row){
                $total_items++;
            }

            return $total_items;
        }
    }


    public function getProductToUpdate($id)
    {
        $sql="SELECT * FROM products WHERE id=?";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$id]);
        $row=$stmt->fetch();
       
        if($row){
          echo"
            <form method='POST' enctype='multipart/form-data'>
                <div class='card-body'>
                <div class='form-group'>
                <label for='productName'>Product category</label>
                <select class='form-select my-3' name='category'>
            ";
                    $this->getAllCategoriesForSelecion();
                
        echo"                
                </select>
              </div>
                    <div class='form-group'>
                    <label for='productName'>Product name</label>
                    <input type='text' value='$row[product_name]' name='name' class='form-control mt-3' id='productName' placeholder='Enter product name'>
                    </div>
                    <div class='form-group'>
                    <label for='productName'>Product description</label>
                    <input type='text' value='$row[product_description]' name='description' class='form-control mt-3' id='description' placeholder='Enter product description'>
                    </div>
                    <div class='form-group'>
                    <label for='productName'>Product price</label>
                    <input type='number' step='any' value='$row[product_price]' name='price' class='form-control mt-3' id='price' placeholder='Enter product price'>
                    </div>
                    <div class='form-group'>
                    <label for='productName'>Product image</label>
                    <input type='file' name='image' class='form-control mt-3'>
                    </div>
                
                </div>
                <!-- /.card-body -->

                <div class='card-footer'>
                    <button type='submit' name='update' class='btn btn-primary'>Update Product</button>
                </div>
            </form>
          ";
        }
    }


    public function updateProduct($id,$name,$desc,$price,$img_name,$img_tmp,$category)
    {
        $sql1="SELECT *FROM products WHERE id=?";
        $stmt1=$this->Connect()->prepare($sql1);
        $stmt1->execute([$id]);
        $row=$stmt1->fetch();
        if($row){
            $path2=$row['path2'];
            $pro_image=$row['product_image'];
            if($img_name==null || $img_tmp==null){
                $sql2="UPDATE products SET product_name=?, product_description=?,product_image=?,product_price=?,path2=?,category=? WHERE id=?";
                $stmt2=$this->Connect()->prepare($sql2);
                $stmt2->execute([$name,$desc,$pro_image,$price,$path2,$category,$id]);
            }else{
                if (file_exists($row['product_image'])) {
                    if (unlink($row['product_image'])) {
                       
                    }
                    $tm=md5(time());
                    $dstenation1="../images/".$tm.$img_name;
                    $dstenation2="../images/".$tm.$img_name;
                    $dstenation3="./images/".$tm.$img_name;
                    move_uploaded_file($img_tmp, $dstenation2);

                    $sql4="UPDATE products SET product_name=?, product_description=?,product_image=?,product_price=?,path2=?, category=? WHERE id=?";
                    $stmt4=$this->Connect()->prepare($sql4);
                    $stmt4->execute([$name,$desc,$dstenation1,$price,$dstenation3,$category,$id]); 
                
            }
        }
    }
    else{
        echo "
        <div class='card' style='margin-top:30%'>
            <div class='card-body text-center '>
                <h3>No product found</h3>
            </div>
        </div>
        ";
    }
}


public function createCategory($name)
{
    $sql="INSERT INTO categories(category_name) VALUES(?)";
    $stmt=$this->Connect()->prepare($sql);
    $stmt->execute([$name]);
    header("location:all_categories.php");
}


public function fetchAllCategories()
{
    $sql="SELECT * FROM categories";
    $stmt=$this->Connect()->prepare($sql);
    $stmt->execute();
    $rows=$stmt->fetchAll();
    $count=0;
    if($rows){
        foreach($rows as $row){
            $count++;
            echo "
            <tr>
                <th scope='row'>$count</th>
                <td>$row[category_name]</td>
                <td>
                <a href='edit_category.php?id=$row[id]' class='btn btn-success px-4'>Edit</a>
                <a href='delete_category.php?id=$row[id]' class='btn btn-danger mx-4'>Delete</a>
                </td>
            </tr>
            ";
        }
        // <a href='delete_category.php?id=$row[id]' class='btn btn-danger mx-4'>Delete</a>
    }else{
        echo "
        <tr>
            <p class='fs-2'>There are no categories now</p>
        </tr>
        ";
    }
}

public function getCategoryToUpdte($id)
{
    $sql="SELECT * FROM categories WHERE id=?";
    $stmt=$this->Connect()->prepare($sql);
    $stmt->execute([$id]);
    $row=$stmt->fetch();
    if($row){
       
        echo "
        <input type='text' value='$row[category_name]' name='category' class='form-control my-4 py-2 fs-5' id='inputCategory' placeholder='Enter category name'>
        ";
    }
}

public function getAllCategoriesForSelecion()
{
    $sql="SELECT * FROM categories";
    $stmt=$this->Connect()->prepare($sql);
    $stmt->execute();
    $rows=$stmt->fetchAll();
    $count=0;
    if($rows){
        foreach($rows as $row){
            $count++;
            echo "
            <option value='$row[category_name]'>$row[category_name]</option>
            ";
        }
    }
}

public function getAllCategoriesForIndexDropdown()
{
    $sql="SELECT * FROM categories";
    $stmt=$this->Connect()->prepare($sql);
    $stmt->execute();
    $rows=$stmt->fetchAll();
    if($rows){
        foreach($rows as $row){
            echo "
                <li><a class='dropdown-item' href='pages/display_indcategory.php?cat=$row[category_name]'>$row[category_name]</a></li>
            ";
        }
    }
}

public function updateCategory($id, $name)
{   
    $sql0="SELECT * FROM categories WHERE id=?";
    $stmt0=$this->Connect()->prepare($sql0);
    $stmt0->execute([$id]);
    $row=$stmt0->fetch();
    if($row){
        $stmt1=$this->Connect()->prepare("UPDATE products SET category=? WHERE category=?");
        $stmt1->execute([$name, $row['category_name']]);
    }

    $sql="UPDATE categories SET category_name=? WHERE id=?";
    $stmt=$this->Connect()->prepare($sql);
    $stmt->execute([$name,$id]);

    
    header("location:all_categories.php?message='Category updated successfully'");

}

public function getAllCategoriesForNestedPageDropdown()
{
    $sql="SELECT * FROM categories";
    $stmt=$this->Connect()->prepare($sql);
    $stmt->execute();
    $rows=$stmt->fetchAll();
    if($rows){
        foreach($rows as $row){
            echo "
                <li><a class='dropdown-item' href='display_indcategory.php?cat=$row[category_name]'>$row[category_name]</a></li>
            ";
        }
    }
}

public function getAllCategoriesForUsersPageDropdown()
{
    $sql="SELECT * FROM categories";
    $stmt=$this->Connect()->prepare($sql);
    $stmt->execute();
    $rows=$stmt->fetchAll();
    if($rows){
        foreach($rows as $row){
            echo "
                <li><a class='dropdown-item' href='display_uscategory.php?cat=$row[category_name]'>$row[category_name]</a></li>
            ";
        }
    }
}


public function getAllCategoriesForAdminPageDropdown()
{
    $sql="SELECT * FROM categories";
    $stmt=$this->Connect()->prepare($sql);
    $stmt->execute();
    $rows=$stmt->fetchAll();
    if($rows){
        foreach($rows as $row){
            echo "
                <li><a class='dropdown-item' href='display_admcategory.php?cat=$row[category_name]'>$row[category_name]</a></li>
            ";
        }
    }
}



    public function deleteProduct($id)
    {
        $sql="SELECT * FROM products WHERE id=?";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$id]);
        $row=$stmt->fetch();
        if($row){
            if (file_exists($row['product_image'])) {
                if (unlink($row['product_image'])) {
                    $sql3="DELETE FROM cart WHERE product_id=?";
                    $stmt3=$this->Connect()->prepare($sql3);
                    $stmt3->execute([$row['id']]);

                    $sql2="DELETE FROM products WHERE id=?";
                    $stmt=$this->Connect()->prepare($sql2);
                    $stmt->execute([$id]);
                    header("location:admin_dashboard.php? message='Product deleted successfullfy'");
                } else {
                    echo 'Unable to delete the file.';
                }
            } else {
                echo 'File does not exist.';
            }
        }else{
            echo "Failed";
        }
    }

    public function deleteProductFromCart($id)
    {
        $sql="DELETE FROM cart WHERE id=?";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$id]);
        header("location:cart_page.php");
    }

public function searchForProductInd($serchTerm)
    {
        $term='%'.$serchTerm.'%';
        $sql="SELECT id,product_name,product_price, category,path2 FROM products
        WHERE product_name LIKE ?
        OR product_price LIKE ?
        OR category LIKE ?";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$term,$term,$term]);

        $rows=$stmt->fetchAll();
        if($rows){
            foreach($rows as $row){
                echo "
                <div class='col-lg-4 col-md-6 col-sm-12'>
                    <div class='card m-sm-2 m-xsm-2'>
                    <div class='card-header bg-dark'>
                        <h3 class='text-white'>$row[product_name]</h3>
                        <p class='text-white'><span class='text-warning'>Price </span>  KES $row[product_price]/=</p>
                    </div>
                    <div class='card-body bg-secondary'>
                        <img class='img-fluid' src='$row[path2]' alt=''>
                    </div>
                    <div class='card-footer bg-dark'>
                        <div class='row d-flex'>
                            <div class='col-6'>
                                <a href='./pages/signin.php' class='text-decoration-none text-warning'><h6>Buy Now</h6></a>
                            </div>
                            <div class='col-6'>
                                <a href='#' class='text-decoration-none text-primary'><h6>See More>></h6></a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
               ";
            }
        }
    }

    public function searchForProductForAdm($serchTerm)
    {
        $term='%'.$serchTerm.'%';
        $sql="SELECT id,product_name,product_price, category, product_image FROM products
        WHERE product_name LIKE ?
        OR product_price LIKE ?
        OR category LIKE ?";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$term,$term,$term]);

        $rows=$stmt->fetchAll();
        if($rows){
            foreach($rows as $row){
                echo "
                <div class='col-lg-4 col-md-6 col-sm-12'>
                    <div class='card m-sm-2 m-xsm-2'>
                    <div class='card-header bg-dark'>
                        <h3 class='text-white'>$row[product_name]</h3>
                        <p class='text-white'><span class='text-warning'>Price </span>  KES $row[product_price]/=</p>
                    </div>
                    <div class='card-body bg-secondary'>
                        <img class='img-fluid' src='$row[product_image]' alt=''>
                    </div>
                    <div class='card-footer bg-dark'>
                        <div class='row d-flex'>
                            <div class='col-8'>
                                <a href='edit_product.php?id=$row[id]' class='btn  btn-success'>Edit</a>
                            </div>
                            <div class='col-4 '>
                                <a href='delete_product.php?id=$row[id]' class='btn btn-danger float-right'>Delete</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            ";
            }
        }
    }


    public function searchForProductForUsers($serchTerm)
    {
        $term='%'.$serchTerm.'%';
        $sql="SELECT id,product_name,product_price, category, product_image FROM products
        WHERE product_name LIKE ?
        OR product_price LIKE ?
        OR category LIKE ?";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$term,$term,$term]);

        $rows=$stmt->fetchAll();
        if($rows){
            foreach($rows as $row){
                echo "
            <div class='col-lg-4 col-md-6 col-sm-12'>
                <div class='card m-sm-2 m-xsm-2'>
                <div class='card-header bg-dark'>
                    <h3 class='text-white'>$row[product_name]</h3>
                    <p class='text-white'><span class='text-warning'>Price </span>  KES $row[product_price]/=</p>
                </div>
                <div class='card-body bg-secondary'>
                    <img class='img-fluid' src='$row[product_image]' alt=''>
                </div>
                <div class='card-footer bg-dark'>
                    <div class='row d-flex'>
                        <div class='col-6'>
                            <a href='add_to_cart.php?id=$row[id]' class='text-decoration-none text-warning'><h6>Add to cart</h6></a>
                        </div>
                        <div class='col-6'>
                            <a href='#' class='text-decoration-none text-primary'><h6>See More>></h6></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
           ";
            }
        }
    }


    public function deleteCategory($id)
    {
        $sql="DELETE FROM categories WHERE id=?";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$id]);
        header("location:all_categories.php");
    }

    public function saveTransactionDetails($MerchantRequestID,$CheckoutRequestID,$ResultCode, $ResultDesc,$Amount,$TransactionId,$UserPhoneNumber)
    {
        $sql="INSERT INTO mpesa_transactions(merchant_request_id,checkout_request_id,result_code,result_description,amount,transaction_id,user_phone_number)VALUES(?,?,?,?,?,?,?)";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$MerchantRequestID,$CheckoutRequestID,$ResultCode, $ResultDesc,$Amount,$TransactionId,$UserPhoneNumber]);
        header("location:../pages/users_dashboard.php");
    }

    public function seeMoreonIndex($category)
    {
        $sql="SELECT * FROM products WHERE category=?";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$category]);
        $rows=$stmt->fetchAll();
        foreach($rows as $row){
            echo "
            <div class='col-lg-4 col-md-6 col-sm-12'>
                <div class='card m-sm-2 m-xsm-2'>
                <div class='card-header bg-dark'>
                    <h3 class='text-white'>$row[product_name]</h3>
                    <p class='text-white'><span class='text-warning'>Price </span>  KES $row[product_price]/=</p>
                </div>
                <div class='card-body bg-secondary'>
                    <img class='img-fluid' src='$row[product_image]' style='height:25rem;' alt=''>
                </div>
                <div class='card-footer bg-dark'>
                    <div class='row d-flex'>
                        <div class='col-6'>
                            <a href='signin.php' class='text-decoration-none text-warning'><h6>Buy now</h6></a>
                        </div>
                        <div class='col-6'>
                            <a href='#' class='text-decoration-none text-primary'><h6>See More>></h6></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
           ";
        }
    }


    public function seeMoreonIndexus($category)
    {
        $sql="SELECT * FROM products WHERE category=?";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$category]);
        $rows=$stmt->fetchAll();
        foreach($rows as $row){
            echo "
            <div class='col-lg-4 col-md-6 col-sm-12'>
                <div class='card m-sm-2 m-xsm-2'>
                <div class='card-header bg-dark'>
                    <h3 class='text-white'>$row[product_name]</h3>
                    <p class='text-white'><span class='text-warning'>Price </span>  KES $row[product_price]/=</p>
                </div>
                <div class='card-body bg-secondary'>
                    <img class='img-fluid' src='$row[product_image]' style='height:25rem;' alt=''>
                </div>
                <div class='card-footer bg-dark'>
                    <div class='row d-flex'>
                        <div class='col-6'>
                            <a href='add_to_cart.php?id=$row[id]' class='text-decoration-none text-warning'><h6>Add to cart</h6></a>
                        </div>
                        <div class='col-6'>
                            <a href='#' class='text-decoration-none text-primary'><h6>See More>></h6></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
           ";
        }
    }

}





?>


