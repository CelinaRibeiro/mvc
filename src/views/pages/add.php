<?php $render('header'); ?>

<h2>Adicionar Novo Usuário</h2>

<form method="POST" action="<?=$base;?>/novo">
	<label for="nome">Nome:</label><br/>
	<input type="text" name="nome" /><br/><br/>
	
	<label for="email">Email:</label><br/>
	<input type="email" name="email"/><br/><br/>
	
	<input type="submit" value="Adicionar" />

</form>

<?php $render('footer'); ?>
