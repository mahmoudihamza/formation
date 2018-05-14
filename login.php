<?php 
session_start();
//if(!isset($_SERVER['REQUEST_METHOD']=='POST'))
//$admins=array("hamza");
//$motdepasse=array("root");
$home = $_SERVER['DOCUMENT_ROOT'];

require_once($home."/centreFormation/database/database.php");
$formError=array();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $user=$_POST["username"];
    $password=$_POST["password"];
    $cn=database::connect();
    $res=$cn->prepare("select * from administration where log_adm=? and pass_adm=?");
    $res->execute(array($user,$password));
    $result=$res->rowcount();
    if($result==1)
    {
        $_SESSION['user']=$user;
        $_SESSION['password']=$password;
        // echo 'welcome'.$_SESSION['user'].'you will redirected';
      header("Location:index.php");
    }
    else{
        $formError[]="username or password not valid";
    }

}
else{
    //echo "erreur";
}


 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authentification Anita Consulting</title>
    <link  type="text/css" rel="stylesheet" href="resources/css/bootstrap.min.css"/>
    <link  type="text/css" rel="stylesheet" href="resources/css/style.css"/>
    <script type="text/javascript" src="resources/js/jquery.js" ></script>
    <script type="text/javascript" src="resources/js/bootstrap.js" ></script>


</head>
<body>

<div class="container" style=" width : 700px; margin : 100px auto;">
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">AUTHENTIFICATION</h3>
    </div>
    <div class="panel-body">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

            <table class="table table-striped">


                <td><td>Username</td><td><input type="text" name="username" class="form-control" /></td></tr>
                <td><td>Password</td><td><input type="password" name="password" class="form-control" /></td></tr>
                <td><td></td><td><input type="submit" value="Connexion!" class="btn btn-primary" /></td></tr>
    

            </table>
             <?php 
            if(!empty($formError))
            {?>
                  <div class="alert alert-warning alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php  
                            foreach ($formError as $error) {
                               echo $error;
                            }
                            ?>
                            
                    </div>
            <?php } ?>    
    
            
        </form>


    </div>
</div>
</div>
</body>
</html>