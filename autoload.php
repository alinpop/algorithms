<?php

spl_autoload_register(function ($class) {
    include "algorithms/{$class}.php";
});
