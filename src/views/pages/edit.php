<?php $render('header'); ?>

<h2>Editar Usuário</h2>

<form method="POST" action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
	<label for="nome">Nome:</label><br/>
	<input type="text" name="nome" value="<?=$usuario['nome'];?>" /><br/><br/>
	
	<label for="email">Email:</label><br/>
	<input type="email" name="email" value="<?=$usuario['email'];?>"/><br/><br/>
	
	<input type="submit" value="Salvar" />

</form>

<?php $render('footer'); ?>
