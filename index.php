<?php

// Controllers
require "./controllers/template-controller.php";
require "./controllers/user-controller.php";
require "./controllers/admin-controller.php";

// Models
require "./models/routes.php";
require "./models/user-model.php";
require "./models/admin-model.php";

// Functions
require "./functions/error-modal.php";
require "./functions/successful-modal.php";
require "./functions/get-questions.php";
require "./functions/questions-json.php";

$template = new TemplateController();
$template -> template();
