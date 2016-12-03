<!--#include file="conex.asp"-->
<%
	prod_categoria = request.Form("prod_categoria")
	accion = request.Form("accion")
	
	if accion = "Añadir" then
		wsql = "insert into categorias (nombre) values ('"&prod_categoria&"')"
		con.execute(wsql)
		response.Redirect("index.asp?pag=categorias")
	end if
	if accion = "Modificar" then
		idcategoria = request.Form("idcategoria")
		wsql = "update categorias set nombre='"&prod_categoria&"' where idcategoria="&idcategoria&""
		response.Write(idcategoria)
		con.execute(wsql)
		response.Redirect("index.asp?pag=categorias")
	end if
	if accion = "Eliminar" then
		idcategoria = request.Form("idcategoria")
		wsql2 = "delete from producto where idcategoria =" &idcategoria
		con.execute(wsql2)
		wsql = "delete from categorias where idcategoria=" &idcategoria
		con.execute(wsql)
		response.Write("<script>window.opener.location.reload();window.close()</script>")
	end if
%>