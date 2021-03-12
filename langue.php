<?php
session_start();
?>

<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
class LS {

    public function index()
    {
    [...]
        $_SESSION['lg'] = $_GET['lang'];
        $this->arrayLang = array(
            'lang' => $_GET['lang'] . '/',
            'langTool' => str_replace('/', '', $_GET['lang'])
            );
        return $this->arrayLang;
    }
}
$ls = new LS;
$ls->index($_GET);

?>
  </body>
</html>
