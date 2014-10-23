<?php

include "Engine/Core.php";

\Engine\Core::init();
\Engine\Core::Controller();
\Engine\Core::Action();
\Engine\Core::SPost();
\Engine\Core::SGet();
\Engine\Core::$view->display();
