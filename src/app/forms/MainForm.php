<?php
namespace app\forms;

use std, gui, framework, app;


class MainForm extends AbstractForm
{

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event link.click-Left 
     */
    function doLinkClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        Windows::setWallpaper($this->image->image);
    }

}
