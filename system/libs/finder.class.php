<?

/*
 * Class: find
 * Description:
 * This class lets you find files on your server.
 * For security reasons, it only find files from the scripts main folder
 * and sub folders.
 * By: Dan From AKA stoned_bush
 * Mail: dan.from@gmail.com
 */


class finder {

    private $files, $steder, $filer, $fil, $tal;

    public function __construct() {
        $this->initialize();
    }

    private function initialize() {
        $this->files = array();
        $this->steder = array();
        $this->filer = array();
        $this->fil = '[star]';
        $this->tal = 0;
    }

    private function clear() {
        $this->initialize();
    }

    private function openMappe($mappe){
        $dir = $mappe;
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ($this->fil == "[star]" AND $file != ".." AND $file != "."){
                        $this->steder[$this->tal] = $mappe;
                        $this->filer[$this->tal] = $file;
                        $this->tal = $this->tal+1;
                        $this->files[] = $mappe.'/'.$file;
                        $this->openMappe($mappe.'/'.$file);
                    } else {
                        if (preg_match('/'.$this->fil.'$/', $file) >= 1) {
                            $this->steder[$this->tal] = $mappe;
                            $this->filer[$this->tal] = $file;
                            $this->tal = $this->tal+1;
                            $this->files[] = $mappe.'/'.$file;
                            $this->openMappe($mappe.'/'.$file);
                        } else if ($file != ".." AND $file != "." AND is_dir($mappe.'/'.$file)){
                            $this->openMappe($mappe.'/'.$file);
                        }
                    }
                }
                closedir($dh);
            }
        }
    }

    /**
     *
     * @param filter $fil
     * @param dst directory $mappe
     * @return finder
     */
    public function find($fil, $mappe, $clear = true){
        if ($clear) {
            $this->clear();
        }

        $this->fil = $fil;
        $this->openMappe($mappe);

        return $this;
    }


    public function ex(){
        return $this->steder;
    }

    public function ex2(){
        return $this->filer;
    }

    public function files() {
        return $this->files;
    }

}