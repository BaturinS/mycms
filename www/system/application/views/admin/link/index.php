<? if (!empty($list)) : ?>

<table width="780" border="1" align="center" cellpadding="4" cellspacing="0">

<tr>
    <th width="100"><?=anchor('admin/links/sort/link_id', 'ID ������')?></th>
    <th width="240"><?=anchor('admin/links/sort/descr', '�������� ������')?></th>
    <th><?=anchor('admin/links/sort/url', 'URL ������')?></th>
    <th width="80"><?=anchor('admin/links/sort/cliks', '������')?></th>
</tr>

<? foreach ($list as $one) : ?>

<tr>
    <td><?=anchor('admin/links/show/'.$one['link_id'], $one['link_id']); ?></td>
    <td><?=$one['descr']?></td>
    <td><a href="<?=$one['url']?>" target="_blank"><?=$one['url']?></a></td>
    <td><font color="#003366"><?=$one['cliks']?></font></td>
</tr>

<? endforeach; ?>

</table>

<p align="center"><?=$page_links?></p>

<? else : ?>

��� �������

<? endif; ?>

<p><?=anchor('admin/links/add/', '�������� ����� ������')?></p>