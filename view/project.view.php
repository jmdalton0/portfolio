<?php require 'view/partials/header.view.php'; ?>

<main>
    <section>
        <h1><?= $project->get_name() ?></h1>
        <p>I developed this application using the following technologies:</p>

        <div>
            <?php foreach($project->get_versions() as $version) : ?>
                <a href="<?= $version[1] ?>" target="_blank">
                    <img
                        src="assets/technologies/<?= $version[0] ?>.png"
                        alt="<?= $version[0] ?> Logo"
                    />
                </a>
            <?php endforeach ?>
        </div>
    </section>
</main>

<?php require 'view/partials/footer.view.php'; ?>