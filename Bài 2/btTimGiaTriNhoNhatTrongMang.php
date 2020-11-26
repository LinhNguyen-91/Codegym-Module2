<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function timGiaTriNhoNhat($mang)
    {
        $min = $mang[0];
        $chiSo = 0;
        for ($x = 1; $x < count($mang); $x++) {
            if ($min > $mang[$x]) {
                $min = $$mang[$x];
                $chiSo = $x;
            }
        }
        return  $chiSo;
    }
    $mang = array(1, 4, 6, 3, 6);
  echo  timGiaTriNhoNhat($mang);
    ?>
</body>

</html>