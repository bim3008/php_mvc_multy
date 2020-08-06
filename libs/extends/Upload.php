<?php
    require_once SCRIPS_PATH . "PhpThumb" . DS ."ThumbLib.inc.php" ;
class Upload{
    
    public function uploadFile($fileObj,$folderUpload,$opption = null)
    {
        if($opption == null){
            if($fileObj['tmp_name'] != null )
            {
                $uploadDir      = UPLOAD_PATH . $folderUpload . DS  ; 
                $fileName       =  $this->randomString(8). '.'.pathinfo($fileObj['name'],PATHINFO_EXTENSION) ;  ;
                @copy($fileObj['tmp_name'], $uploadDir . $fileName ) ; 
                $thumb = PhpThumbFactory::create($uploadDir . $fileName);
                $thumb ->adaptiveResize(2022,1120) ;
                $thumb -> save( $uploadDir . '2022x1120-'. $fileName ) ;
            }
        }
        
        return $fileName ;
    }

    private function randomString($length){
	
		$arrCharacter = array_merge(range('a','z'),range(0,9));
		$arrCharacter = implode('',$arrCharacter);
		$arrCharacter = str_shuffle($arrCharacter);
	
		$result		= substr($arrCharacter, 0, $length);
		return $result;
    }
    

    public function removeFile($folderUpload,$fileName)
    {
            $fileName = UPLOAD_PATH . $folderUpload . DS . $fileName  ;
            @unlink($fileName) ;
    }
	
}