<?php 

abstract class Digger {
    public final function dig($hole_spec=false) {
        if($this->survey($hole_spec)) {
            $this->private_dig($hole_spec);
            return true;
        }
        return false;
    }

    protected abstract function private_dig($hole_spec);

    private function survey($hole_spec) {
        echo "surveying the hole<br>";
        if($hole_spec) {
            return true;
        }
        return false;
    }
}

class Shovel extends Digger {
    protected function private_dig($hs) {
        echo "digging with a shovel<br>done but it took 16 hours!<br>";
    }
}

class JackHammer extends Digger {
    protected function private_dig($hs) {
        echo "digging with jackhammer<br>done, did it in 2 hours!<br>";
    }
}


$d = new Digger();
echo "shouldn't get here!!!<br>";

$job_spec = $_GET['size'];

class DiggerFactory {
    $cache = [];

    function getDigger($spec) {
        if($spec < 5) {
            if(isset($this->cache['shovel'])) {
                return $this->cache['shovel'];
            } else {
                $this->cache['shovel'] = new Shovel();
                return $this->cache['shovel'];
            }
        } else {
            $d = new JackHammer();
        }
        return $d;
    }
}

$df = new DiggerFactory();
$d = $df->getDigger($job_spec);

if($d->dig($job_spec)) {
    echo "the hole is done<br>";
} else {
    echo "we need a spec<br>";
}


?>