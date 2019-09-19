<?php

//$trace = debug_backtrace();
$class = "api\saas\AppointmentApi";//$trace[2]['class'];
$function = "personalCalendar";//$trace[2]['function'];
//$args = $trace[2]['args'];

//$mock_class = explode('\\', )
$slash_position = strrpos($class, '\\');
$tidy_class_name = substr($class, ($slash_position+1));
$new_class = substr($class, 0, ($slash_position+1)).'mock\\'.$tidy_class_name.'Mock';

echo $slash_position;
echo "\n";
echo $tidy_class_name;
echo "\n";
echo $new_class;