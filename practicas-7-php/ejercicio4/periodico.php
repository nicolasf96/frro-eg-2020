<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periodico</title>
</head>
<body>
    <?php
        $noticias=null;
        if(isset($_GET['queNoticia'])){
            setcookie('queNoticia',$_GET['queNoticia'],time()+86400*365);
            switch($_GET['queNoticia']){
                case 1:
                    $noticias= "econ&oacute;micas";
                    $n=$_GET['queNoticia'];
                break;
                case 2:
                    $noticias= "pol&iacute;ticas";
                    $n=$_GET['queNoticia'];
                break;
                case 3:
                    $noticias= "deportivas";
                    $n=$_GET['queNoticia'];
                break;
                default:
                    $noticias=null;
                    $n=0;
                break;
            }
        }else{
            if(isset($_COOKIE['queNoticia'])){
                switch($_COOKIE['queNoticia']){
                    case 1:
                        $noticias= "econ&oacute;micas";
                        $n=$_COOKIE['queNoticia'];
                    break;
                    case 2:
                        $noticias= "pol&iacute;ticas";
                        $n=$_COOKIE['queNoticia'];
                    break;
                    case 3:
                        $noticias= "deportivas";
                        $n=$_COOKIE['queNoticia'];
                    break;
                    default:
                        $noticias=null;
                        $n=0;
                    break;
                }
            }else{
                $n=0;
                $noticias=null;
            }
        }
    ?>
    <form id="form">
        <label>Noticia econ&oacute;mica</label><input type="radio" onclick="enviar()" 
        name="queNoticia" value="1" <?php echo $n == 1 ? "checked=checked" : "" ;?> >
        <label>Noticia pol&iacute;tica</label><input type="radio" onclick="enviar()" 
        name="queNoticia" value="2" <?php echo $n == 2 ? "checked=checked" : ""; ?> >
        <label>Noticia deportiva</label><input type="radio" onclick="enviar()" 
        name="queNoticia" value="3" <?php echo $n == 3 ? "checked=checked" : ""; ?> >
    </form>
    <script>
        function enviar(){
            document.getElementById("form").submit();
        }
    </script>
    <?php
        if(isset($noticias)){
            echo "<h1>Noticias ".$noticias."</h1>
            <a href=eliminarCookie.php>Eliminar cookies</a>";
        }
    ?>
</body>
</html>