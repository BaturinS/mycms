<div align="left" style="padding: 0px 20px">
    <p><b>ID-������:</b> <?=$link_id?></p>
    <p><b>�������� ������:</b> <?=$descr?></p>
    <p><b>URL:</b> <?=$url?></p>
    <p><b>������:</b> <?=$cliks?></p>
</div>
<p><?=anchor('admin/links/edit/'.$link_id, '������������� ������')?></p>
<p><?=anchor('admin/links/del/'.$link_id, '������� ������')?></p>
<p><?=anchor('admin/links', '��������� � ������ ������')?></p>