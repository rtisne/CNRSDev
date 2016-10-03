<div class="w-form">
    <form name="form" action="<?= (isset($action)) ? $action : "" ?>" method="post">
        <label for="name">Nom de l'atelier:</label>
        <input class="w-input"  id="name" maxlength="256" name="name" value="<?= (isset($name)) ? $name : "" ?>" placeholder="Entrez le nom de l'atelier" required="required" type="text">
        <label for="description">Description de l'atelier:</label>
        <textarea class="w-input" id="description" name="description" placeholder="Entrez la description de l'atelier"><?= (isset($description)) ? $description : "" ?></textarea>
        <input class="w-button" data-wait="Veuillez patienter..." type="submit" value="Validez">
    </form>
</div>
