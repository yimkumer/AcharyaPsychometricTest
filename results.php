<?php include('includes/header.php');  ?>
<div class="container-fluid  py-3">
    <header class="text-center">
        <img src="./assets/img/alogo.png" class="img-fluid " alt="Acharya Institutes">
    </header>
    <div class="container text-center heading mt-4 p-2 text-light ">
        <h1 class="font-weight-bold">Acharya Psychometric Test </h1>
        <h4 class="font-weight-normal">Students submissions </h4>
    </div>
    <div class="container">
        <div class="row">
            <div class="col mt-4">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>SNo</th>
                    <th>Student Name</th>
                    <th>Grade</th>
                    <th>Stream</th>
                    <th>Country</th>
                    <th>Code</th>
                    <th>Result</th>
                    <!-- <th >Delete</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                include('includes/connect.php');
                $sl = 1;
                $sql = "select * from student_info";
                $res = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($res)) {
                ?>
                    <tr>
                        <!-- <td >&nbsp;</td> -->
                        <td>&nbsp;<?php echo $sl++; ?></td>
                        <td>&nbsp;<?php echo $row['sname']; ?></td>
                        <td>&nbsp;<?php echo $row['grade']; ?></td>
                        <td>&nbsp;<?php echo $row['stream']; ?></td>
                        <td>&nbsp;<?php echo $row['country']; ?></td>
                        <td>&nbsp;<?php echo $row['code']; ?></td>
                        <td class="text-center"><a href="result.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-primary">Result</button></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

            </div>
        </div>
    </div>

</div>

<?php include('./includes/footer.php');  ?>