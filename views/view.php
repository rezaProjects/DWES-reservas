<?php

// Template (Pattern) of views

class View {
    public static function show($viewName, $data = null) {
        include("views/header.php");
        include("views/nav.php");
        include("views/$viewName.php");
        include("views/footer.php");
    }
}