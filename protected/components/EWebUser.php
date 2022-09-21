<?php
class EWebUser extends CWebUser{
 
    protected $_model;
 
    public  function isAdmin(){
        $user = $this->loadUser();
        if ($user)
           return $user->level==LevelLookUp::ADMIN;
        return false;
    }
 
   public  function isReviewer(){
        $user = $this->loadUser();
        if ($user)
           return $user->level==LevelLookUp::REVIEWER;
	   
        return false;
    }
	
   public  function isEditor(){
        $user = $this->loadUser();
        if ($user)
           return $user->level==LevelLookUp::EDITOR;
	   
        return false;
    }
	
   public function isAuthor(){
        $user = $this->loadUser();
        if ($user)
           return $user->level==LevelLookUp::AUTHOR;
        return false;
    }

	


	// saving logged users into a state

	
    // Load user model.
    protected function loadUser()
    {
        if ( $this->_model === null ) {
                $this->_model =Users::model()->findByPk( $this->id );
        }
        return $this->_model;
    }

public function getLevel()
    {
        $user=$this->loadUser();
        if($user)
            return $user->level;
        return 100;
    }
	public function getAkses()
    {
        $user=$this->loadUser();
        if($user)
            return $user->levels;
        return 100;
    }
}
?>