<?php	include("util/util.php");

    if(isset($_POST['user']) && isset($_POST['password'])){
        
        $usuario = $_POST['user']; 
        $password = $_POST['password']; 


        $conn = conectarse();

        $sql = "SELECT id,usuario,password,tipo from usuario where usuario='$usuario' AND password='$password'";
        echo "$sql ";

        $result = mysqli_query($conn, $sql);

        if($row = mysqli_fetch_array($result, MYSQLI_NUM)){
            //Recordar que no debe haberse mandado a pantalla (-> html)  nada antes de usar la sesion
            session_start();
            $_SESSION['id']  = $row[0];
            $_SESSION['usuario']= $row[1];
            $_SESSION['password'] = $row[2];
            $_SESSION['tipo'] = $row[3];

           //echo $_SESSION['tipo']; 
           //echo $_POST['password'];       
        if($_SESSION['tipo'] ==1)

         header('Location: admi.php');
        else if($_SESSION['tipo']==3)
            header('Location: staff.php');
            else{
                
                header('Location: profe.php');
            }
        }
        else {
            header('Location: loginCliente.php');
        }
    }
    else{
        cabecera("Tutorias");        
    }
?>

<body>
    <main class="principal">
        <section class="section ">
            <div class="contenido"> 
                    Control de tutorias
            </div>
            <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-2 col-xl-4"></div>
                <div class="col-lg-4 col-md-4 col-sm-8 col-xl-4">
                    <form action="loginCliente.php" method="post">
                        <div class="form-login">
                            <h4>Bienvenido a Control de tutorias</h4>
                            <input name="user" type="text" id="user" class="form-control  my-2 " placeholder="User" style="text-align: center;" /><br/>
                            <input name="password" type="text" id="password" class="form-control my-2 " placeholder="Password" style="text-align: center;"/><br/>
                            <div class="wrapper">
                                <span class="group-btn">     
                                    <button type="submit" class="btn btn btn-success btn-md"> Entrar </button>
                                </span>
                            </div>
                        </div>
                    </form>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-2 col-xl-4"></div>
            </div>
        </div> 
        </section>
    </main>
</body>
</html>
