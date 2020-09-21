<?php

namespace Observer\Controller;

/**
 * Observer
 * Interface Member
 * @package Observer\Controller
 */
interface Member
{
	/**
	 * @param SkypeGroup $oSubject
	 * @param $content
	 * @return mixed
	 */
	public function writeMessageInGroup(SkypeGroup $oSubject, $content);

	/**
	 * @param SkypeGroup $oWilokeSkypeGroup
	 * @return mixed
	 */
	public function receieveMessage(SkypeGroup $oWilokeSkypeGroup);
}
