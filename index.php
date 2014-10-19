<?php

include "Engine/Core.php";

\Engine\Core::init();
\Engine\Core::Controller();
\Engine\Core::$view->display();
