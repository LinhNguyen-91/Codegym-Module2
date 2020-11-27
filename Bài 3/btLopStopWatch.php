<?php
class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = microtime(true);
    }
    public function getStartTime()
    {
        return $this->startTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
    }

    public function start()
    {
        $this->startTime = microtime(true);
    }

    public function stop()
    {
        $this->endTime = microtime(true);
    }
    public function  getElapsedTime()
    {
        return round(($this->endTime - $this->startTime) * 100);
    }
}

$thoigian1 = new StopWatch();
$thoigian1->start();
$mang = array();
for ($x = 0; $x < 20000; $x++) {
    $mang[] = rand(0, 100000);
}

sapXepChon($mang);
$thoigian1->stop();

echo $thoigian1->getStartTime();
echo '<br/>';

echo $thoigian1->getEndTime();
echo '<br/>';

echo $thoigian1->getElapsedTime();

function sapXepChon($mang)
{
    for ($i = 0; $i < count($mang); $i++) {
        $minIndex = $i;
        $min = $mang[$i];
        for ($j = $i + 1; $j < count($mang); $j++) {
            if ($min > $mang[$i]) {
                $minIndex = $j;
                $min = $mang[$j];
            }
        }

        $temp = $mang[$minIndex];
        $mang[$minIndex] = $mang[$i];
        $mang[$i] = $temp;
    }
}
