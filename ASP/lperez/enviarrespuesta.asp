<!--#include file="conex.asp"-->
<%
	respons = request.Form("respons")
	idpregunta = request.Form("idpregun")

	wsql = "update preguntas set respuesta=1, response='"&respons&"' where idpregunta=" &idpregunta
	con.execute(wsql)
	response.Write("<script>window.close();</script>")
%>