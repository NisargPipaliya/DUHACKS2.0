<?php
session_start();
// session_destroy();

if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(isset($_POST['add']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitem=array_column($_SESSION['cart'],'Item_name');
            if(in_array($_POST['Item_name'],$myitem))
            {
                echo "<script> alert('item already added')
                window.location.href='index.php';
                </script>
                ";
            }
            else{
                $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('Item_name'=>$_POST['Item_name'], 'Price'=> $_POST['price'],'quantity'=>1);
            echo "<script> alert('item  added')
            window.location.href='index.php';
            </script>
            ";
           
            
            }
             // print_r($_SESSION['cart']);
        }else{
            $_SESSION['cart'][0]=array('Item_name'=>$_POST['Item_name'], 'Price'=> $_POST['price'],'quantity'=>1);
            // print_r($_SESSION['cart']);
        }
    }
}
?>