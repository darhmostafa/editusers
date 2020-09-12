<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="insert">
            <h1>Select</h1>

<?php

$co = mysqli_connect("localhost", "root", "" , "profile");
$select = "SELECT * FROM `users`";
$q = mysqli_query($co,$select);
$res = mysqli_fetch_assoc($q);
$ali = [];
while($res = mysqli_fetch_assoc($q)){
        $ali[] = $res;
}
         ?>
        <table >
                <thead>
                        <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Password</th>
                                <th>Email</hd>
                                <th>Edit</hd>
                        </tr>
                </thead> 
                <tbody>
         <?php
for($i = 0; $i <= count($ali) - 1;$i++){
        $resultF = $ali[$i];
        ?>
                <tr class="back">
                        <td><?php echo $resultF["id"] ?></td>
                        <td><?php echo $resultF["name"] ?></td>
                        <td><?php echo $resultF["password"] ?></td>
                        <td><?php echo $resultF["email"] ?></td>
                        <td>
                                <a href="../delete/form.html">Delete</a>
                                <a href="../update/form.html">Update</a>
                        </td>
                </tr>
        <?php
}?>

                </tbody>

        </table>
        <a class="add" href="../insert/form.html">Insert</a>
<?php


?>

</div>
        <script>

                let back = document.getElimentByClassName('back');

                for($i=0; $i< tr.length ;$i++)
                {
                     back.style.background = "#ddd";
                }

        </script>
    </body>
</html>
