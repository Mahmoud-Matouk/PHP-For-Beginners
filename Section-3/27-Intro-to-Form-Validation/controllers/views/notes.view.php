<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php require "partials/header.php"; ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach ($notes as $note) : ?>
            <ul>
                <a href="./../controllers/note.php?id=<?= $note['id'] ?>" class = "text-blue-600 hover:underline">
                    <?= htmlspecialchars($note['body']); ?>
                </a>
            </ul>
        <?php endforeach; ?>
        <p class = "mt-5">
            <a href="./../controllers/note-create.php" class = "text-black-600 hover:underline">Create Note</a>
        </p>
    </div>
</main>
<?php require "partials/footer.php"; ?>