<?php

	interface iUmiMessage extends iUmiEntinty {

		public function getTitle();

		public function setTitle($title);

		public function getContent();

		public function setContent($content);

		public function getSenderId();

		public function setSenderId($senderId = null);

		public function getType();

		public function setType($type);

		public function getPriority();

		public function setPriority($priority = 0);

		public function getCreateTime();

		public function setCreateTime($time);

		public function getIsSended();

		public function send($recipients);

		public function getRecipients();

		public function setIsOpened($isOpened, $userId = false);
	}
