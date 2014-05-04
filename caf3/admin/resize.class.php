<?php
	class resizeimage {
		public $type;//image type
		public $width;//image width
		public $height;//image height
		public $resize_width;
		public $resize_height;
		public $cut;//cut the image or not
		public $srcimg; //image source
		public $dstimg; //image after resize
		public $im; //tmp image
		public $quality; //image resize quality
		public $img_array=array('jpg','png','gif');

		function __construct($img,$wid,$hei,$c,$dstpath,$quality=100) {
			$this->srcimg = $img;
			$this->resize_height = $hei;
			$this->resize_width = $wid;
			$this->cut = $c;
			$this->quality = $quality;
			$this->type = $this->checkFileType($this->srcimg); //check image type
			if(!in_array($this->type,$this->img_array)){
				return '';
			}
			$this->initi_img();
			$this-> dst_img($dstpath);
			$this->width=imagesx($this->im);
			$this->height=imagesy($this->im);
			$this->newimg();
			imagedestroy($this->im);
		}

		function newimg(){
			$resize_ratio=($this->resize_width)/($this->resize_height); //ratio of resize image
			$ratio=($this->width)/($this->height); //ratio of source image
			if(($this->cut)=='1'){//should cut
				if(function_exists('imagepng')&&(str_replace('.', '', PHP_VERSION)>=512)){
					$quality=9;
				}
				if($ratio>=$resize_ratio){
					$newimg=imagecreatetruecolor($this->resize_width,$this->resize_height);
					imagecopyresampled($newimg,$this->im,0,0,0,0,$this->resize_width,$this->resize_height,(($this->height)*$resize_ratio),$this->height);
					imagejpeg($newimg,$this->dstimg,$this->quality);
				}
				if($ratio<$resize_ratio){
					$newimg=imagecreatetruecolor($this->resize_width,$this->resize_height);
					imagecopyresampled($newimg,$this->im,0,0,0,0,$this->resize_width,$this->resize_height,$this->width,(($this->width)*$resize_ratio));
					imagejpeg($newimg,$this->dstimg,$this->quality);
				} 
			}else{
				if($ratio>=$resize_ratio){
					$newimg=imagecreatetruecolor($this->resize_width, ($this->resize_width)/$ratio);
					imagecopyresampled($newimg, $this->im, 0, 0, 0, 0, $this->resize_width, ($this->resize_width)/$ratio, $this->width, $this->height);
					imagejpeg($newimg,$this->dstimg,$this->quality);
				}
				if($ratio<$resize_ratio){
					$newimg=imagecreatetruecolor(($this->resize_height)*$ratio,$this->resize_height);
					imagecopyresampled($newimg, $this->im, 0, 0, 0, 0, ($this->resize_height)*$ratio, $this->resize_height, $this->width, $this->height);
					imagejpeg($newimg,$this->dstimg,$quality);
				}
			}
		}

		function initi_img(){
			if($this->type=='jpg'){
				$this->im=imagecreatefromjpeg($this->srcimg);
			}
			if($this->type=='gif'){
				$this->im=imagecreatefromgif($this->srcimg);
			}
			if($this->tupe=='png'){
				$this->im=imagecreatefrompng($this->srcimg);
			}
		}

		function dst_img($dstpath){
			$full_length=strlen($this->srcimg);
			$type_length=strlen($this->type);
			$name_length=$full_length-$type_length;
			$name=substr($this->srcimg, 0,$name_length-1);
			$this->dstimg=$dstpath;
		}

		function checkFileType($filename){
			$file=fopen($filename,'rb');
			$bin=fread($file, 2);
			fclose($file);
			$strInfo = @unpack("c2chars",$bin);
			$typeCode=intval($strInfo['chars1'].$strInfo['chars2']);
			$fileType='';
			switch($typeCode){
				case 7790:
					$fileType='exe';
				break;
				case 7784:
					$fileType='midi';
				break;
				case 8297:
					$fileType='rar';
				break;
				case 255216:
					$fileType='jpg';
				break;
				case 7173:
					$fileType='gif';
				break;
				case 6677:
					$fileType='bmp';
				break;
				case 13780:
					$fileType='png';
				break;
				default:
					$fileType='unknown'.$typeCode;
				break;
			}

			if($strInfo['chars1']=='-1'&&$strInfo['chars2']=='-40'){
				return 'jpg';
			}
			if($strInfo['chars1']=='-119'&&$strInfo['chars2']=='80'){
				return 'png';
			}
			return $fileType;
		}  
	}

?>