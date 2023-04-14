<?php include('includes/header.php');  ?>
<div class="container-fluid  py-3">
    <header class="text-center">

        <img src="./assets/img/alogo.png" class="img-fluid " alt="Acharya Institutes">
    </header>
    <div class=" container text-center heading mt-4 p-2 text-light ">
        <h1 class="font-weight-bold">Acharya Psychometric Test </h1>
    </div>
</div>
<div class="container">
    <?php
    include('./includes/connect.php');
    $id = $_REQUEST['id'];
    
    $sql = "select * from student_info where id='$id'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res);

    $answer = $row['answer'];
    echo $answer;

    ?>
</div>




<!-- EXTROVERT or INROVERT -->

</div>
<?php include('./includes/footer.php');  ?>