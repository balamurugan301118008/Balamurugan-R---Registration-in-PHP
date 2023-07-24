<?php
if (isset($_POST['edit'])) {
    $id = $_POST['edit'];
    $select = $app['db']->query("SELECT * FROM users WHERE id = '$id'");
    $values = $select->fetchAll(PDO::FETCH_OBJ);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SignUp Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="maincontainer">
    <div class="container">
        <h1>Update your profile</h1>
        <?php foreach($values as $value):?>
        <form action="/update" method="post">
            <div class="signup">
                <div class="name common">
                    <label>Name:</label>
                    <input type="text" name="names" class="UserName" value="<?= $value->name?>" required>
                </div>
                <div class="email common">
                    <label>Email:</label>
                    <input type="email" name="emails" value="<?= $value->email ?>" required>
        </div>    
                <div>
                    <button name="updated" value="<?php echo $value->id ?>" type="submit" value="Sign Up">Update</button>
                </div>
            </div>
        </form>
        <?php endforeach;?>
    </div>
</div>
</body>
</html>
