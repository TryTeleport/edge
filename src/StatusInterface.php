<?php
namespace Teleport\Edge;

interface StatusInterface
{
	/**
	 * Operation succeeded
	 *
	 * @return bool
	 */
	public function isOk(): bool;
	
	/**
	 * Operation failed
	 *
	 * @return bool
	 */
	public function isFail(): bool;
	
	/**
	 * Operation has an error
	 *
	 * @return bool
	 */
	public function isErr(): bool;
}
