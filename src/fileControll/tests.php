<?php
session_start();
echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
