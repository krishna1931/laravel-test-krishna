<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
   /*  public function menuitems()
    {
        return $this->hasMany('App\Models\MenuItem', 'parent_id');
    }
 */
    /* public function children()
    {
        return $this->hasMany('App\Models\MenuItem', 'parent_id')->with('menuitems');
    }
 */
    public function menuitems()
{
    return $this->hasMany('App\Models\MenuItem', 'parent_id', 'id');
}

public function children()
{
    return $this->menuitems()->with('children');
}
}
