<?php
namespace Teleport\Edge;

interface ToArrayInterface
{
	/**
	 * Convert object data to array
	 *
	 * @param  array|null $options
	 * @return array
	 */
	public function toArray(?array $options = null): array;
}
