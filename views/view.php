<?php

// Template (Pattern) of views

class View {
    public static function show($viewName, $data = null) {
        include("header.php");
        include("nav.php");
        include("$viewName.php");
        include("footer.php");
    }
}