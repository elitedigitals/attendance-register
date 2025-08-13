<?php
 session_start();
// include_once("./header.php");
require "./config/db.php";


$action = $_GET['action'];

switch ($action) {
    case 'add-project':
        addProject();
        break;
    
    case 'update-project':
        updateProject();
        break;
    
    default:
        
        break;
}






//functions started here

//function for adding project
function addProject()
{
    require "./config/db.php";
    if (empty($_POST['name'])) {
        echo "<script>alert('Name is required')</script>";
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $location = $_POST['location'];
        $site_name = $_POST['site_name'];
        $site_url = $_POST['site_url'];
        $expires = $_POST['expires'];
        $creation_date = $_POST['creation_date'];
        $site_pass = $_POST['site_pass'];
        $site_username = $_POST['site_username'];
        $site_email = $_POST['site_email'];
        $status = $_POST['status'];

        $insert = $con->prepare("INSERT INTO project(name, email, phone, location, site_name, site_url, expires,
         created, site_pass, site_username, site_email, status) 
         VALUES(:name, :email, :phone, :location, :site_name, :site_url, :expires,
         :created, :site_pass, :site_username, :site_email, :status)");

        $insert->execute([
            ':name'=>$name,
            ':email'=>$email,
            ':phone'=>$phone, 
            ':location'=>$location,
            ':site_name'=>$site_name, 
            ':site_url'=>$site_url, 
            ':expires'=> $expires,
            ':created'=>$creation_date, 
            ':site_pass'=> $site_pass, 
            ':site_username'=>$site_username, 
            ':site_email'=>$site_email, 
            ':status' =>$status,
        ]);

        echo'   <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body">
                        New Projects Added.
                        <div class="mt-2 pt-2 border-top">
                            <a button type="button" class="btn btn-primary btn-sm" href="./clients/index.php">Home</a></button>
                        </div>
                    </div>
                </div>';
    }
    
};


function updateProject()
{
    require "./config/db.php";
    if (isset($_GET['update_id'])) {

        $id = $_GET['update_id'];
        if (empty($_POST['name'])) {
            echo "<script>alert('Name is required')</script>";
        }else{
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $location = $_POST['location'];
            $site_name = $_POST['site_name'];
            $site_url = $_POST['site_url'];
            $expires = $_POST['expires'];
            $creation_date = $_POST['creation_date'];
            $site_pass = $_POST['site_pass'];
            $site_username = $_POST['site_username'];
            $site_email = $_POST['site_email'];
            $status = $_POST['status'];

            $insert = $con->prepare("UPDATE project SET name =:name, email=:email, phone =:phone, location =:location, site_name =:site_name, site_url =:site_url, expires=:expires,
            created =:created, site_pass =:site_pass, site_username, site_email=:site_email, status= :status, WHERE id='$id'");

    $insert->execute([
        ':name'=>$name,
        ':email'=>$email,
        ':phone'=>$phone, 
        ':location'=>$location,
        ':site_name'=>$site_name, 
        ':site_url'=>$site_url, 
        ':expires'=> $expires,
        ':created'=>$creation_date, 
        ':site_pass'=> $site_pass, 
        ':site_username'=>$site_username, 
        ':site_email'=>$site_email, 
        ':status'=>$status,
    ]);

            echo'   <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-body">
                            Project Updated.
                            <div class="mt-2 pt-2 border-top">
                                <button type="button" class="btn btn-primary btn-sm">
                                <a href="./clients/index.php">Home</a>
                                </button>
                            </div>
                        </div>
                    </div>';
        }

    } 
};

?>