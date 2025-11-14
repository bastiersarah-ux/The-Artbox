<?php include 'header.php';
include 'oeuvres.php';
$id = $_GET['id'];
$o = null;

foreach ($oeuvres as $oeuvre) {
    if ($oeuvre['id'] ==  $id) {
        $o = $oeuvre;
        break;
    }
}
?>
<article id="detail-oeuvre">
    <div id="img-oeuvre">
        <img src="<?php echo $o['image']; ?>" alt="<?php echo $o['title']; ?>">
    </div>
    <div id="contenu-oeuvre">
        <h1><?php echo $o['title']; ?></h1>
        <p class="description"><?php echo $o['artist']; ?></p>
        <p class="description-complete">
            <?php echo $o['description']; ?>
        </p>
    </div>
</article>
<?php include 'footer.php'; ?>