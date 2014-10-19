<?php

include "Engine/Core.php";

Core::init();
Core::Controller();
Core::$view->display();
