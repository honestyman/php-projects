<?php

session_start();
sessin_unset();
session_destroy();

header("Location: ../index.php?error=none");