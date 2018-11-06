<?php

function getRootpath($path){
    return DOCROOT."/".$path;
}

function renderTemplate($template,$content){
    ob_start();
    include getRootPath("templates/".$template.".php");
    return ob_get_clean();
}

function renderView($view){
    ob_start();
    include getRootPath("views/".$view.".php");
    return ob_get_clean();
}

function renderViewWithTemplate($view,$template){
    $content =renderView($view) ;
    return renderTemplate($template,$content);
}

function loadPage($logicfile,$pagefunc){
    include getRootPath("logicpages/".$logicfile.".php");
    $data = $pagefunc;
    pageFunc($data);
}