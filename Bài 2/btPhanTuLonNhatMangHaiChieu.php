<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $mangHaiChieu = array(
        array(1, 4, 3, 6, 7),
        array(3, 5, 6)
    );

    function giaTriLonNhat($mangHaiChieu)
    {
        $lonNhat = $mangHaiChieu[0][0];

        for ($x = 0; $x < count($mangHaiChieu); $x++) {
            $length = count($mangHaiChieu[$x]);
            for ($y = 0; $y < $length; $y++) {
                if ($mangHaiChieu[$x][$y] > $lonNhat) {
                    $lonNhat = $mangHaiChieu[$x][$y];
                    // var_dump($lonNhat);
                }
            }
        }
        return $lonNhat;
    }

  echo  giaTriLonNhat($mangHaiChieu);
    ?>
</body>

</html>