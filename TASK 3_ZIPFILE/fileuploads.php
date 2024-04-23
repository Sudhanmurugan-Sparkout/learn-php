<?php  

if(isset($_POST["submit"])){
    
    $files = $_FILES["file"];

    $zip = new ZipArchive();
    $zipfiles = "zipfiles/files.zip";
    
    if($zip->open($zipfiles, ZipArchive::CREATE) === true) {

        for($i = 0; $i < count($files['name']); $i++) {
            $filename = $files['name'][$i];
            $fileTyp = $files['type'][$i];
            $fileTmpname = $files['tmp_name'][$i];
            $fileSize = $files['size'][$i];
            $fileErr = $files['error'][$i];

            $fileExp = explode(".", $filename);
            $filestrLow = strtolower(end($fileExp));
            $check = array("jpg", "jpeg", "png", "pdf", "dif", "gif");

            if(in_array($filestrLow, $check)){
                if($fileErr === 0){
                    if($fileSize < 1000000){ 
                        $filenewname = uniqid("", true) . "." . $filestrLow;
                        $fileupload = 'Fileuploads/' . $filenewname;
                        $zip->addFile($fileTmpname, $fileupload); 
                        echo "Your files have been submitted successfully...!"; 
                    } else {
                        echo "File is too big ";
                    }
                } else {
                    echo "The file has an error while uploading";
                }
            } else {
                echo "You didn't upload this type of file";
            }
        }

        
    } else {
        echo "Failed to create or open the zip file";
    }
}

?>
