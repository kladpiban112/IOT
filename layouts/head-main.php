<?php
$isScssconverted = true;

require_once ("scssphp/scss.inc.php");

use ScssPhp\ScssPhp\Compiler;

if($isScssconverted){

    global $compiler;
    $compiler = new Compiler();

    $compine_css = "assets/css/app.min.css";

    $source_scss = "assets/scss/config/minimal/app.scss";

    $scssContents = file_get_contents($source_scss);

    $import_path = "assets/scss/config/minimal";
    $compiler->addImportPath($import_path);
    $target_css = $compine_css;

    $css = $compiler->compile($scssContents);

    if (!empty($css) && is_string($css)) {
        file_put_contents($target_css, $css);
    }
}
// include language configuration file based on selected language
$lng = "th";
if (isset($_GET['lang'])) {
   $lng = $_GET['lang'];
    $_SESSION['lang'] = $lng;
}
if( isset( $_SESSION['lang'] ) ) {
    $lng = $_SESSION['lang'];
}else {
    $lng = "th";
}
require_once ("./assets/lang/" . $lng . ".php");
?>
<!DOCTYPE html>
<html lang="<?=$lng?>"  data-layout="twocolumn" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-layout-style="default">

