<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/favicon.png">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <title>ST ePayco</title>
</head>

<body >
    <div>
        <!-- modales  -->
        <?php include './layout/modal.view.php'; ?>
        
        <div class="container-fluid mt-1 ">
            <div class="row">

            <!-- Dark Mode in progress -->

                <!-- <label>
                    <input type="checkbox">
                    <span class="check"></span>
                </label> -->
                

                <!-- <div class="col-8 offset-2"> -->
                <div class="col-12 ">
                
                    <form id="formulario" class="row g-3 p-3 mt-1 shadow border needs-validation card border-dark" novalidate >

                        <!-- titulo -->
                        <?php include './layout/title.view.php'; ?>
                        <hr>

                        <!-- Selectores alianza, red y franquicia -->
                        <?php include './layout/alliances.view.php'; ?>

                        <!-- Imputs ingresar datos -->
                        <?php include './layout/inputsData.view.php'; ?>        
                        
                        
                        <!-- Botones imprimir - modal -->
                        <?php include './layout/buttonsPrints.view.php'; ?>    
                    
                        <hr>

                        <!-- Data impresa -->
                        <?php include './layout/response.view.php'; ?>    
                    </form>
                </div>
            </div>

            <!-- Footer -->
            <?php include './layout/footer.view.php'; ?>    
        </div>
    </div>
    
</body>
<script src="./js/data.js"></script>
<script src="./js/darkMode.js"></script>
<script src="./js/function.js"></script>
<script src="http://code.jquery.com/jquery.js"></script>
</html>


