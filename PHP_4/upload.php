<?php 
		session_start();
        //directorio de almacén de imágenes
		$id=$_GET['id'];
		$num=$_GET['num'];
		if (!$_SESSION['num']){
			$_SESSION['num']=num;
		}
        //$uploaddir = 'img/uploads/';
		if(isset($_GET['type'])){
			$uploaddir = 'img/artists/';
		}else{
		   	$uploaddir = 'img/covers/';
		}
		$tmp_name = $_FILES['file']['tmp_name'];        
       
	    //nombre del fichero sin espacios en blanco
       	//$nombre_fichero_sin_espacios=str_replace(" ","",$_FILES['file']['name']); 
	   if(isset($_GET['type'])){
			$nombre_fichero_sin_espacios="Artg".$id.$num.".jpg";
		}else{
		   	$nombre_fichero_sin_espacios="fg".$id.$num.".jpg"; 
		}
	         
        //ruta completa del fichero
		$uploadfile = $uploaddir . $nombre_fichero_sin_espacios;               
        //nombre del fichero
		$file_name=$_FILES['file']['name'];

      
        //compruebo si existe el directorio y si no existe lo creo
        if(!is_dir($uploaddir)){ 
            @mkdir($uploaddir, 0700); 
        }
        
        while (file_exists($uploadfile)){
			$num++;
			if(isset($_GET['type'])){
				$nombre_fichero_sin_espacios="Artg".$id.$num.".jpg";
			}else{
				$nombre_fichero_sin_espacios="fg".$id.$num.".jpg"; 
			}      
        	//ruta completa del fichero
			$uploadfile = $uploaddir . $nombre_fichero_sin_espacios;               
        	//nombre del fichero
			$file_name=$_FILES['file']['name'];
		} 		
        //compruebo si existe el fichero y si existe le pongo _copia_ en el nombre
		if (file_exists($uploadfile)){
			
   			//$uploadfile = $uploaddir."_copia_".$nombre_fichero_sin_espacios;
			if(isset($_GET['type'])){
				$uploadfile = $uploaddir."Artg".$id.$num.".jpg";
				$file_name="Artg".$id.$num.".jpg";
			}else{
				$uploadfile = $uploaddir."fg".$id.$num.".jpg";
				$file_name="fg".$id.$num.".jpg";
			}
		} 

         move_uploaded_file($tmp_name,$uploadfile);
		 
		 //aquí empieza el código de creación del thumbnail
		 $fuente  = $uploadfile;
          $source=$fuente; // archivo de origen
		  if(isset($_GET['type'])){
				$dest="img/artists/"."Artp".$id.$num.".jpg"; // archivo de destino
          		$width_d=140; // ancho de salida
          		$height_d=150; // alto de salida
		  }else{
				$dest="img/covers/"."fp".$id.$num.".jpg"; // archivo de destino
				$width_d=250; // ancho de salida
				$height_d=250; // alto de salida
			}

           list($width_s, $height_s, $type, $attr) = getimagesize($source, $info2); // obtengo información del archivo
          $gd_s = imagecreatefromjpeg($source); // crea el recurso gd para el origen
          $gd_d = imagecreatetruecolor($width_d, $height_d); // crea el recurso gd para la salida

            imagecopyresampled($gd_d, $gd_s, 0, 0, 0, 0, $width_d, $height_d, $width_s, $height_s); // redimensiona
            imagejpeg($gd_d, $dest); // graba
        
        // Se liberan recursos
        imagedestroy($gd_s);
        imagedestroy($gd_d); 

		echo '{"name":"'.$num.'"}';				
?>

