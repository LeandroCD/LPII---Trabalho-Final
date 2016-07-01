    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Sobre Mim</h1>
                        <hr class="small">
                        <span class="subheading">Leandro Coelho</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <!--<div class="col-md-4 col-sm-6 col-xs-12"> -->
            <div class="col-lg-4  col-sm-6  col-xs-12 panel-body visible-lg visible-md">
                <img src=<?php echo $query->SOBR_FT ?>>
            </div>
            <div class="col-lg-8  col-sm-6  col-xs-12 panel-body">
                <p><?php echo $query->SOBR_APRE ?></p>
                <p><?php echo $query->SOBR_COMPET ?></p>
                <p></p>
            </div>
            <div class="col-lg-12  col-sm-12  col-xs-12 table-responsive">
                         <table class = "table table-striped" cellspacing = "0" cellpading = "0">
                             <thead>
                                 <tr>
                                     <td><h3>Nome completo:</h3></td>
                                     <td><h3>Idade:</h3></td>
                                     <td><h3>Endereço:</h3></td>
                                     <td><h3>E-mail:</h3></td>
                                     <td><h3>Telefone:</h3></td>
                                     <td><h3>Telefone para contato:</h3></td>
                                 </tr>
                             </thead>
                             <tbody>
                                <tr>
                                     <td><?php echo $query->SOBR_NM ?></td>
                                     <td><?php echo $query->SOBR_IDADE ?></td>
                                     <td><?php echo $query->SOBR_END_DS ?></td>
                                     <td><?php echo $query->SOBR_EMAIL ?></td>
                                     <td>(11)<?php echo $query->SOBR_TEL_CEL ?></td>
                                     <td>(11)<?php echo $query->SOBR_TEL_RES ?></td>
                                 </tr>
                             </tbody>
                         </table>
            </div>
        </div>
    </div>

    <hr>



