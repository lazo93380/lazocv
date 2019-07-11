<?php require_once('inc/header.inc.php'); ?>

<div class="section" id="competence">
    <div class="container">

        <div class="h4 text-center mb-4 title">
            <h2>Compétences</h2>
        </div>

        <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="card-body">
                <div class="row">
                    <?php foreach ($competences as $co) : ?>

                        <div class="col-md-6">
                            <div class="progress-container progress-primary"><span class="progress-badge"><a href="comp.php?op=show&id=<?php echo $co->id_competences; ?>" class="text-primary">
                                        <?php echo $co->name; ?>
                                    </a></span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo htmlentities($co->capacite); ?>%;"></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>