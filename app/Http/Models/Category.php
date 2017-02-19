<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



/**

 * Model categori ads

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

    'name'

  ];



}