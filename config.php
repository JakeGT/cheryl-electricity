<?php

define("DB_SERVER", "localhost");
define("DB_USERNAME", "elec");
define("DB_PASSWORD", "elec");
define("DB_NAME", 'electricity');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
