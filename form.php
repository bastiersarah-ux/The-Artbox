<?php include 'header.php'; ?>

<form method="post" action="traitement.php">
    <h2>Ajouter une nouvelle oeuvre</h2>
    <fieldset>
        <label for="titre">Titre de l'oeuvre :</label>
        <input type="text" name="titre" id="titre" class="champ" placeholder="Ex. : Dodomu">
        <label for="artiste">Nom de l'artiste :</label>
        <input type="text" name="artiste" id="artiste" class="champ" placeholder="Ex. : Mia Tozerki">
        <label for="image">URL de l'image :</label>
        <input type="url" name="image" id="image" class="champ" placeholder="Ex. : https://exemple.com/photo.jpg">
        <label for="description">Description de l'oeuvre :</label>
        <textarea name="description" id="description" class="champ" placeholder="Ex. : Un sombre tableau qui, par son verni éclatant, rayonne tel un marbre poli. Une oeuvre à la cohérence transcendantale, exécutée à la perfection."></textarea>
        <button type="submit">Créer une oeuvre</button>
    </fieldset>
</form>

<?php include 'footer.php'; ?>