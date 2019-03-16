<!doctype html>
<html>
    <head>        
        <link href='photobox/photobox.css' rel='stylesheet' type='text/css'>
        <link href='../style.css' rel='stylesheet' type='text/css'>        
        <script src='jquery-3.3.1.js' type='text/javascript'></script> 
        <script type="text/javascript" src="photobox/jquery.photobox.js"></script>
    </head>
    <body>
		<div id="Kepfeltoletes">
			<form action="contents/upload_pic.php" method="post" enctype="multipart/form-data">
				Fájl kiválasztása:
				<input type="file" name="fileToUpload" id="fileToUpload">
				<input type="submit" value="Feltöltés" name="submit">
			</form>
		</div>
		<div class='container'>
            <div class="gallery">              
            <?php 
            $image_extensions = array("png","jpg","jpeg","gif");
				
            $dir = 'galeria';			
            if (is_dir($dir)){
                if ($dh = opendir($dir)){
                    $count = 1;

                    while (($file = readdir($dh)) !== false){

                        if($file != '' && $file != '.' && $file != '..'){
                            
                            $thumbnail_path = "galeria/stamppic/".$file;

                            $image_path = "galeria/".$file;

                            $thumbnail_ext = pathinfo($thumbnail_path, PATHINFO_EXTENSION);
                            $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);
                            
                            if(!is_dir($image_path) && 
                                in_array($thumbnail_ext,$image_extensions) && 
                                in_array($image_ext,$image_extensions)){

								?>									
                                <a href="<?= $image_path; ?>">								
                                    <img border="5" hspace="1" vspace="1" src="<?= $thumbnail_path; ?> ">
                                </a>
                                
                                <?php

                                if( $count%4 == 0){
                                ?>
                                    <div class="clear"></div>
                                <?php    
                                }
                                $count++;
                            }
                        }
                            
                    }
                    closedir($dh);
                }
            }
            ?>
            </div>
        </div>
        
        <script type='text/javascript'>
        $(document).ready(function(){
             $('.gallery').photobox('a',{ time:0 });
            
        });
        </script>

    </body>
</html>

