<?=form_open('admin/pages/edit/'.$page_id);?>

<table border="0" width="600" align="left" cellspacing="4">

<tr>
    <td align="right"><b>ID ��������:</b></td>
    <td align="left"><?=$page_id?></td>
</tr>
<tr>
    <td align="right"><b>�������� ��������:</b></td>
    <td align="left"><input type="text" name="title" value="<?=set_value('title', $title)?>" /></td>
</tr>
<tr>
    <th align="right">����������:</th>
    <td align="left"><input type="checkbox" name="showed" value="1" <?=set_checkbox('showed',1,($showed==1))?> /></td>
</tr>

<tr>
    <td colspan="2" align="center">
        <br />
        <b>����� ��������:</b>
        <br />
        <br />
        <textarea name="text" cols="60" rows="12"><?=set_value('text',$text)?>
        </textarea>
    </td>
</tr>
<tr>
    <td align="right">&nbsp;</td>
    <td align="left"><input type="submit" value="��������� ���������" /></td>
</tr>

</table>

</form>