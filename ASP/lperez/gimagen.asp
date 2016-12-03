
<% 
option explicit
Response.Expires = -1
Server.ScriptTimeout = 600
dim codigo
dim cod
cod=request.QueryString("cod")
response.Write("EL codigo es :" & cod)
%>
<!-- #include file="freeaspupload.asp" -->
<%
' ****************************************************
' Cambiar el valor de la siguiente variable
' para indicar el directorio de destino.
' El directorio indicado debe tener permisos de escritura
' de caso contrario el script fallará mostrando un error.
  Dim uploadsDirVar
  uploadsDirVar = "C:\inetpub\wwwroot\lperez\ima\prod" 
' ****************************************************

function SaveFiles
    Dim Upload, fileName, fileSize, ks, i, fileKey, resumen
    Set Upload = New FreeASPUpload
    Upload.Save(uploadsDirVar)
	' If something fails inside the script, but the exception is handled
	If Err.Number <> 0 then Exit function
    SaveFiles = ""
    ks = Upload.UploadedFiles.keys
    if (UBound(ks) <> -1) then
		resumen = "<B>Archivos subidos:</B> "
        for each fileKey in Upload.UploadedFiles.keys
			resumen = resumen & Upload.UploadedFiles(fileKey).FileName & " (" & Upload.UploadedFiles(fileKey).Length & "B) "
        next
    else
		resumen = "El nombre del archivo especificado en el formulario no es valido en el sistema."
    end if
	'comentar la siguiente linea si no se desea mostrar el resumen
'	SaveFiles = resumen
end function
%>

<%
	response.write SaveFiles()
	response.write("<script>window.opener.location.reload();window.close();</script>")
%>
