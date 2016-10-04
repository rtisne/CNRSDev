<div class="w-form">
    <form name="form" action="<?= (isset($action)) ? $action : "" ?>" method="post">
        <label for="name">Nom de l'atelier:</label>
        <input class="w-input"  id="titre" maxlength="256" name="titre" value="<?= (isset($titre)) ? $titre : "" ?>" placeholder="Entrez le nom de l'atelier" required="required" type="text">
        <label for="name">Thème de l'atelier:</label>
        <input class="w-input"  id="theme" maxlength="256" name="theme" value="<?= (isset($theme)) ? $theme : "" ?>" placeholder="Entrez le theme de l'atelier" required="required" type="text">
        <label for="name">Type de l'atelier:</label>
        <input class="w-input"  id="type" maxlength="256" name="type" value="<?= (isset($type)) ? $type : "" ?>" placeholder="Entrez le type de l'atelier" required="required" type="text">
        <label for="name">Adresse de l'atelier:</label>
        <input class="w-input"  id="lieu" maxlength="256" name="lieu" value="<?= (isset($lieu)) ? $lieu : "" ?>" placeholder="Entrez l'adresse de l'atelier" required="required" type="text">
        <label for="name">Duree de l'atelier (en minutes):</label>
        <input class="w-input"  id="duree" name="duree" value="<?= (isset($duree)) ? $duree : "" ?>" placeholder="0" required="required" type="number">
        <label for="name">Capacite de l'atelier (nombre de personne):</label>
        <input class="w-input"  id="capacite" name="capacite" value="<?= (isset($capacite)) ? $capacite : "" ?>" placeholder="0" required="required" type="number">
        <label for="name">Animateurs de l'atelier:</label>
        <input class="w-input"  id="type" maxlength="500" name="animateur" value="<?= (isset($animateur)) ? $animateur : "" ?>" placeholder="Entrez les animateurs de l'atelier" required="required" type="text">
        <label for="description">Description de l'atelier:</label>
        <textarea class="w-input" id="resume" name="resume" placeholder="Entrez la description de l'atelier"><?= (isset($resume)) ? $resume : "" ?></textarea>
        <?= (isset($id))? '<input type="hidden" name="id" value="'.$id.'">':""?>
        <input class="w-button" data-wait="Veuillez patienter..." type="submit" value="Validez">
    </form>
</div>
