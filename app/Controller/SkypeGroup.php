<?php
namespace Observer\Controller;

/**
 * Subject
 * Interface SkypeGroup
 * @package Observer\Controller
 */
interface SkypeGroup{
	/**
	 * @param Member $oObserver
	 * @return mixed
	 */
	public function joinGroup(Member $oObserver);

	/**
	 * @param Member $oObserver
	 * @return mixed
	 */
	public function removeGroup(Member $oObserver);

	/**
	 * @param Member $oMember
	 * @param $content
	 * @return mixed
	 */
	public function setNewMessage(Member $oMember, $content);
}
