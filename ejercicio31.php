<?php
$txtNombre = "";
$rdglenguaje = "";
$chkphp = "";
$chkhtml = "";
$chkcss = "";
$lsAnime = "";
$txtComentario = "";

if($_POST){
    $txtNombre = (isset($_POST['txtNombre']))?$_POST["txtNombre"]:"";
    $rdglenguaje = (isset($_POST['lenguaje']))?$_POST["lenguaje"]:"";

    $chkphp = (isset($_POST['chkphp'])=="si")?"checked":"";
    $chkhtml = (isset($_POST['chkhtml'])=="si")?"checked":"";
    $chkcss = (isset($_POST['chkcss'])=="si")?"checked":"";

    $lsAnime = (isset($_POST['lsAnime']))?$_POST['lsAnime']:"";
    $txtComentario = (isset($_POST['txtComentario']))?$_POST['txtComentario']:"";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if($_POST){?>
    <strong>Hola </strong> <?php echo $txtNombre; ?>
    <br/>
    <strong>Tu lenguaje es: </strong> <?php echo $rdglenguaje; ?>
    <br/>
    <strong>Estás aprendiendo: </strong><br/>
    <?php echo ($chkphp=="checked")?"- PHP":""; ?><br/>
    <?php echo ($chkhtml=="checked")?"- HTML":""; ?><br/>
    <?php echo ($chkcss=="checked")?"- CSS":""; ?><br/>
    <strong>El anime que te gusta es: </strong> <?php echo $lsAnime; ?>
    <br/>
    <strong>Tu mensaje es: </strong> <?php echo $txtComentario; ?>

    <?php }?>
    <form action="ejercicio31.php" method="post">
    <br/>
        Nombre: <br/>
        <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
        <br/>
        ¿Te gusta?: <br/>
        <br/>php: <input type="radio" <?php echo ($rdglenguaje=="php")?"checked":""; ?> name="lenguaje" value="php" id=""> <br/>
        <br/>html: <input type="radio" <?php echo ($rdglenguaje=="html")?"checked":""; ?> name="lenguaje" value="html" id=""> <br/>
        <br/>css: <input type="radio" <?php echo ($rdglenguaje=="css")?"checked":""; ?> name="lenguaje" value="css" id=""> <br/>

        Estás aprendiendo...  <br/>
        <br/>php: <input type="checkbox" <?php echo $chkphp; ?> name="chkphp" value="si" id="">
        <br/>html: <input type="checkbox" <?php echo $chkhtml; ?> name="chkhtml" value="si" id="">
        <br/>css: <input type="checkbox" <?php echo $chkcss; ?> name="chkcss" value="si" id="">  <br/>
        <br/>
        ¿Qué anime te gusta?...  <br/><br/>
        <select name="lsAnime" id="">
            <option value="">[Ninguna serie]</option>
            <option value="Naruto" <?php echo ($lsAnime=="Naruto")?"selected":"" ?> >Naruto</option>
            <option value="Bleach" <?php echo ($lsAnime=="Bleach")?"selected":"" ?> >Bleach</option>
            <option value="Dragon Ball" <?php echo ($lsAnime=="Dragon Ball")?"selected":"" ?> >Dragon Ball</option>
        </select>

        ¿Tienes alguna duda?<br/>
        <textarea name="txtComentario" id="" cols="30" rows="10"><?php echo $txtComentario; ?></textarea>
        <br/>
        <input type="submit" value="Enviar información">
    </form>
</body>
</html>