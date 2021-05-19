
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CONTACT MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h3>CONTACT MANAGEMENT</h3>
        <!-- <P>Fill required fields and find book</P> -->

        <form method="POST">

            <?php 

         $con = mysqli_connect("localhost", "root", "", "mynewdb"); 
         $editid = $_GET['editid'];

        //  echo $editid;

         if (isset($_POST['submit'])){

            $fname = $_POST['Fname'];
            $contact = $_POST['phone'];

            // echo $fname;
            // echo $contact;

            $update_query = "UPDATE contact SET fname='$fname',phone='$contact' WHERE id='$editid' ";

            $res = mysqli_query($con, $update_query);

            *echo "<script>window.location.href = 'index.php'</script>";
        }

      


            $fetch_query = "Select * from contact where id=$editid";

            $res = mysqli_query($con,$fetch_query );

            // print_r($res);


            while($row = mysqli_fetch_array($res)){
                // print_r(mysqli_num_rows($res));

                // echo "Run";

        ?>
            <input type="text" name="Fname" value="<?php echo  $row['fname'] ;?>" />
            <input type="tel" name="phone" value="<?php echo  $row['phone'] ;?>" /> <br />

            
            <?php 
            }
            ?>
            <button class="btn" name="submit" type="submit"> Update</button>


        </form>
    </div>


    <script src="index.js"></script>
</body>

</html>