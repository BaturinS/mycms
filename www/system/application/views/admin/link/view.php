<div align="left" style="padding: 0px 20px">
    <p><b>ID-ссылки:</b> <?=$link_id?></p>
    <p><b>Описание ссылки:</b> <?=$descr?></p>
    <p><b>URL:</b> <?=$url?></p>
    <p><b>Кликов:</b> <?=$cliks?></p>
</div>
<p><?=anchor('admin/links/edit/'.$link_id, 'Редактировать ссылку')?></p>
<p><?=anchor('admin/links/del/'.$link_id, 'Удалить ссылку')?></p>
<p><?=anchor('admin/links', 'Вернуться к списку ссылок')?></p>