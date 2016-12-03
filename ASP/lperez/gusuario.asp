<!--#include file="conex.asp"-->
<%
	pag = request.QueryString("pag")
	idlogin = session("login")
	if pag = "editarperfil" then
		login = Request.Form("login")
		password1 = Request.Form("password1")
		nombre = Request.Form("nombre")
		telefono = Request.Form("telefono")
		correo = Request.Form("correo")
		direccion = Request.Form("direccion")
		
		wsql = "update usuarios set login='"&login&"',clave='"&password1&"',nombre='"&nombre&"',telefono='"&telefono&"',correo='"&correo&"',direccion='"&direccion&"' where idusuario =" &idlogin
		con.execute(wsql)
		response.Redirect("index.asp")
		
	else
	login = Request.Form("login")
	password1 = Request.Form("password1")
	nombre = Request.Form("nombre")
	telefono = Request.Form("telefono")
	correo = Request.Form("correo")
	direccion = Request.Form("direccion")
	
	'validar que exista el login'
	wsql = "select * from usuarios where login='"&login&"'"
	'response.Write(wsql) siver para revisar si voy bien'
	
	set rs = con.execute(wsql)
		if rs.eof = false then
			'ya existe'
			session("men")="Usuario ya registrado"
		else
		tipo = "v"
		fecha = date
		estatus = "a"
			'hay que insertar'
			response.Write("No existe el login, hay que insertar.")
			wsql = "insert into usuarios (login,clave,nombre,telefono,correo,fechaing,tipo,estatus,direccion) values ('"&login&"','"&password1&"','"&nombre&"','"&telefono&"','"&correo&"','"&fecha&"','"&tipo&"','"&estatus&"','"&direccion&"')"
			'response.Write(wsql)'
			con.execute(wsql)
			session("men")="Gracias por Registrarse."
		end if
		response.Redirect("index.asp")
	end if
		
%>