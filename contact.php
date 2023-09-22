<!DOCTYPE html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Contact -Malcolm Lismore Photography</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="script.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<section id="contact">

<div class="contactus-text">
<p><br> <b>Thanks for Reaching US<b>
<br><br><br><br><br><br><br><br>
</p>
    <div class="main-contact-form">			
	
        <form action="" method="POST">
            <label for="Name">Your Name</label>
            <input type="text" name="name" class="name" placeholder="Enter name" required>
            
            <label for="Email">Your Email</label>
            <input type="email" name="email" class="email" placeholder="Enter email" required>
            
            <label for="message">Message</label>
            <textarea name="message" class="message" placeholder="Enter your contact details, location and date of the wedding " rows="5" required></textarea>
            
            <input name="submit" type="submit" value="Submit">
        </form>
        
    </div>
<style>
    input[type='text'],input[type='email'], textarea{
        width: 100%;
        padding: 10px;
        border-radius: 3px;
        border: 1px solid #ccc;
        margin-top: 10px;
        margin-bottom: 20px;
    }	
</style>

    <!-- Sidebar -->
    <div id="SideNav" class="sidebar">
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="packages.html">Packages</a></li>
                <li><a href="http://localhost/website/contact.php">Contact</a></li>
                <li><a href="gallary.html">Gallary</a></li>
            </ul>
        </nav>
    </div>
 

<?php
//Make database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form";
 
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
	echo "";
}
if(isset($_POST['submit'])){
	//Get form data
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];    
    
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
    if (!preg_match($email_exp, $email)) {
        echo '<br><span style="color:red;">The Email address you entered is not valid.</span>';
		exit;
    }
	
	$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email','$message')";
 
	if (mysqli_query($conn, $sql)) {
	  echo "Your Reqest has been sent, Successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
 
	mysqli_close($conn);	
}
?>	
<div id="menuBtn">
    <img src="Images/menu 2.png" id="menu">
</div>



</body>
</html>