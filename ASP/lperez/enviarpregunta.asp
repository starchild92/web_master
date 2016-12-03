<!--#include file="conex.asp"-->
<%	
	preguntau = request.Form("pregunta")
	login = session("login")
	idproducto = request.Form("idproducto")
	
	wsql="select nombre from usuarios where idusuario=" &login
	set rs = con.execute(wsql)
	nombre = rs("nombre")
	
	wsql = "select idusuario from producto where idproducto=" &idproducto
	set rs = con.execute(wsql)
	idusuprod = rs("idusuario")
	
		if idusuprod = login then
			response.Write("<script>window.alert('No puede realizarse preguntas a usted mismo');</script>")
			session("login")=""
			session.Abandon()
			response.Write("<script>window.close();</script>")
		else
			wsql = "insert into preguntas (idproducto,nombreusuario,fechapregunta,pregunta,idvendedor) values ('"&idproducto&"','"&nombre&"','"&date&"','"&preguntau&"','"&idusuprod&"')"
			con.execute(wsql)
			session("login")=""
			session.Abandon()
			response.Write("<script>window.close();</script>")
		end if
%>