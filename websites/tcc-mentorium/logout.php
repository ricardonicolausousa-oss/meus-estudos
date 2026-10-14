<?php
session_start();
session_destroy();
header("Location: login_site.php");
exit;
