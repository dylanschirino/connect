<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $data['ressource_title']; ?></title>
</head>
<body>
<?php include('_connect.php'); ?>
<?php include($data['view']); ?>
</body>
</html>
