<?php
 class MoveContentTableDataAction extends Action {protected $hierarchyTypeId;public function execute() {$this->hierarchyTypeId = $this->getParam('hierarchy-type-id');if (!is_numeric($this->hierarchyTypeId)) {throw new Exception('Param "hierarchy-type-id" must be numeric');}$this->moveBranchedData();}public function rollback() {$vacf567c9c3d6cf7c6e2cc0ce108e0631 = $this->hierarchyTypeId;$vcda36002b56bb226dc93d3af6686772f = 'cms3_object_content_' . $vacf567c9c3d6cf7c6e2cc0ce108e0631;$vac5c74b64b4b8352ef2f181affb5ac2a = <<<SQL
TRUNCATE TABLE `{$vcda36002b56bb226dc93d3af6686772f}`
SQL;   $this->mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);}protected function moveBranchedData() {$vacf567c9c3d6cf7c6e2cc0ce108e0631 = $this->hierarchyTypeId;$v958a0b05bca2609f7f255d48df986c7c = 'cms3_object_content';$vcda36002b56bb226dc93d3af6686772f = 'cms3_object_content_' . $vacf567c9c3d6cf7c6e2cc0ce108e0631;$v0e8133eb006c0f85ed9444ae07a60842 = umiObjectTypesCollection::getInstance()    ->getTypesByHierarchyTypeId($vacf567c9c3d6cf7c6e2cc0ce108e0631);$v85cd96ae4e27f5b0cd3b199e4c39879a = array_keys($v0e8133eb006c0f85ed9444ae07a60842);if (umiCount($v85cd96ae4e27f5b0cd3b199e4c39879a) == 0) {return;}$v18a72701d39d1412f966c9e87b188ecf = implode(', ', $v85cd96ae4e27f5b0cd3b199e4c39879a);$this->mysql_query('SET FOREIGN_KEY_CHECKS=0');$vac5c74b64b4b8352ef2f181affb5ac2a = <<<SQL
INSERT INTO `{$vcda36002b56bb226dc93d3af6686772f}` SELECT * FROM `{$v958a0b05bca2609f7f255d48df986c7c}`
	WHERE `obj_id` IN (SELECT `id` FROM `cms3_objects` WHERE `type_id` IN ({$v18a72701d39d1412f966c9e87b188ecf}))
SQL;   $this->mysql_query($vac5c74b64b4b8352ef2f181affb5ac2a);$this->mysql_query('SET FOREIGN_KEY_CHECKS=1');}}