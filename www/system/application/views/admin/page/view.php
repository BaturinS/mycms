<div align="left" style="padding: 0px 20px">
    <p><b>ID-��������:</b> <?=$page_id?></p>
    <p><b>�������� ��������:</b> <?=$title?></p>
    <p><b>URL ��� ���������:</b> <?=anchor($page_id.".html")?></p>
    <p><b>���� ����������:</b> <?=date('j.m.Y H:i',$date)?></p>
    <p><b>����������:</b> <?=($showed == 1)?'��':'���'?></p>
</div>
<p><?=anchor('admin/pages/edit/'.$page_id, '������������� ��������')?></p>
<p><?=anchor('admin/pages/del/'.$page_id, '������� ��������')?></p>
<p><?=anchor('admin/pages', '��������� � ������ �������')?></p>