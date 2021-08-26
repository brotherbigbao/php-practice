<?php
$eventConfig = new EventConfig();
$eventBase = new EventBase($eventConfig);
$event = new Event($eventBase, SIGTERM, Event::SIGNAL|Event::PERSIST, function (){
    echo "sigterm".PHP_EOL;
});
$event->add();
$eventBase->loop();