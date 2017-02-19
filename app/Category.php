<?php
namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
/*
namespace App;
use Illuminate\Database\Eloquent\Model;*/
/**
 * Model item ads
 */
class Category extends Model
{
  /**
   * Table database
   */
  protected $table = 'category';
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name','description'
  ];
}