<?php


namespace App\Tools;


class Image
{
    private $path_to_save = 'uploads/';
    private $types = ['image/gif', 'image/png', 'image/jpeg'];
    private $size   = 1024000 ;
    private $path_to_image = '';

    public function loadImage()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {

            $this->checkImageTypes();
            if ($this->checkImageTypes() == false)
            {
                return false;
            }
            $this->checkImageSize();


            $file = $_FILES['image']['tmp_name'];

            $sourceProperties = getimagesize($file);

            $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $fileNewName = time() .'.'. $ext;
            $this->path_to_image = '/' . $this->path_to_save. $fileNewName;

            $imageType = $sourceProperties[2];

            switch ($imageType) {
                case IMAGETYPE_PNG:
                    $imageResourceId = imagecreatefrompng($file);
                    $targetLayer = $this->imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                    imagepng($targetLayer,$this->path_to_save. $fileNewName);
                    break;
                case IMAGETYPE_GIF:
                    $imageResourceId = imagecreatefromgif($file);
                    $targetLayer = $this->imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                    imagegif($targetLayer,$this->path_to_save. $fileNewName);
                    break;
                case IMAGETYPE_JPEG:
                    $imageResourceId = imagecreatefromjpeg($file);
                    $targetLayer = $this->imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                    imagejpeg($targetLayer,$this->path_to_save. $fileNewName);
                    break;
                default:
                    echo "Неверний тип файла";
                    exit;
                    break;
            }
//            move_uploaded_file($file, $this->path_to_save. $fileNewName. ".". $ext);
        }
    }


    public function getPathToImage() : string
    {
        return $this->path_to_image;
    }


    public function imageResize($imageResourceId,$width,$height) {
        $targetWidth  = 240;
        $targetHeight = 320;
        $targetLayer  = imagecreatetruecolor($targetWidth,$targetHeight);
        imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);
        return $targetLayer;
    }



    public function checkImageTypes()
    {
        if(empty($_FILES['image']['type'])){
            return false;
        }
        elseif (!in_array($_FILES['image']['type'], $this->types)){
            die('Запрещённый тип файла.');
        }

        return true;

    }


    public function checkImageSize()
    {
        if ($_FILES['image']['size'] > $this->size)
            die('Слишком большой размер файла.');
    }

    public function getTmpName() : string
    {
        return $_FILES['image']['tmp_name'];
    }

    public function getImageType() : string
    {
        return $_FILES['image']['type'];
    }


}






























