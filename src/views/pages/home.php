<?php $render('header'); ?>


<a href="<?=$base;?>/note">Novo Tarefa</a>
<table border='1' width='100%'>
    <tr>
        <th>ID</th>
        <th>TITULO</th>
        <th>TAREFA</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($notes as $note): ?>
    <tr>
        <td><?=$note['id'];?></td>
        <td><?=$note['title'];?></td>
        <td><?=$note['text'];?></td>
        <td>
            <a href="<?=$base;?>/edit/<?=$note['id'];?>">
            <img width="20" src="<?=$base;?>/assets/images/document.png" alt="">
        </a>
            <a href="<?=$base;?>/excluir/<?=$note['id'];?>" onclick="return confirm('Tem certeza que deseja excluir?')">
            <img width="20" src="<?=$base;?>/assets/images/trash.png" alt="">
        </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php $render('footer'); ?>