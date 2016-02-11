<?php
$name="Иван";
$age="ii";
echo "Меня зовут $name. ";
echo "Мне $age год. ";
if($age>=18 & $age <=59)
{
    echo "Мне еще работать и работать.";
}
elseif($age>59)
{
    echo "Мне пора на пенсию";
}
elseif($age>0 & $age<17)
{
    echo "Вам еще рано работать";
}
elseif(($age<0) or !(is_numeric($age))){
    echo "Неизвестный возраст";
}

