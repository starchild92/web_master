<!--#include file="conex.asp"-->
<%
	prod_categoria = request.Form("prod_categoria")
	prod_nombre = request.Form("prod_nombre")
	prod_cantidad = request.Form("prod_cantidad")
	prod_precio = request.Form("prod_precio")
	prod_descripcion = request.Form("prod_descripcion")
	prod_estatus = request.Form("prod_estatus")
		
	login=session("login")
	fecha = date
	
	accion = request.Form("accion")
	if accion = "Guardar" then
		wsql = "insert into producto (idusuario,idcategoria,nombre,cantidad,precio,fechareg,descripcion,estatus) values ('"&login&"','"&prod_categoria&"','"&prod_nombre&"','"&prod_cantidad&"','"&prod_precio&"','"&fecha&"','"&prod_descripcion&"','"&prod_estatus&"')"
		con.execute(wsql)
		response.Redirect("index.asp?pag=fproducto")
	end if
	if accion = "Modificar" then
		idprod = request.Form("idprod")
		wsql = "update producto set idcategoria ='"&prod_categoria&"', nombre='"&prod_nombre&"', cantidad='"&prod_cantidad&"', precio='"&prod_precio&"', fechareg='"&fecha&"', descripcion='"&prod_descripcion&"', estatus='"&prod_estatus&"' where idproducto="&idprod&""
		con.execute(wsql)
		response.Redirect("index.asp?pag=fproducto")
	end if
	if accion = "Eliminar" then
		idprod = request.Form("idprod")
		wsql = "delete from producto where idproducto=" &idprod
		con.execute(wsql)
		response.Write("<script>window.opener.location.reload();window.close()</script>")
	end if
%>