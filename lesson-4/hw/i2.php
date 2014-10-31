<?

interface Lockable
{

/**
* @return boolean
*/
function isLocked();

/**
* @param boolean $is_locked
*/
function lockUnlock();

}

class A
{
    public $is_locked = false;
    public function __construct()
    {
            echo "class A";
    }

    /**
     * @return boolean
     */
    public function checkLock()
    {
        return $this->is_locked;
    }

    /**
     * @param boolean $is_locked
     */
    public function lockUnlock($is_locked)
    {
        $this->is_locked = !$is_locked;
    }
}

$a = new A;
