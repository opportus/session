<?php

namespace Opportus\Session;

/**
 * The session...
 *
 * @version 0.0.1
 * @package Opportus\Session
 * @author  Clément Cazaud <opportus@gmail.com>
 *
 * @todo Add functionalities...
 */
class Session
{
	/**
	 * Constructor.
	 */
	public function __construct()
	{
		$this->start();
	}

	/**
	 * Sets a session variable.
	 *
	 * @param  string $key
	 * @param  mixed  $value
	 */
	public function set(string $key, $value)
	{
		return $_SESSION[$key] = $value;
	}

	/**
	 * Gets a session variable.
	 *
	 * @param  string $key
	 * @return mixed
	 */
	public function get(string $key)
	{
		return $_SESSION[$key];
	}

	/**
	 * Checks if a session variable exists.
	 *
	 * @param  string $key
	 * @return bool
	 */
	public function has(string $key)
	{
		return isset($_SESSION[$key]);
	}

	/**
	 * Unsets a session variable.
	 *
	 * @param string $key
	 */
	public function unset(string $key)
	{
		unset($_SESSION[$key]);
	}

	/**
	 * Starts the session.
	 *
	 * @return bool
	 */
	public function start()
	{
		return session_start();
	}

	/**
	 * Destroys the session.
	 *
	 * @return bool
	 */
	public function destroy()
	{
		return session_destroy();
	}

	/**
	 * Aborts the session.
	 *
	 * @return bool
	 */
	public function abort()
	{
		return session_abort();
	}
}

