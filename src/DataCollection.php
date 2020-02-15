<?php

namespace Stijlgenoten\DataCollection;

class DataCollection
{
	public static function Keys()
	{
		return  collect(static::RegisterData())->keys()->implode(',');
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
}


 ?>