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
    include_once $_SERVER['DOCUMENT_ROOT'] . "/U4AccesoDatos/pc/UserDAO.php";


/*
    PcDAO::create($pc);
    
    //echo PcDAO::read("asus123");
    $u = new User("sete", "123345");
    $u2 = new User("diego", "a");

    //UserDAO::create($u);
    //UserDAO::create($u2);
    
    var_dump(UserDAO::verifyPassword("asdf", "asdf"));  //-1
    var_dump(UserDAO::verifyPassword("sete", "asdf"));  //2
    var_dump(UserDAO::verifyPassword("sete", "123345"));    //1
    

    if(PcDAO::create($pc)){
        echo "se ha creado";
    } else {
        echo "no se ha creado";
    }

    echo PcDAO::delete("asus123");
    */

    $pc = new Pc("asus123", "puta", "Asus", 1255.6);
    $c1 = new Component("ssd", "samsung", "58H");
    $c2 = new Component("ram", "corsair", "5800");
    $c3 = new Component("mouse", "logitech", "g203");
    $pc->addComponent($c1);
    $pc->addComponent($c2);
    $pc->addComponent($c3);
    PcDAO::create($pc);
    
    var_dump(PcDAO::read("asus123"));
    var_dump(PcDAO::read("noexiste"));
    ?>
</body>

</html>