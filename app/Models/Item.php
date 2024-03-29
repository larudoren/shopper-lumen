<?php

/**
* Created by SublimeText.
* User: Hilarius
*/

namespace App\Models;

class Item extends Model
{
	/**
	* @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	*/

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	/**
	* @param $query
	* @param $categoryId
	* @return mixed
	*/

	public function scopeOfCategory($query, $categoryId)
	{
		return $query->where("category_id", $categoryId);
	}

	/**
	* @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	*/

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}