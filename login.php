<!DOCTYPE html>
<html>
    <head>    
        <link rel="stylesheet" href="Assets/bootstrap-4.1.3-dist/css/bootstrap.css">
        <link rel="stylesheet" href="Assets/Base/Base.css">
        <link rel="stylesheet" href="Assets/Base/Icons.css">
        <link rel="stylesheet" href="Assets/Module.css">
        <link rel="stylesheet" href="Assets/Colors.css">    
        <meta charset="UTF-8">
        <title>ICSProject</title>
    </head>
    <body>
    <?php require_once 'header.php'; ?>
        <div class="container-fluid px-0">
            <form>
                <div class="login col-md-6 col-sm-5 offset-md-3 offset-sm-3 col-xs-auto offset-xs-0">
                <div class="circle mb-1 rounded-circle icon-logo mx-auto b-lightblue "></div>
                <div class="rounded bg-lightblue text-light px-16 pt-64 pb-16">                    
                    <h5 class="row mx-0">Insira a Senha Mestra</h5>
                    <input class="w-100 s-32 input " type="text">  
                    <div class="row mx-0 mt-32">           
                        <button type="submit" class="ml-auto btn btn-warning px-24 " name="reservar">Login</button>
                    </div>      
                </div>
                </div>
            </form>
            
        </div>
        <?php require_once 'footer.php'; ?>
    </body>
</html>