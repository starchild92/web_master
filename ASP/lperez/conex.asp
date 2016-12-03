<% 
	set con = Server.CreateObject("ADODB.Connection") 'para acces 2007
	con.open="provider=microsoft.ACE.OLEDB.12.0;data source ="&server.MapPath("datos/lperez.accdb")
%>
