<?php

// подключаем все
include ('TariffInterface.php');
include ('ServiceInterface.php');
include ('TariffAbstract.php');
include ('TariffBasic.php');
include ('TariffStudent.php');
include ('TariffHour.php');
include ('ServiceGPS.php');
include ('ServiceDriver.php');


// 1. Тариф базовый(8 км, 3 часа)
// - добавить услугу GPS
// = 8км * 10 руб / км + 180 мин * 3 руб / мин + 15 руб / час * 3 час = 80 + 540 + 45 = 665

$tariffBasic = new TariffBasic(8, 180);
$tariffBasic->addService(new ServiceGPS(15));
echo $tariffBasic->countPrice();

echo '<br>';

// 1. Тариф студенческий(12 км, 2 часа)
// - добавить услугу Дополнительный водитель
// = 12км * 4 руб / км + 120 мин * 1 руб / мин + 100 руб = 48 + 120 + 100 = 268

$tariffStudent = new TariffStudent(12, 120);
$tariffStudent ->addService(new ServiceDriver(100));
echo $tariffStudent->countPrice();