<?php

function translate($word)
{
	$suffix = "ay";
	$wordarr = explode(" ", $word);
	$arrpigtransform = [];
	for ($a = 0; $a < sizeof($wordarr); $a++)
	{
		$pig_cornercasearr = array(
			'thr',
			'th',
			'sch',
			'squ',
			'qu',
			'ch'
		);
		$pig_vowelarr = array(
			'a',
			'e',
			'i',
			'o',
			'u',
			'xr',
			'yt'
		);
		$translateword = pigTransformtext($wordarr[$a], $pig_cornercasearr, $type = 0);
		if (!empty($translateword))
		{
			array_push($arrpigtransform, $translateword . $suffix);
		}
		elseif (!empty($translatevowel = pigTransformtext($wordarr[$a], $pig_vowelarr, $type = 1)))
		{
			array_push($arrpigtransform, $translatevowel . $suffix);
		}
		else
		{
			$pigtransform = pigTransform($wordarr[$a]);
			array_push($arrpigtransform, $pigtransform . $suffix);
		}
	}

	return implode(" ", $arrpigtransform);
}

function pigTransform($wordarr)
{
	$prefix = mb_substr($wordarr, 0, 1);
	$result = mb_substr($wordarr, 1, strlen($wordarr)) . $prefix;
	return $result;
}

function pigTransformtext($wordarr, $cases, $type)
{
	for ($i = 0; $i < sizeof($cases); $i++)
	{
		$length = strlen($cases[$i]);
		$prefix = mb_substr($wordarr, 0, $length);
		if ($cases[$i] == $prefix && $type == 0)
		{
			$result = mb_substr($wordarr, $length, strlen($wordarr)) . $prefix;
			return $result;
		}
		elseif ($cases[$i] == $prefix && $type == 1)
		{
			return $wordarr;
		}
	}

	return false;
}

