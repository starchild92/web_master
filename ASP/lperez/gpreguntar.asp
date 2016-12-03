<!--#include file="conex.asp"-->
Verificando su estadado.
<% 	
idproducto = request.QueryString("idprod")
session("idprod") = idproducto
	if session("login")="" then
		session("preguntar")="no"
		response.Write("<script>window.open('ventanalogeo.asp','Registarse','width=550,height=300')</script>")
	else
		response.Write("<script>window.open('preguntar.asp','Hacer Pregunta','width=500,height=250')</script>")
	end if
	response.Write("<script>window.close();</script>")
%>
