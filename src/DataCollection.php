<?php

namespace Stijlgenoten\DataCollection;

class DataCollection
{
	public static function Keys()
	{
		return  collect(static::RegisterData())->keys()->implode(',');
	}

	public static function KeysBy($keyname)
	{
		return  collect(static::RegisterData())->keyBy($keyname)->Keys();
	}

	public static function Values()
	{
		return  collect(static::RegisterData())->values()->implode(',');
	}

	public static function All()
	{
		return  collect(static::RegisterData());
	} 

	public static function Get()
	{
		return static::RegisterData();
	}

	public static function toJson()
	{
		return collect(static::RegisterData())->toJson();
	}

	public static function toArray()
	{
		return collect(static::RegisterData())->toArray();
	}

	public static function RegisterData()
	{
		return [];
	}

	public static function Where($key, $value){
		return collect( static::RegisterData() )->where($key, $value);
	}
}


 ?>