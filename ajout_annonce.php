<?php
require_once 'templates/header.php';
require_once 'libs/category.php';
$categories = getCategories();

?>

<div class=form-listing w-100 m-auto>
<h1>Ajouter une annonce</h1>
<form action="" method="post">
    <div class="mb-2">
        <label class="form-label" for="username">Title</label>
        <input class="form-control" type="=text" name="title" id="title">
    </div>
    <div class="mb-2">
        <label class="form-label" for="email">Prix</label>
        <input class="form-control" type="=prix" name="prix" id="prix">
    </div>
    <div class="mb-2">
        <label class="form-label" for="password">Description</label>
        <textarea class="form-control" type="=description" name="description" id="description" cols="30" rows="3"></textarea>
    </div>
    <div class="mb-2">
        <label class="form-label" for="category">Categories</label>
        <select name="category" id="category" class="form-select">
    <?php 
    foreach ($categories as $key => $categories) {
        ?>
        <option value="<?= $key ?>"><?= $categories["name"] ?></option>
        <?php } ?> 
        </select>
    </div>
    <input class="btn btn-primary" type="submit" value="Enregistrer" >
</form>
</div>


<?php
require_once 'templates/footer.php';
?>