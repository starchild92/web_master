<!--#include file="conex.asp"-->
<%
	accion = request.QueryString("accion")
	idpregunta = request.QueryString("idpregunta")
	login = session("login")
	
	if accion = "marcarleido" then
		wsql = "update preguntas set respuesta=1 where idpregunta=" &idpregunta
		con.execute(wsql)
		response.Write("<script>window.alert('El mensaje se marco como leido.');</script>")
		response.Redirect("index.asp?pag=preguntas")
	end if
	if accion = "eliminarmsj" then
	wsql = "delete from preguntas where idpregunta=" &idpregunta
		con.execute(wsql)
		response.Write("<script>window.alert('El mensaje sera ELIMINADO.');</script>")
		response.Redirect("index.asp?pag=preguntas")
	end if
	if accion = "marcartodoleido" then
		wsql = "update preguntas set respuesta=1 where idvendedor=" &login
		con.execute(wsql)
		response.Write("<script>window.alert('Se han marcado TODOS como leido.');</script>")
		response.Redirect("index.asp?pag=preguntas")
	end if
	if accion = "marcartodonoleido" then
		wsql = "update preguntas set respuesta=0 where idvendedor=" &login
		con.execute(wsql)
		response.Write("<script>window.alert('Se han marcado TODO como NO leido.');</script>")
		response.Redirect("index.asp?pag=preguntas")
	end if
	if accion = "marcarnoleido" then
		wsql = "update preguntas set respuesta=0 where idpregunta=" &idpregunta
		con.execute(wsql)
		response.Write("<script>window.alert('El mensaje se marco como NO leido.');</script>")
		response.Redirect("index.asp?pag=preguntas")
	end if
	if accion = "eliminartodos" then
		wsql = "delete from preguntas where idvendedor=" &login
		response.Write("<script>window.alert('Se eliminaran todos los mensajes.');</script>")
		con.execute(wsql)
		response.Redirect("index.asp?pag=preguntas")
	end if
%>