<!--#include file="conex.asp"-->
<%
	login=request.Form("login")
	password1=request.Form("password1")
	wsql = "select * from usuarios where login='"&login&"' and clave='"&password1&"'"
	set rs = con.execute(wsql)
		if (rs.eof=true) then
			session("men")="Usuario no registrado."
		else
			session("men")="<b>Bienvenido</b><br>"& rs("nombre")
			session("tipo")=rs("tipo")
			session("login")=rs("idusuario")
		end if
		preguntar = session("preguntar")
		if preguntar="si" then
			if (rs.eof=true) then
				response.Write("<script>window.close();</script>")
			else
				response.Redirect("preguntar.asp")
			end if
		else
			response.Redirect("index.asp")
		end if	
%>