<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/U4AccesoDatos/pc/PcDAO.php";

    $pc = new Pc("asus123", "andrea", "Asus", 1255.6);
    $c1 = new Component("ssd", "samsung", "58H");
    $c2 = new Component("ram", "corsair", "5800");
    $c3 = new Component("mouse", "logitech", "g203");
    $pc->addComponent($c1);
    $pc->addComponent($c2);
    $pc->addComponent($c3);

    PcDAO::create($pc);
?>
</body>
</html>