<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/js/main.js">
<?php if (isset($_GET['page'])) { 
    $page = $_GET['page']; 

    switch ($page) { 
        case 'home': 
             include "views/home.php"; 
            break; 

        case 'about': 
             include "views/about.php"; 
            break; 

        case 'contact': 
            include "views/contact.php"; 
            break; 

        case 'login':
            include "views/form.php";
            break;

        case 'makanan': 
            include "views/makananView.php"; 
            break; 

        case 'makananAdd': 
            include "module/makananAdd.php"; 
            break; 

        case 'makananDelete': 
            include "module/makananDelete.php"; 
            break; 

            case 'makananUpdate': 
                include "module/makananUpdate.php"; 
                break; 

                case 'minuman':
                     include "views/minumanView.php"; 
                     break; 

                     case 'minumanAdd': 
                        include "module/minumanAdd.php"; 
                        break; 

                        case 'minumanDelete': 
                            include "module/minumanDelete.php"; 
                            break; 

                            case 'minumanUpdate':
                                include "module/minumanUpdate.php"; 
                                break; 

                                default: 
                                include "views/404.php"; 
                            } 
                            } else { 
                                include "views/home.php";
                            }
                           