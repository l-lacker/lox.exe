<?php
namespace lox\modules;

use bundle\windows\Windows;
use std, gui, framework, lox;
use php\gui\framework\ScriptEvent; 
use php\gui\UXApplication;
use php\lang\Thread;
use php\lang\System;
use php\io\Stream;


class MainModule extends AbstractModule
{

    /**
     * @event timer.action 
     */
    function doTimerAction(ScriptEvent $e = null)
    {    
        
    }

    /**
     * @event onStart.action 
     */
    function doOnStartAction(ScriptEvent $e = null)
    {    
        
    }

    /**
     * @event internetCheck.action 
     */
    function doInternetCheckAction(ScriptEvent $e = null)
    {    
        
    }

    /**
     * @event httpChecker.online 
     */
    function doHttpCheckerOnline(ScriptEvent $e = null)
    {    
        
    }

    /**
     * @event httpChecker.offline 
     */
    function doHttpCheckerOffline(ScriptEvent $e = null)
    {    
        
    }

    /**
     * @event storeBalSync.action 
     */
    function doStoreBalSyncAction(ScriptEvent $e = null)
    {    
        
    }

    /**
     * @event script.action 
     */
    function doScriptAction(ScriptEvent $e = null)
    {    
        
    }

    /**
     * @event scriptAlt.action 
     */
    function doScriptAltAction(ScriptEvent $e = null)
    {    
        
    }



}
