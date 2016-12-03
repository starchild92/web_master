<?php session_start();?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ejemplo de subida de ficheros</title>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/base/jquery-ui.css"
        id="theme">
    <link rel="stylesheet" href="upload/js/jquery.fileupload-ui.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js"></script>
    <script src="upload/js/jquery.fileupload.js"></script>
    <script src="upload/js/jquery.fileupload-ui.js"></script>
    <style>
        body
        {
            font-family: 'Roboto', sans-serif;
            font-size: 13px;
            margin: 0;
            padding: 10px;
			vertical-align:middle;
			height:150px;
        }
    </style>
</head>
<body>
    <table align="center" id="files">
        <tr>
            <td colspan="2">Subir Fotos !!
            </td>
        </tr>
    </table>
    <?php 
	$id=$_GET['id'];
	$num=$_GET['num'];
	//echo $id." ".$num;
	
	 ?>
<form id="file_upload" action="upload.php?id=<?php echo $id ?>&num=<?php echo $num ?><?php if(isset($_GET['type'])){ echo "&type";} ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" multiple>
    <button>
        Upload</button>
    <div>
        <img src="upload/img/upload.png" alt="Subir imagen"><br>
        Subir Imagen
    </div>
    </form>

<script>
        /*global $ */
        $(function () {
            $('#file_upload').fileUploadUI({
                uploadTable: $('#files'),
                downloadTable: $('#files'),
                buildUploadRow: function (files, index) {
                    return $('<tr><td>' + files[index].name + '<\/td>' +
                    '<td class="file_upload_progress"><div><\/div><\/td>' +
                    '<td class="file_upload_cancel">' +
                    '<button class="ui-state-default ui-corner-all" title="Cancel">' +
                    '<span class="ui-icon ui-icon-cancel">Cancel<\/span>' +
                    '<\/button><\/td><\/tr>');
                },
                buildDownloadRow: function (file) {
                    return $('<tr><td nowrap align="right" class="texto" style="padding-top: 10px;"><b>Imagen:</b><\/td>' +
                                            '<td>' + file.name + '</td>' +
                                            '<\/tr></table>');
                }
            });
        });
</script>
</body>
</html>
