<?php 
namespace App\Repositories;
use App\Repositories\ModelInterface;
use App\Models\User;

class ReUser implements ModelInterface {
    
    public function all(){
        return User::all();
    }

    public function get($id) {

    }

    public function store(array $data){

    }

    public function update($id,array $data){

    }

    public function delete(){

    }

}

?>