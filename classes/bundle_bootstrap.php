<?php

namespace bootstrap{
    
    /* Prevent Direct Access */
    defined('ADAPT_STARTED') or die;
    
    class bundle_bootstrap extends \adapt\bundle{
        
        public function __construct($data){
            parent::__construct('bootstrap', $data);
        }
        
        public function boot(){
            if (parent::boot()){
                
                $this->dom->head->add(new html_link(array('type' => 'text/css', 'rel' => 'stylesheet', 'href' => "/adapt/bootstrap/bootstrap-{$this->version}/static/css/bootstrap.min.css")));
                $this->dom->head->add(new html_link(array('type' => 'text/css', 'rel' => 'stylesheet', 'href' => "/adapt/bootstrap/bootstrap-{$this->version}/static/css/bootstrap-theme.min.css")));
                $this->dom->head->add(new html_script(array('type' => 'text/javascript', 'src' => "/adapt/bootstrap/bootstrap-{$this->version}/static/js/bootstrap.min.js")));
                return true;
            }
            
            return false;
        }
        
    }
    
    
}

?>