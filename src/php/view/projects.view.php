<?php require 'view/partials/header.view.php'; ?>

<main>
    <section>
        <h1>Projects</h1>
        <h2>Some of the applications I have developed</h2>
    </section>

    <?php foreach ($projects as $project) : ?>
        <section>
            <div>
                <div>
                    <h2><?= $project->get_name() ?></h2>
                    <h4><?= $project->get_description() ?></h4>
                    <a href="/projects?project=<?= $project->get_id() ?>">VIEW</a>
                </div>
                <div>
                    <a href="/projects?project=<?= $project->get_id() ?>">
                        <img
                            src="assets/thumbnail/<?= $project->get_image() ?>"
                            alt="<?= $project->get_name() ?>"
                        />
                    </a>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
</main>

<?php require 'view/partials/footer.view.php'; ?>