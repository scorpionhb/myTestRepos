<h1>hello</h1>
<?php
/**
 * Created by PhpStorm.
 * User: 1405564
 * Date: 31/10/2016
 * Time: 14:08
 */

define('INCLUDE_DIR', dirname(__FILE__) . '/inc/');

$rules = array(
    //main pages
    'about' => "/about",
    'contactus' => "/contactus",
    'blog' => "/blog",
    'blog_article' => "/blog/(?'blogID'[\w\-]+)",

    //admin pages
    'login' => "/login",
    'create_article' => "/createarticle",
    'logout' => "/logout",

    //home page
    'home' => "/"
);

$uri = rtrim(dirname($_SERVER["SCRIPT_NAME"], '/'));
$uri = '/' . trim(str_replace($uri, '', $_SERVER['REQUEST_URI']), '/');
$uri = urldecode($uri);

foreach ($rules as $action => $rules){
    if (preg_match('~^' . $rule . '$~i', $uri, $param)) {
        include(INCLUDE_DIR . $action . '.php');
        exit();
    }
}

//404 error
include(INCLUDE_DIR . '404.php');

?>