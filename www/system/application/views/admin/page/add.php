<?=form_open('admin/pages/add')?>

<table border="0" width="600" cellspacing="4">

<tr>
    <th align="right">ID страницы</th>
    <td align="left"><input type="text" name="page_id" value="<?=set_value('page_id')?>" /></td>
</tr>

<tr>
    <th align="right">Название страницы</th>
    <td align="left"><input type="text" name="title" value="<?=set_value('title')?>" /></td>
</tr>

    <input type="hidden" name="date" value="<?=set_value('date',time())?>" />

<tr>
    <th align="right">Показывать</th>
    <td align="left"><input type="checkbox" name="showed" value="1" <?=set_checkbox('showed',1,TRUE)?> /></td>
</tr>

<tr>
    <td colspan="2" align="center">
        <br />
        <b>Текст страницы</b>
        <br />
        <br />
        <textarea name="text" cols="60" rows="12"><?=set_value('text','Текст страницы')?>
        </textarea>
    </td>
</tr>

<tr>
    <th align="right">&nbsp;</th>
    <td align="left"><input type="submit" value="Добавить" /></td>
</tr>

</table>

</form>