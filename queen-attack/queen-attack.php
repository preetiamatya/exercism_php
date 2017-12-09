<?php

function placeQueen($posX, $posY)
{
	if (checkRankandFile($posX, $posY) == true && checkValidBoard($posX, $posY) == true)
	{
		return checkValidpos($posX, $posY);
	}
}

function canAttack($posW, $posB)
{
	if (checkHorizontal($posW, $posB) == true || checkDiagonal($posW, $posB) == true)
	{
		return true;
	}

	return false;
}

function checkHorizontal($posW, $posB)
{
	if ($posW[0] == $posB[0] || $posW[1] == $posB[1])
	{
		return true;
	}

	return false;
}

function checkDiagonal($posW, $posB)
{
	/*Logic: if difference between two rows or columns are equal then result is diagonal*/
	$xdiff = abs($posW[0] - $posB[0]);
	$ydiff = abs($posW[1] - $posB[1]);
	if ($xdiff == $ydiff)
	{
		return true;
	}

	return false;
}

function checkRankandFile($posX, $posY)
{
	if ($posX < 0 || $posY < 0)
	{
		throw new InvalidArgumentException("The rank and file numbers must be positive.");
	}

	return true;
}

function checkValidBoard($posX, $posY)
{
	if ($posX > 7 || $posY > 7)
	{
		throw new InvalidArgumentException("The position must be on a standard size chess board.");
	}

	return true;
}

function checkValidpos($posX, $posY)
{
	if (($posX > 0 && $posX < 8) && ($posY > 0 && $posY < 8))
	{
		return true;
	}

	return false;
}