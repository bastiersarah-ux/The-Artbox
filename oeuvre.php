<?php
include 'header.php';
include 'bdd.php';
$bdd = connexion();
$oeuvre = null;
$idOeuvre = $_GET['id'];

if (!empty($idOeuvre)) {
    $requete = $bdd->prepare('SELECT * FROM oeuvres WHERE ID = ?');
    $requete->execute([$idOeuvre]);
    $oeuvre = $requete->fetch();
} ?>

<?php if (!empty($oeuvre)) : ?>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvre['titre']; ?></h1>
            <p class="description"><?php echo $oeuvre['artiste']; ?></p>
            <p class="description-complete">
                <?php echo $oeuvre['description']; ?>
            </p>
        </div>
    </article>
<?php else: ?>
    <p>Oeuvre introuvable</p>
<?php endif; ?>

<?php include 'footer.php'; ?>