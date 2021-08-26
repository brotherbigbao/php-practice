<?php

$eventConfig = new EventConfig();
$eventBase = new EventBase($eventConfig);
$timerEvent = new Event($eventBase, -1, Event::TIMEOUT|Event::PERSIST, function () {
    echo 'bingo'.PHP_EOL;
});
$timerEvent->add(5);
$eventBase->loop();