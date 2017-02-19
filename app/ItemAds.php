<?php
namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

/*namespace App;
use Illuminate\Database\Eloquent\Model;*/
/**
 * Model item ads
 */
class ItemAds extends Model
{
  /**
   * Table database
   */
  protected $table = 'item_ads';
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'user_id','category_id','title','description','picture','price','city',
  ];
  /**
   * One to one relationships
   */
  public function category()
  {
    return $this->hasOne('App\Category');
  }
}