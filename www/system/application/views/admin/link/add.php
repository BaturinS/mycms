<?=form_open('admin/links/add')?>

<table border="0" width="600" cellspacing="4">

<tr>
    <th align="right">ID ��� ������</th>
    <td align="left"><input type="text" name="link_id" value="<?=set_value('link_id')?>" /></td>
</tr>

<tr>
    <th align="right">�������� ��� ������</th>
    <td align="left"><input type="text" name="descr" value="<?=set_value('descr')?>" /></td>
</tr>

<tr>
    <th align="right">URL ������</th>
    <td align="left"><input type="text" name="url" value="<?=set_value('url', 'http://')?>" /></td>
</tr>

<tr>
    <th align="right">&nbsp;</th>
    <td align="left"><input type="submit" value="��������" /></td>
</tr>

</table>

</form>