<?php include_once '../Login/View/header_L.php';?>

<?php 
if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }else{
        $page = 'home'; 
    }

    switch ($page) {
        case 'home':
           include_once 'controller/LoginController.php';
           $admin = new LoginController ();
           $admin->index();
            break;
        
        case 'SignUp':
            include_once '../Login/View/SignUp.php';
                break;

        case 'FogotPass':
            include_once '../Login/View/FogotPass.php';
                break;
	
        default:
            echo "<h2 style='color: red;'>ERROR 404, trang không tồn tại</h2><a href='index.php'>Quay lại</a>";
            break;
    }

?>
	
	
	
<?php include_once '../Login/View/footer_L.php';?>
