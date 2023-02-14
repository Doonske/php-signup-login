<?php

session_start();

session_destroy();

header("Location: save_area.php");
exit;