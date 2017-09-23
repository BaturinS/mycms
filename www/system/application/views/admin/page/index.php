<? if (!empty($list)) : ?>

<table width="780" border="1" align="center" cellpadding="4" cellspacing="0">

<tr>
    <th width="100"><?=anchor('admin/pages/sort/page_id', 'ID страницы')?></th>
    <th><?=anchor('admin/pages/sort/title', 'Название страницы')?></th>
    <th width="130"><?=anchor('admin/pages/sort/date', 'Дата добавления')?></th>
    <th width="80"><?=anchor('admin/pages/sort/showed', 'Показывать')?></th>
</tr>

<? foreach ($list as $one) : ?>

<tr>
    <td><?=anchor('admin/pages/show/'.$one['page_id'], $one['page_id']); ?></td>
    <td><?=$one['title']?></td>
    <td><font color="#003366"><?=date('j.m.Y H:i',$one['date'])?></font></td>
    <td><font color="#003366"><?=($one['showed'])?'Да':'Нет'?></font></td>
</tr>

<? endforeach; ?>

</table>

<p align="center"><?=$page_links?></p>

<? else : ?>

Нет записей

<? endif; ?>

<?=form_open('admin/pages/search')?>

<table align="center" border="0">

    <tr>
        <td>Поиск:<br /><input type="text" name="str" value="" /></td>
        <td><br /><select name="field">
        <option value="page_id">ID страницы</option>
        <option value="title">Название страницы</option>
        <option value="text">Текст страницы</option>
        </select></td>
    </tr>
    
    <tr>
        <td><input type="submit" value="Найти" /></td><td>&nbsp;</td>
    </tr>

</table>

</form>

<br />

<p><?=anchor('admin/pages/add/', 'Добавить новую страницу')?></p>