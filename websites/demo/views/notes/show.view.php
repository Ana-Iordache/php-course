<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">go back</a>
        </p>
        <p>
            <?= htmlspecialchars($note['body'])?>
            <!--htmlspecialchars function will prevent the string to be converted to html
            (if in the body we introduce some html tags)-->
        </p>
        <form class="mt-6" method="POST">
            <input type="hidden" name="_method" value="DELETE"> <!-- sending the information to BE that we perfom a delete req-->
            <input type="hidden" name="id" value="<?= $note['id'] ?>"/>
            <button class="text-sm text-red-500">Delete</button>
        </form>
    </div>
</main>
<?php require base_path('views/partials/footer.php') ?>