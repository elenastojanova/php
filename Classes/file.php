<?php
class File{
	private $fp;
	private $filename;
	private $fread;
	private $write;
	private $delete;

	 public function __construct($filename){
        $this->filename = $filename;
    }

	public function createFile(){
		 $this-> fp = fopen($this->filename, "a+");
	}

	public function writeFile($write) {
        fwrite($this->fp, $write);
    }

    public function read($filename){
    	$this-> fread = file_get_contents($filename);
    }

    public function delete(){
        unlink($this->filename);
    }

    public function __destruct(){
		echo "destructor";
	}
}


$f = new File('text.txt');
$f->createFile();

$f->writeFile('Blah Blah Blah');
echo $f->read('text.txt');

$f->writeFile('Some more text!');
echo $f->read('text.txt');
// $f->delete();
print_r($f);

unset($f);
?>