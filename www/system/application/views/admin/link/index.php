<? if (!empty($list)) : ?>

<table width="780" border="1" align="center" cellpadding="4" cellspacing="0">

<tr>
    <th width="100"><?=anchor('admin/links/sort/link_id', 'ID ссылки')?></th>
    <th width="240"><?=anchor('admin/links/sort/descr', 'Название ссылки')?></th>
    <th><?=anchor('admin/links/sort/url', 'URL ссылки')?></th>
    <th width="80"><?=anchor('admin/links/sort/cliks', 'Кликов')?></th>
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

Нет записей

<? endif; ?>

<?=form_open('admin/links/search')?>

<table align="center" border="0">

    <tr>
        <td>Поиск:<br /><input type="text" name="str" value="" /></td>
        <td><br /><select name="field">
        <option value="link_id">ID ссылки</option>
        <option value="descr">Название ссылки</option>
        <option value="url">URL</option>
        </select></td>
    </tr>
    
    <tr>
        <td><input type="submit" value="Найти" /></td><td>&nbsp;</td>
    </tr>

</table>

</form>

<br />

<p><?=anchor('admin/links/add/', 'Добавить новую ссылку')?></p>