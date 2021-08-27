<?php
require_once('config.php');
                    if(isset($_GET['submitadd'])){
                      
                        if($_GET['code']!=null && $_GET['productName']!=null && $_GET['price']!=null && $_GET['inputimg']!=null){
                            $category= $_GET['category_id'];
                            $code= $_GET['code'];
                            $productName= $_GET['productName'];
                            $price= $_GET['price'];
                            $image= $_GET['inputimg'];
                            $sqladd="INSERT INTO products (categoryID, code, nameproduct,image,gia) VALUES ('$category', '$code', '$productName','$image','$price') ";   
                            $stmadd = $conn->prepare($sqladd);
                            $stmadd->execute();
                            echo '<script language="javascript">';
                            echo 'alert("Add Success")'; 
                            echo '</script>';  
                            $category_id=$category;
                            // $totalpages = $_GET['totalpages'];
                            // $no_page = ceil($totalpages/3);
                            
                            include "index.php";                             

                        }
                        else{
                            echo '<script language="javascript">';
                            echo 'alert("You must compelete this Form if you want add this product !")'; 
                            echo '</script>';  
                            include "add_product.php";  
                        }
                    }
                    
                    
                    
                    ?>