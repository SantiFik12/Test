<!DOCTYPE HTML>
<html>
<body>

<form action="" method="post">
    <br />Впишите номер шага: <input type="number" name="segment">
    <input type="submit">
</form> <br /> <br />

<?php

class kz
{
    public static function main()
    {
        $bacteria = new Bacteria(1, 1);
        $time = $_POST['segment'];
        for ($i = 0; $i < $time; $i++)
        {
            $bacteria = Bacteria::reproduction($bacteria);
        }
        print_r($bacteria);
    }
}
class Bacteria
{

    public	function __construct($red, $green)
    {
        $this->red = $red;
        $this->green = $green;
    }
    public static function reproduction($bacteria)
    {
        return new Bacteria(3 * $bacteria->green, 2 * ($bacteria->red + $bacteria->green));
    }
}
kz::main();
?>
</body>
</html>