<?php
// Model_Crud = CRUD
class Model_Item extends \Model_Crud {
  // このModelが扱うtable名
  protected static $_table_name = 'items';
  // このtableの主キー
  protected static $_primary_key = 'id';
}
