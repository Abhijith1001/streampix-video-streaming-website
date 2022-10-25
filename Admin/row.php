<?php

include("db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://code.jquery.com/jquery-3.1.1.js"></script>
</head>

<body>
    <table border="1px" id="here">
        <thead>
            <tr>
                <th>User_id</th>
                <th>User_name</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $table = mysqli_query($con, 'Select * from users');
            while ($row = mysqli_fetch_array($table)) { ?>
                <tr>
                    <td><?php echo $row['user_id']; ?></td>
                    <td><?php echo $row['user_name']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                </tr>
            <?php }

            ?>
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                $("#here").load(window.location.href + " #here");
            }, 3000);
        });
    </script>
</body>

</html>