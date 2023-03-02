<?php include('inc/header.php'); ?>

$people = array(
    array("first_name" => "Alice", "last_name" => "Smith", "address" => "123 Main St", "login_time" => "2023-03-02 14:30:00"),
    array("first_name" => "Bob", "last_name" => "Johnson", "address" => "456 Elm St", "login_time" => "2023-03-01 09:15:00"),
    array("first_name" => "Charlie", "last_name" => "Lee", "address" => "789 Oak St", "login_time" => "2023-02-28 18:20:00"),
    array("first_name" => "Dave", "last_name" => "Brown", "address" => "111 Pine St", "login_time" => "2023-02-27 11:45:00"),
    array("first_name" => "Eve", "last_name" => "Davis", "address" => "222 Cedar St", "login_time" => "2023-02-26 16:10:00"),
    array("first_name" => "Frank", "last_name" => "Wilson", "address" => "333 Maple St", "login_time" => "2023-02-25 08:00:00"),
    array("first_name" => "Grace", "last_name" => "Taylor", "address" => "444 Oak St", "login_time" => "2023-02-24 19:30:00"),
    array("first_name" => "Hank", "last_name" => "Anderson", "address" => "555 Pine St", "login_time" => "2023-02-23 10:00:00"),
    array("first_name" => "Ivy", "last_name" => "Johnson", "address" => "666 Elm St", "login_time" => "2023-02-22 12:45:00"),
    array("first_name" => "Jack", "last_name" => "Martin", "address" => "777 Maple St", "login_time" => "2023-02-21 15:20:00")
);


echo "<table>";
echo "<thead><tr><th>First Name</th><th>Last Name</th><th>Address</th><th>Login Time</th></tr></thead>";
echo "<tbody>";
foreach ($people as $person) {
    echo "<tr>";
    echo "<td>{$person['first_name']}</td>";
    echo "<td>{$person['last_name']}</td>";
    echo "<td>{$person['address']}</td>";
    echo "<td>{$person['login_time']}</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";



	<div class="container">
    <br/>
		<h2>Person's Log</h2>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Address</th>
                    <th scope="col">Login Time</th>
                    </tr>
                </thead>
		
			<div class="well">
                <tbody>
                <?php foreach($persons as $person) : ?>
                    <tr>
                    <th scope="row"><?php echo $person['pid'];?></th>
                    <td><?php echo $person['lastname'];?></td>
                    <td><?php echo $person['firstname'];?></td>
                    <td><?php echo $person['address'];?></td>
                    <td><?php echo $person['logtime'];?></td>
                    </tr>
                <?php endforeach; ?>   
                </tbody>
            </div>
        </table>
        <br/>

            <button type="button" class="btn btn-dark btn-sm" onclick="document.location='guestbook-login.php'">Logout</button>
</div>
<?php include('inc/footer.php'); ?>