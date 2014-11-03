<?php

interface LockableInterface
{

    function isLocked();

    function lockUnlock();

}