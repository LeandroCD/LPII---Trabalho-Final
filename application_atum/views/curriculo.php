
<div class="col-lg-3  col-sm-3  col-xs-6 panel-body visible-lg visible-md">
    <img src=<?php echo $sobre->SOBR_FT ?>>
</div>
<h2><?php echo $sobre->SOBR_NM ?></h2>
<hr>
<font face = "Tahoma"><p align = "center"><?php echo $sobre->SOBR_END_DS ?><br>
    <?php echo $sobre->SOBR_EMAIL ?><br>
    (11)<?php echo $sobre->SOBR_TEL_CEL ?></font></p>
    <p align = "center"><font face = "Tahoma"><?php echo $sobre->SOBR_COMPET ?></font></p>
<hr>
    <h4 align="center"><font face = "Tahoma" >FORMAÇÃO ACADÊMICA</font></h4>
    <ul>
        <?php foreach($form as $info):?>
            <li align = "justify"><font face = "Tahoma"><?php echo $info['FORM_CURSO']?> - 
                <blockquote><?php echo $info['FORM_DESCRI']?>
                <?php echo $info['FORM_SITUACAO']?>.</blockquote>
                <?php echo $info['FORM_INST']?>.
                Duração: <?php echo $info['FORM_DURACAO']?>.
                <hr>
        <?php endforeach; ?>
    </ul>
    <hr>
    <h4 align="center"><font face = "Tahoma">EXPERIÊNCIA PROFISSIONAL</h4>
    <ul>
        <?php foreach($trab as $info):?>
            <li align = "justify"><b>CARGO:</b> <?php echo $info['TRAB_FUNC']?></li>
            <li align = "justify"><b>EMPRESA:</b> <?php echo $info['TRAB_EMPR']?> </li>
            <li align = "justify"><b>DESCRIÇÃO DAS ATIVIDADES:</b> <?php echo $info['TRAB_DESC']?></li>
            <li align = "justify"><b>PERÍODO:</b> <?php echo $info['TRAB_INICIO']?> a <?php echo $info['TRAB_FIM']?></li>
            <br><hr>
        <?php endforeach; ?>
    </ul></font>
<hr>