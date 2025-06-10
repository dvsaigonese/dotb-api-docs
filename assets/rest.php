<?php
// File này bao gồm các đoạn code bổ sung cho api/rest.php trong src gốc.
// Nhằm map endpoint v1 chuyển nó thành v11_3 cho các biến cần thiết ở request và server

$requestUri   = $_SERVER['REQUEST_URI']          ?? '';
$redirectUrl  = $_SERVER['REDIRECT_URL']         ?? '';
$redirectQS   = $_SERVER['REDIRECT_QUERY_STRING']?? '';
$queryString  = $_SERVER['QUERY_STRING']         ?? '';
$pathInfo     = $_SERVER['PATH_INFO']            ?? '';
$origPathInfo = $_SERVER['ORIG_PATH_INFO']       ?? '';

$search  = ['v1/',          'v1/'];
$replace = ['v11_3/',       'v11_3/'];

$_SERVER['REQUEST_URI']          = str_replace($search, $replace, $requestUri);
$_SERVER['REDIRECT_URL']         = str_replace($search, $replace, $redirectUrl);
$_SERVER['REDIRECT_QUERY_STRING']= str_replace($search, $replace, $redirectQS);
$_SERVER['QUERY_STRING']         = str_replace($search, $replace, $queryString);
$_SERVER['PATH_INFO']            = str_replace($search, $replace, $pathInfo);
$_SERVER['ORIG_PATH_INFO']       = str_replace($search, $replace, $origPathInfo);

if (!empty($_GET['__dotb_url'])) {
    $_GET['__dotb_url']      = str_replace($search, $replace, $_GET['__dotb_url']);
}
if (!empty($_REQUEST['__dotb_url'])) {
    $_REQUEST['__dotb_url']  = str_replace($search, $replace, $_REQUEST['__dotb_url']);
}
