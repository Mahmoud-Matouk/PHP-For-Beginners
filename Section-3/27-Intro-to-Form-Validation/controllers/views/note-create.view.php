<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php require "partials/header.php"; ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form method="POST">
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="col-span-full">
                        <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Note</label>
                        <div class="mt-5">
                            <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Write down your note here"
                            ><?= isset($_POST['body']) ? $_POST['body'] : '' ?></textarea>
                            <?php if (isset($errors['body'])) : ?>
                                <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="mt-5 flex items-center justify-end gap-x-6">
                        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
<?php require "partials/footer.php"; ?>