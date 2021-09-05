<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Users</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .bs-example {
            margin: 20px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
<nav id="navbar">
        <div id="logo">
            <img src="img/staka_logo.jpeg" alt="MyOnlineMeal.com">
        </div>
        <ul>
            <li class="item"><a href="index.html">Home</a></li>
            <li class="item"><a href="services.html">Services</a></li>
            <li class="item"><a href="user.html">Users</a></li>
            <li class="item"><a href="contact.php">Contact Us</a></li>
            <li class="item"><a href="https://www.thesparksfoundationsingapore.org/">TSF</a></li>
        </ul>
    </nav>


    <div class="bs-example">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Users List</h2>
                    </div>
                    <?php
                        $host = 'localhost';
                        $username = 'root';
                        $password = '';
                        $dbname = 'bank';
                        $conn = mysqli_connect('localhost','root','','bank');
                        if (!$conn)  {die ("Could not connect to MYSQL Server: " .mysql_error());}  
                        $result = mysqli_query($conn,"SELECT * FROM users");
                    ?>
                    
                    <?php
                            if (mysqli_num_rows($result) > 0) {
                            ?>
                            <table class='table table-bordered table-striped'>
                                <tr>
                                    <td>User ID</td>
                                    <td>Name</td>
                                    <td>Transaction ID</td>
                                    <td>Email ID</td>
                                    <td>Amout</td>
                                </tr>
                                <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
                                    <tr>
                                        <td>
                                            <?php echo $row["uid"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["name"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["transid"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["email"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["amount"]; ?>
                                        </td>
                                    </tr>
                                    <?php
$i++;
}
?>
                            </table>
                            <?php
}
else{
echo "No result found";
}
?>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="center">
            Copyright &copy; TSF-Banking All rights reserved!
        </div>
    </footer>
</body>



</html>