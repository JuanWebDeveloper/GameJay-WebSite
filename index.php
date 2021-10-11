<?php

// Controllers
require "./controllers/template-controller.php";
require "./controllers/user-controller.php";
require "./controllers/admin-controller.php";

// Models
require "./models/routes.php";
require "./models/user-model.php";
require "./models/admin-model.php";

$template = new TemplateController();
$template -> template();
