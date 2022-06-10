<?php $render('header');?>

<h2>Adicionar Nova Tarefa</h2>

<form action="<?=$base;?>/note" method="POST">
<label for="">
    Título:<br/>
    <input type="text" name="title"/>  
</label><br/><br/>
<label>
    Tarefa:<br/>
    <input type="text" name="text"/>
</label><br/><br/>
<input type="submit" value="Adicionar"/>
</form>

<?php $render('footer');?>