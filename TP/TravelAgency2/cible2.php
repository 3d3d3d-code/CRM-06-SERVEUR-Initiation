<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Le titre</title>
</head>

<body>

    <?php 



echo htmlspecialchars($_POST['nom']).' '.  htmlspecialchars($_POST['email']);

?> 



</body>

</html>