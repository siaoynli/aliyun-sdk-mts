<?php

namespace AliCloud\Mts;

use AliCloud\Core\RpcAcsRequest;

class QuerySnapshotJobListRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Mts", "2014-06-18", "QuerySnapshotJobList", "mts", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $snapshotJobIds;

	private  $ownerAccount;

	private  $ownerId;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getSnapshotJobIds() {
		return $this->snapshotJobIds;
	}

	public function setSnapshotJobIds($snapshotJobIds) {
		$this->snapshotJobIds = $snapshotJobIds;
		$this->queryParameters["SnapshotJobIds"]=$snapshotJobIds;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}
	
}