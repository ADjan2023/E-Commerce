<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Contact Management System</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="css/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="css/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="css/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="css/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- css CSS-->
    <link href="css/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="css/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="css/wow/animate.css" rel="stylesheet" media="all">
    <link href="css/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="css/slick/slick.css" rel="stylesheet" media="all">
    <link href="css/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="css/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
       
                

                <!-- PAGE CONTENT-->
                <div class="page-content--bgf7">

                 <br>
                 <!-- WELCOME-->
                
                
              
    





    <!-- DATA TABLE-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <h1 class="title-4" style="text-align:center;">Contact Management System
                        </h1>
                        <hr class="line-seprate">
                        <br>
                    </div>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            
                            <div class="rs-select2--light rs-select2--sm">
                                
                                <div class="dropDownSelect2"></div>
                            </div>
                            
                        </div>
                        <div class="table-data__tool-right">
                            <form action="addcontact.php" method="POST">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>add Contact</button>
                                </form>
                            </div>
                        </div>

                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>

                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    ob_start();
                                    include 'controllers/dbconnect.php';
                                    ob_end_clean();
                                    $read=mysqli_query($db,"SELECT * FROM `phonebook`");
                                    while($data = mysqli_fetch_array($read)){
                                    ?>  
                                   
                                    <tr class="tr-shadow">

                                       
                                        <td><?php echo $data['pname'] ?></td>
                                        <td><?php echo $data['pphoned'] ?></td>
                                        <td>
                                            <div class="table-data-feature" style="padding-right: 70px;">
                                               <form method="POST" action="edittask.php" style="padding-right: 20px;">
                                                <input type="hidden" value="<?php echo $data['pid'] ?>" name='id'>

                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" name="edit" >
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>


                                            </form>
                                            <form method="POST" action="controllers/delete.php" style="padding-right: 20px;" onSubmit="return confirm('Do you want to delete this contact?') ">
                                                <input type="hidden" value="<?php echo $data['pid'] ?>" name='id'>

                                                <button  class="item" data-toggle="tooltip" data-placement="top" title="Delete"  name="delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                            </form>

                                        </div>
                                    </td>

                                            <div class="table-data-feature" style="padding-right: 70px;">
                                               
                                            

                                            
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>



                            </tbody>
                         <?php
                     }
                         ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
 
<!-- END STATISTIC-->
</section>
<!-- END DATA TABLE-->
</div>

<!-- COPYRIGHT-->




<!-- END COPYRIGHT-->




<!-- Jquery JS-->
<script src="css/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="css/bootstrap-4.1/popper.min.js"></script>
<script src="css/bootstrap-4.1/bootstrap.min.js"></script>
<!-- css JS       -->
<script src="css/slick/slick.min.js">
</script>
<script src="css/wow/wow.min.js"></script>
<script src="css/animsition/animsition.min.js"></script>
<script src="css/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="css/counter-up/jquery.waypoints.min.js"></script>
<script src="css/counter-up/jquery.counterup.min.js">
</script>
<script src="css/circle-progress/circle-progress.min.js"></script>
<script src="css/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="css/chartjs/Chart.bundle.min.js"></script>
<script src="css/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
