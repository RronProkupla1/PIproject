<?php
// Array with names
$a[] = "Apple";

$a[] = "Asus";

$a[] = "Acer";

$a[] = "Blackberry";

$a[] = "Alcatel";

$a[] = "Blu";

$a[] = "Benq";

$a[] = "Bird";

$a[] = "Cat";

$a[] = "Allview";

$a[] = "Celkon";

$a[] = "Chea";

$a[] = "Dell";

$a[] = "Emporia";

$a[] = "Ericsson";

$a[] = "Google";

$a[] = "HP";

$a[] = "HTC";

$a[] = "Huawei";

$a[] = "Karbonn";

$a[] = "Lava";

$a[] = "Lennovo";

$a[] = "LG";

$a[] = "Meizu";

$a[] = "Micromax";

$a[] = "Microsoft";

$a[] = "Motorola";

$a[] = "Nec";

$a[] = "Nokia";

$a[] = "Panasonic";

$a[] = "Philips";

$a[] = "Samsung";

$a[] = "Siemens";

$a[] = "Sony";

$a[] = "Xiaomi";

$a[] = "Toshiba";

$a[] = "Oneplus";

$a[] = "Energizer";

$a[] = "Yu";

$a[] = "ZTE";

$q = $_REQUEST["q"];

$hint = "";


if ($q !== "") {

    $q = strtolower($q);

    $len=strlen($q);

    foreach($a as $name) {

        if (@stristr($q, substr($name, 0, $len))) {

            if ($hint === "") {
                $hint = $name;
            }
             else {
                $hint .= ", $name";
            }
        }
    }
}

echo $hint === "" ? "no suggestion" : $hint;
?>