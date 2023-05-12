<?php require('views/partials/header.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>

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
    </div>
</main>
<?php require('views/partials/footer.php') ?>