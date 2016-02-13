<?php
$name="Иван";
$age="1Ivan";
echo "Меня зовут $name. ";
echo "Мне $age год. ";
if(($age<0) or (is_string($age)) or !(is_int($age)) or is_float($age)){
    echo "Неизвестный возраст";
}
elseif($age>=18 & $age <=59)
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



