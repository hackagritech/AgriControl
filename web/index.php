<html>
<head>
    <title>AgriControl</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid bakcground-login h-100 ">
    <div class="row d-flex  h-100 justify-content-center form-login">
        <div class="align-self-center ">
            <div class="card row" style="width: 22rem;">
                <div class="card-body">
                    <div class="p-2" align="center">
                        <img src="images/logo-agricontrol.png" align="center" width="200">
                    </div>
                    <form type="POST" action="admin/modulos/prescricao-agronomo.php">
                        <div class="mt-4">
                            <label for="">Login</label>
                            <input type="text" class="form-control" value="AGRONOMO">

                            <label for="">Senha</label>
                            <input type="password" class="form-control" value="AGRONOMO">
                        </div>
                        <div class="float-right mt-4">
                            <button class="btn btn-success" type="submit">
                                <span class="bi bi-arrow-bar-right"></span> Entrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>

</body>
</html>