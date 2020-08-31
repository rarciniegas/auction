<?php namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model{
  protected $table = 'item';
  protected $allowedFields = ['item_name', 'description', 'start_bid', 'reserve', 'ends_in', 'get_it_now', 'returnable', 'category', 'user_name', 'item_condition'];
  protected $beforeInsert = ['beforeInsert'];
  protected $beforeUpdate = ['beforeUpdate'];

  protected function beforeInsert(array $data){
    $data['data']['created_at'] = date('Y-m-d H:i:s');
    return $data;
  }

  protected function beforeUpdate(array $data){
    $data['data']['updated_at'] = date('Y-m-d H:i:s');
    return $data;
  }


}