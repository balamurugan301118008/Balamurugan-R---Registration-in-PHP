<?php
$app['db']= (new Database())->db;

$user=$_SESSION['login']['name'];
$stmt = $app['db']->query("SELECT * FROM users WHERE name='$user'");
$values = $stmt->fetchAll();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Home page</title>
</head>
<body>
<h1>Welcome to our website</h1>
<a href="/logout" class="logout">logout</a>
<h2>Hello <?php echo $_SESSION['login']['name'] ?></h2>
<?php foreach($values as $value):  ?>
<form action="/edit" method="post">
<span>If you are edit your profile?</span><button type="submit" name="edit" class="editProfile" value="<?php  echo $value[0] ?>">Edit</button>
</form>
<?php endforeach; ?>
</body>
</html>