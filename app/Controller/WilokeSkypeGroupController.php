<?php

namespace Observer\Controller;

/**
 * Class WilokeSkypeGroupController
 */
class WilokeSkypeGroupController implements SkypeGroup
{
	/**
	 * @var array
	 */
	protected $aWilokeMembers = [];

	/**
	 * @var
	 */
	private $newMessage;

	/**
	 * @var
	 */
	private $newMessageMemberName;

	/**
	 * @var string
	 */
	private $groupName = 'Wiloke Group';

	/**
	 * @param Member $oMember
	 * @return $this|mixed
	 */
	public function joinGroup(Member $oMember)
	{
		$this->aWilokeMembers[] = $oMember;
		return $this;
	}

	/**
	 * @param Member $oMember
	 * @return $this|mixed
	 */
	public function removeGroup(Member $oMember)
	{
		$check = array_search($oMember, $this->aWilokeMembers);
		if ($check !== false) {
			unset($this->aWilokeMembers[$check]);
		}

		return $this;
	}

	/**
	 * @param Member $oMember
	 * @param $content
	 */
	public function setNewMessage(Member $oMember, $content)
	{
		$this->newMessageMemberName = $oMember->getName();
		$this->newMessage = $content;
	}

	/**
	 * notifyOtherPeople
	 */
	public function notifyOtherPeople()
	{
		foreach ($this->aWilokeMembers as $oMember) {
			if ($oMember->getName() == $this->newMessageMemberName) {
				continue;
			}
			$oMember->receieveMessage($this);
		}
	}

	/**
	 * @return mixed
	 */
	public function getNewMessage()
	{
		return $this->newMessage;
	}

	/**
	 * @return mixed
	 */
	public function getNewMessageMemberName()
	{
		return $this->newMessageMemberName;
	}

	/**
	 * @return string
	 */
	public function getGroupName()
	{
		return $this->groupName;
	}
}