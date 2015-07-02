<?php
    session_start();
    error_reporting(-1);
    ini_set('display_errors', 'On');
    ini_set('error_reporting', E_ALL);
    include("config/config.php");
    require_once('view/common/header.php');
    //If user is login then allow pages from if block
    if(isset($_SESSION['userid'])) {
        //Include partial views
        if(isset($_GET['page'])) {
            switch($_GET['page']) {
                case 'change_password':
                    require_once('view/pages/change_pwd.php');
                    break;
                case 'add_news':
                    require_once('view/pages/add_news.php');
                    break;
                case 'cms':
                    require_once('view/pages/cms.php');
                    break;
                case 'news_listing':
                case 'delete_news':
                    require_once('view/pages/list_news.php');
                    break;
                case 'edit_news':
                    require_once('view/pages/edit_news.php');
                    break;
                     case 'edit_cms':
                    require_once('view/pages/cms.php');
                    break;
                case 'pagelisting':
                    require_once('view/pages/pagelisting.php');
                    break;
                case 'aboutus':
                    require_once('admin/aboutus.php');
                    break;
                case 'services':
                    require_once('admin/services.php');
                    break;
                case 'edit_info':
                    require_once('admin/contact.php');
                    break;
                case 'contact_us':
                    require_once('news_portal/contact.php');
                    break;
                case 'edit_table':
                    require_once('view/pages/edit_table.php');
                    break;
                default:
                    require_once('view/error/404.php');
                    break;
            }
        } else {
            require_once('view/pages/home.php');   
        }
        require_once('view/common/footer.php');
    } else {
        header("Location: http://localhost/news_portal/admin/login.php");
    }
?>

