<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
Use Exception;

class Hobby extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     *
     * not require
     */
    protected $table = 'book';

    //get all hobby for the login user
    public static function getListOfHobby($id){

        try{
                $sql_query = "SELECT * FROM hobby h
                left JOIN user_hobby uh on(uh.user_id = ?)";//Auth::id;
                $params = array();
                $params[]= $id;
                $res = DB::select($sql_query,$params);
                return $res;
        }
        catch (Exception $e) {
            return $e->getMessage();
        }

    }

}
