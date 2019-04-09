<?php
?>

<html>
    <?php include 'headerAdmin.php'?>
    <body>
        <div class="container">
        <h2 class="mt-3 text-center">Daftar events</h2>
        <?php
            $message = '';
            if(isset($_GET["error"])){
                $message = $_GET["error"];
                echo "<p style='color: red; font-style: italic'>$message</p>";
            }

        ?>
        <a href="addEvents.php" class="btn btn-success mt-3">Tambah events</a>
        <!-- <div class="row"> -->
            <table id="events" class="table table-stripped text-center mt-3" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama events</th>
                        <th>Gambar</th>
                        <th>User ID</th>
                        <th>Event's Details</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * FROM tb_events WHERE flag = 1";
                    $result = mysqli_query($con, $query);
                    if (mysqli_num_rows($result) > 0){
                        $index = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            $idev = $row["idev"];
                            $image = $row["image"];
                            echo "
                            <tr>
                                <td>" . $index++ . "</td>
                                <td>" .$row["nameev"]. "</td>
                                <td>" ."<img src='process/".$image."' width=\"150\"  height=\"150\" alt=\"image\">"."</td>
                                <td>" .$row["iduser"]. "</td>
                                <td class='ini-quicksand'> <div class='dta'>" .$row["evdetails"]. "</div> </td>
                                <td>
                                    <a href='formEdit.php?id=$idev' class='btn btn-primary'>Update</a>
                                    <a href='process/actionDeleteEvAdmin.php?id=$idev' class='btn btn-danger'>Delete</a>
                                </td>
                            </tr>
                            "; 
                        }
                    }
                    mysqli_close($con); 
                    ?>
                </tbody>
            </table>
        <!-- </div> -->
        </div>
        <script>
            $(document).ready(function() {
                // $('#events').DataTable({
                //     "lengthMenu":[5, 10, 15, 20],
                //     "pageLength": 5
                // });
                $('#events').DataTable( {
                    columnDefs: [ {
                        targets: 4,
                        render: function ( data, type, row ) {
                            return data.length > 10 ?
                                data.substr( 0, 10 ) +'…' :
                                data;
                        }
                    } ]
                } );
            } );
        </script>
    </body>
    <?php include './../footer.php' ?>
</html>