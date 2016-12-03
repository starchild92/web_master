<%@LANGUAGE="VBSCRIPT" CODEPAGE="1252"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cargar Imagenes</title>
</head>

<body>
<table width="450" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'">
  <tr>

  <% 
	 'response.Write("fotos")
	 cod=request.QueryString("idp")  
  %>
    <th align="center" valign="middle" scope="col"><form action="gimagen.asp?cod=<%response.Write(cod)%>" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="70%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th scope="col">&nbsp;</th>
        </tr>
        <tr>
          <td height="30" bgcolor="#999999"><div align="center">Subir Fotos de <% response.Write(cod) %></div></td>
        </tr>
        <tr>
          <td align="center"><label>
            <input type="file" name="file" />
          </label></td>
          </tr>
        <tr>
          <td align="center"><label>
            <input type="file" name="file2" />
          </label></td>
          </tr>
        <tr>
          <td align="center"><label>
            <input type="file" name="file3" />
          </label></td>
          </tr>
        <tr>
          <td align="center"><label>
            <input type="file" name="file4" />
          </label></td>
          </tr>
        <tr>
          <td align="center"><label>
            <input type="submit" style="width: 100px;height: 30px; background-color:#999; color:#000; border: solid thin #000; font-family:Roboto, 'Roboto Lt', 'Roboto Th', 'Roboto Bk'" name="Submit" value="Guardar" />
          </label></td>
          </tr>
      </table>
        </form>
    </th>
  </tr>
</table>
</body>
</html>
