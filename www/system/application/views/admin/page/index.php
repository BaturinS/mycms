<? if (!empty($list)) : ?>

<table width="780" border="1" align="center" cellpadding="4" cellspacing="0">

<tr>
    <th width="100"><?=anchor('admin/pages/sort/page_id', 'ID ��������')?></th>
    <th><?=anchor('admin/pages/sort/title', '�������� ��������')?></th>
    <th width="130"><?=anchor('admin/pages/sort/date', '���� ����������')?></th>
    <th width="80"><?=anchor('admin/pages/sort/showed', '����������')?></th>
</tr>

<? foreach ($list as $one) : ?>

<tr>
    <td><?=anchor('admin/pages/show/'.$one['page_id'], $one['page_id']); ?></td>
    <td><?=$one['title']?></td>
    <td><font color="#003366"><?=date('j.m.Y H:i',$one['date'])?></font></td>
    <td><font color="#003366"><?=($one['showed'])?'��':'���'?></font></td>
</tr>

<? endforeach; ?>

</table>

<p align="center"><?=$page_links?></p>

<? else : ?>

��� �������

<? endif; ?>

<?=form_open('admin/pages/search')?>

<table align="center" border="0">

    <tr>
        <td>�����:<br /><input type="text" name="str" value="" /></td>
        <td><br /><select name="field">
        <option value="page_id">ID ��������</option>
        <option value="title">�������� ��������</option>
        <option value="text">����� ��������</option>
        </select></td>
    </tr>
    
    <tr>
        <td><input type="submit" value="�����" /></td><td>&nbsp;</td>
    </tr>

</table>

</form>

<br />

<p><?=anchor('admin/pages/add/', '�������� ����� ��������')?></p>