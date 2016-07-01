<div class="text-center" style=" background-color: #4682B4; padding:260px">
	<div class="logo">Dados Pessoais</div>
	<!-- Main Form -->
		<form id="altera" class="text-left" action="admin">
			<label>Local da Foto</label>
			<input type="text" class="form-control" id="lg_username"  name="lg_username" placeholder=<?php echo $sobre->SOBR_FT ?>>
			<label>Nome</label>
			<input type="text" class="form-control" id="lg_username"  name="lg_username" placeholder=<?php echo $sobre->SOBR_NM ?>>
			<label>Idade</label>
			<input type="text" class="form-control" id="lg_username"  name="lg_username" placeholder=<?php echo $sobre->SOBR_IDADE ?>>
			<label>Email</label>
			<input type="text" class="form-control" id="lg_username"  name="lg_username" placeholder=<?php echo $sobre->SOBR_EMAIL ?>>
			<label>Telefone Celular</label>
			<input type="text" class="form-control" id="lg_username"  name="lg_username" placeholder=<?php echo $sobre->SOBR_TEL_CEL ?>>
			<label>Telefone Residencial</label>
			<input type="text" class="form-control" id="lg_username"  name="lg_username" placeholder=<?php echo $sobre->SOBR_TEL_RES ?>>
			<label>Endereço</label>
			<input type="text" class="form-control" id="lg_username"  name="lg_username" placeholder=<?php echo $sobre->SOBR_END_DS ?>>
			<label>País</label>
			<input type="text" class="form-control" id="lg_username"  name="lg_username" placeholder=<?php echo $sobre->SOBR_PAIS ?>>
			<label>CEP</label>
			<input type="text" class="form-control" id="lg_username"  name="lg_username" placeholder=<?php echo $sobre->SOBR_CEP ?>>
			<label>Aprensentação</label><br>
			<textarea rows=5 cols=50 name="apresentacao" form="altera" placeholder="<?php echo $sobre->SOBR_APRE; ?>"></textarea><br><hr>
			<label>Competência</label><br>
			<textarea rows=5 cols=50 name="competencia" form="altera" placeholder="<?php echo $sobre->SOBR_COMPET; ?>"></textarea><br><hr>

			<div class="logo">Formação</div>
			<?php foreach($form as $info):?>
					<label>Nome do Curso</label>
					<input type="text" class="form-control" id="lg_username"  name="lg_username" placeholder=<?php echo $info['FORM_CURSO']; ?>>
    			<label>Instituição</label>
					<input type="text" class="form-control" id="lg_username"  name="lg_username" placeholder=<?php echo $info['FORM_INST']; ?>>
					<label>Situação</label>
					<input type="text" class="form-control" id="lg_username"  name="lg_username" placeholder=<?php echo $info['FORM_SITUACAO']; ?>>
					<label>Duração</label>
					<input type="text" class="form-control" id="lg_username"  name="lg_username" placeholder=<?php echo $info['FORM_DURACAO']; ?>>
					<label>Descrição do Curso</label>
					<input type="text" class="form-control" id="lg_username"  name="lg_username" placeholder="<?php echo $info['FORM_DESCRI']; ?>">
					<hr><br><br>
      <?php endforeach; ?>
      <hr>
      <div class="logo">Formação Profissional</div>
      	<?php foreach($trab as $info):?>
      			<label>Cargo</label>
						<input type="text" class="form-control" id="lg_username"  name="lg_username" placeholder=<?php echo $info['TRAB_FUNC']; ?>>
						<label>Empresa</label>
						<input type="text" class="form-control" id="lg_username"  name="lg_username" placeholder=<?php echo $info['TRAB_EMPR']; ?>>
						<label>Tempo</label>
						<input type="text" class="form-control" id="lg_username"  name="lg_username" placeholder="<?php echo $info['TRAB_INICIO']; echo $info['TRAB_FIM']; ?>">
						<label>Descrição</label>
						<input type="text" class="form-control" id="lg_username"  name="lg_username" placeholder="<?php echo $info['TRAB_DESC']; ?>">
            <br><hr>
        <?php endforeach; ?>

			<button type="submit" class="login-button"><i class="fa fa-chevron-right">Atualizar Dados</i></button>
		</form>
</div>
