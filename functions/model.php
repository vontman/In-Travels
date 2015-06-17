<?php
/**
 * Created by PhpStorm.
 * User: minivont
 * Date: 09/05/15
 * Time: 04:15 م
 */
class model {
    var $link;
    function __construct(){
        @session_start();
        $this->connect();
    }
    function connect(){
        try {
            //$this->link = mysqli_connect('localhost', 'root', '', 'in-travel');
            $this->link = mysqli_connect('mysql1.000webhost.com', 'a4060068_vontman', 'ohshit12', 'a4060068_intravl');
        }catch (mysqli_sql_exception $ex){
            die($ex);
        }
    }
    function check_login($username,$password){
        if($username == null || $password == null)return false;
        $username = htmlentities($username);
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
        $sql = mysqli_query($this->link, $query);
        if(mysqli_affected_rows($this->link) > 0){
            while($temp = mysqli_fetch_array($sql)){
                $_SESSION['user'][] = $temp;
            }
            $_SESSION['user'] = $_SESSION['user'][0];
            $_SESSION['logged_in'] = true;
            unset($_SESSION['user'][0]);
            return true;
        }
        return false;
    }
    function signup($user){
        $valid = true;
        $user['username'] = htmlentities($user['username']);
        $keys = implode(',',array_keys($user));
        $values = implode("','",$user);
        $query = "SELECT id FROM users WHERE username = '".$user['username']."'";
        $sql = mysqli_query($this->link,$query);
        if(mysqli_affected_rows($this->link) > 0){
            $_SESSION['error_signup'][] = "Username already in use !";
            $valid = false;
        }
        $query = "SELECT id FROM users WHERE email = '".$user['email']."'";
        $sql = mysqli_query($this->link,$query);
        if(mysqli_affected_rows($this->link) > 0){
            $_SESSION['error_signup'][] = "Email already in use !";
            $valid = false;
        }
        if(!$valid)return false;
        $query =  "INSERT INTO users ($keys) VALUES ('$values')";
        $sql = mysqli_query($this->link,$query);
        if(mysqli_affected_rows($this->link) > 0)return mysqli_insert_id($this->link);
        return false;
    }
    function add_ticket($ticket){
        $ticket['user_id'] = $_SESSION['user']['id'];
        $keys = implode(',',array_keys($ticket));
        $values = implode("','",$ticket);
        if(mysqli_affected_rows($this->link) > 0)return false;
        $query =  "INSERT INTO tickets ($keys) VALUES ('$values')";
        $sql = mysqli_query($this->link,$query);
        if(mysqli_affected_rows($this->link) > 0)return mysqli_insert_id($this->link);
        return false;
    }
    function view_tickets(){
        $ret = array();
        $query = "SELECT * FROM tickets WHERE user_id = '".$_SESSION['user']['id']."'";
        $sql = mysqli_query($this->link, $query);
        if(mysqli_affected_rows($this->link) == -1)return false;
        while($temp = mysqli_fetch_array($sql)){
            $ret[] = $temp;
        }
        return $ret;

    }
    function check_user($id){
        if($id == null)return false;
        $query = "SELECT id FROM users WHERE id = '".$_SESSION['user']['id']."'";
        $sql = mysqli_query($this->link,$query);
        if(mysqli_affected_rows($this->link) <= 0)return false;
        if($id != $_SESSION['user']['id'])return false;
        return true;
    }
    function delete_ticket($ticket_id){
        $query = "SELECT user_id FROM tickets WHERE id = '".$ticket_id."'";
        $sql = mysqli_query($this->link,$query);
        if(mysqli_affected_rows($this->link) > 0){
            while( $temp = mysqli_fetch_array($sql) ){
                $user_id = $temp['user_id'];
            }
            if( !$this->check_user($user_id) ) return false;

            $query = "DELETE FROM tickets WHERE id = '".$ticket_id."'";
            $sql = mysqli_query($this->link,$query);
            return mysqli_affected_rows($this->link) > 0;
        }else return false;
    }
    function get_govs(){
        $query = "SELECT * FROM govs ";
        $sql = mysqli_query($this->link, $query);
        $res = array();
        while( $row = $sql->fetch_assoc() ){
            $res[] = $row;
        }
        return $res;
    }
}
