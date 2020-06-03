<?php
include('includes/sdata.php');
include('includes/cdata.php');
$name = $_GET['name'];
$state = $data1[$name];
$title = $name;
$icon = 'https://image.flaticon.com/icons/png/512/2781/2781395.png';
include('includes/header.php');
?>

<body id="page-top">
    <div id="wrapper">
    <?php include('includes/sidebar.php') ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php include('includes/nav.php') ?>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0"><?php echo $name ?></h3></div>
                        <?php  include('includes/dashboardstate.php') ?>
                    <?php include('includes/stable.php') ?>                    
                </div>
            </div>
            <?php
            include('includes/footer.php');
            ?>