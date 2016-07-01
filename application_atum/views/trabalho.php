    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Experiência Profissional</h1>
                        <hr class="small">
                        <span class="subheading">Trabalhos realizados</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php foreach($query as $info):?>
                    <div class="post-preview">
                        <h2 class="post-title"><?php echo $info['TRAB_FUNC']?></h2>
                        <a>
                        <h3 class="post-subtitle"><?php echo $info['TRAB_EMPR']?> - <?php echo $info['TRAB_DESC']?></h3>
                        </a>
                        <p class="post-meta"><?php echo $info['TRAB_INICIO']?><?php echo $info['TRAB_FIM']?></p>
                    </div>
                
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <hr>