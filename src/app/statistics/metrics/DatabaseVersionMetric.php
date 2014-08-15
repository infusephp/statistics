<?php

namespace app\statistics\metrics;

use infuse\Database;

class DatabaseVersionMetric extends AbstractStat
{
	function name()
	{
		return 'Database Version';
	}

	function granularity()
	{
		return STATISTIC_GRANULARITY_DAY;
	}

	function type()
	{
		return STATISTIC_TYPE_VOLUME;
	}

	function span()
	{
		return 2;
	}

	function hasChart()
	{
		return false;
	}

	function hasDelta()
	{
		return false;
	}

	function shouldBeCaptured()
	{
		return false;
	}

	function value( $start, $end )
	{
		$query = Database::sql( 'SELECT VERSION()' );
		return $query->fetchColumn( 0 );
	}
}