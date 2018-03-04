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
    public $userName= guest;
    public $password= password;
    public $photo = "https://www.summitpost.org/images/large/886509.gif";


    function getUserName(){
       return 'userName';
    }
    function setUserName($user){
        return this.$userName = $user;
    }
    function setPhoto($link){
        this.$photo =  $link;
    }
    function getPhoto(){
        return 'photo';
    }

    // COMPARES A STRING ARG WITH USER'S PASSWORD AND RETURNS A BOOL VALUE


}
?>