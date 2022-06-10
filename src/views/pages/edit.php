<?php $render('header');?>

<h2>Adicionar Nova Tarefa</h2>

<form action="<?=$base;?>/edit/<?=$note['id'];?>" method="POST">
<label for="">
    Título:<br/>
    <input type="text" name="title" value="<?=$note['title'];?>"/>  
</label><br/><br/>
<label>
    Tarefa:<br/>
    <input type="text" name="text" value="<?=$note['text'];?>"/>
</label><br/><br/>
<input type="submit" value="Salvar"/>
</form>

<?php $render('footer');?>