<?php
/**
 * Created by PhpStorm.
 * User: juditholiveros
 * Date: 2/26/18
 * Time: 9:21 PM
 */
class User{
    public $name = "Guest";
    public $Playlist;
    private $userName= guest;
    private $password= password;
    private $photo = "https://www.summitpost.org/images/large/886509.gif";


    function getUserName(){
       return $userName;
    }

    // COMPARES A STRING ARG WITH USER'S PASSWORD AND RETURNS A BOOL VALUE
    function isCorrect($pWord){
        return $pWord == $password;
    }

}
?>