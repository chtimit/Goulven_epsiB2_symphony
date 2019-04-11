<?php

	namespace App\Entity;

	class Type
	{
		const TYPE_NORMAL = 0;
		const TYPE_FIRE = 1;
		const TYPE_PLANT = 2;
		const TYPE_WATER = 3;

		public function isStrongAgainst($typeAtk, $typePkm)
		{
			if ($typeAtk == 0 || $typePkm == 0)
			{
				return false;
			}
			else if ($typeAtk == 3)
			{
				if ($typePkm == 1)
				{
					return true;
				}
			}
			else if ($typeAtk == 1)
			{
				if ($typePkm == 2)
				{
					return true;
				}
			}
			else if ($typeAtk == 2)
			{
				if ($typePkm == 3)
				{
					return true;
				}
			}
			return false;
		}

		public function isWeakAgainst($typeAtk, $typePkm)
		{
			if ($typeAtk == 0 || $typePkm == 0)
			{
				return false;
			}
			else if ($typeAtk == 3)
			{
				if ($typePkm == 2)
				{
					return true;
				}
			}
			else if ($typeAtk == 1)
			{
				if ($typePkm == 3)
				{
					return true;
				}
			}
			else if ($typeAtk == 2)
			{
				if ($typePkm == 1)
				{
					return true;
				}
			}
			return false;
		}

	}

?>