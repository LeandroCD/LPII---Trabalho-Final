    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>Minha Formação</h1>
                        <h2 class="subheading">Formação acadêmica e cursos</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php foreach($query as $info):?>
                        <h2 class="section-heading"><?php echo $info['FORM_CURSO']?></h2>
                        <p><?php echo $info['FORM_INST']?></p>
                        <blockquote><?php echo $info['FORM_DESCRI']?></blockquote>
                        <blockquote><?php echo $info['FORM_SITUACAO']?></blockquote>
                        <p class="post-meta">Duração: <?php echo $info['FORM_DURACAO']?> </p>
                        <hr>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </article>

    <hr>
