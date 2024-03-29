<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/favicon.png">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/loader.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://checkout.epayco.co/checkout.js"></script>
    
    
    <title>Support ePayco</title>
</head>

<body class="fondo1" >
    <!-- Loader -->
    <div class="loader-page text-white">ePayco ST</div>

    <div>
        <!-- modales  -->
        <?php include './layout/modal.view.php'; ?>
        
        <div class="container-fluid">

                <!-- Dark Mode in progress -->

                <!-- <label>
                    <input type="checkbox">
                    <span class="check"></span>
                </label> -->
                

                <!-- <div class="col-8 offset-2"> -->
                <div class="col-12">
                
                    <form id="formulario" class="row g-3 p-3 mt-1 shadow border needs-validation card border-secondary text-white" novalidate >
                        <!-- titulo -->
                        <?php include './layout/title.view.php'; ?>
                        <!-- <hr> -->

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="certificaciones-tab" data-bs-toggle="tab" data-bs-target="#certificaciones" type="button" role="tab" aria-controls="certificaciones" aria-selected="true">Certificaciones</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="checkout-tab" data-bs-toggle="tab" data-bs-target="#checkout" type="button" role="tab" aria-controls="checkout" aria-selected="true">Checkout</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="rTickets-tab" data-bs-toggle="tab" data-bs-target="#rTickets" type="button" role="tab" aria-controls="rTickets" aria-selected="false">R/Tickets</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">


                            <!-- Certificaciones -->
                            <div class="tab-pane fade show active" id="certificaciones" role="tabpanel" aria-labelledby="certificaciones-tab">

                                <!-- Selectores alianza, red y franquicia -->
                                <?php include './layout/alliances.view.php'; ?>

                                <!-- Imputs ingresar datos -->
                                <?php include './layout/inputsData.view.php'; ?>        


                                <!-- Botones imprimir - modal -->
                                <?php include './layout/buttonsPrints.view.php'; ?>    

                                <hr>

                                <!-- Data impresa -->
                                <?php include './layout/response.view.php'; ?>    

                            </div>
                            

                            <!-- Checkout  -->
                            <div class="tab-pane fade" id="checkout" role="tabpanel" aria-labelledby="checkout-tab">

                                <?php include './layout/checkout.view.php'; ?>
                                
                            </div>




                            <div class="tab-pane fade" id="rTickets" role="tabpanel" aria-labelledby="rTickets-tab">

                                <div class="card" aria-hidden="true">
                                    <!-- <img src="" class="card-img-top" alt="logepy"> -->
                                    <div class="card-body bg-dark">
                                        <h5 class="card-title placeholder-glow">
                                        <span class="placeholder col-6 bg-dark"> Cargando información, por favor espere . . .</span>
                                        </h5>
                                        <p class="card-text placeholder-glow">
                                        <span class="placeholder col-7 bg-warning"></span>
                                        <span class="placeholder col-4 bg-warning"></span>
                                        <span class="placeholder col-4 bg-warning"></span>
                                        <span class="placeholder col-6 bg-warning"></span>
                                        <span class="placeholder col-8 bg-warning"></span>
                                        </p>
                                        <button class="btn btn-success" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </form>
                </div>

            <!-- Footer -->
            <?php include './layout/footer.view.php'; ?>    
        </div>
    </div>
    
</body>
<script src="./js/data.js"></script>
<script src="./js/function.js"></script>
<!-- <script src="./js/check.js"></script> -->
<script src="./js/payment.js"></script>
<script src="./js/loader.js"></script>
<script src="http://code.jquery.com/jquery.js"></script>
</html>


