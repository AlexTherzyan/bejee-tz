<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 11.08.2018
 * Time: 11:28
 */

namespace App\Models;

use function config\debug;
use Core\Model;

class AppModel extends Model
{



    public  function getElements($query = '', $sort = null)
    {

        if (!$sort){
            $sort  = 'ORDER BY id DESC';
        }

        return \R::getAll('SELECT * FROM ' . $query . $this->table . ' ' . $sort);
    }


    public function getElement($value_name, $value){
        return \R::findOne($this->table, " {$value_name} = ?", [ $value ]);

    }


    public function count()
    {
        return \R::count( $this->table) ;
    }



    public function create($data)
    {
        $table   = \R::dispense($this->table);
        $columns = \R::getColumns($this->table);

        foreach ($data as $key => $item){

            if (array_key_exists($key, $columns)){
                $table->{$key} = $item;
            }
        }
        \R::store( $table );
    }


    public function update($id,$data = [])
    {
        $table = \R::load( $this->table, $id );
        $columns = \R::getColumns($this->table);

        foreach ($data as $key => $item){

            if (array_key_exists($key, $columns)){
                $table->{$key} = $item;
            }
        }
        \R::store( $table );

    }


    public function delete($id)
    {
        $table = \R::load( $this->table, $id );
        \R::trash( $table );

    }

}













