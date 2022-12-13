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
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Certificaciones</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
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
<script src="./js/loader.js"></script>
<script src="http://code.jquery.com/jquery.js"></script>
</html>


