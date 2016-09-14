<?php
/*
	Author: Joshua Nasiatka
	Class: DALi (Data Abstraction Layer: Improved)
	Version: 0.1
*/
define ( 'DB_HOST',     'localhost'); //fill in actual or replace with vars
define ( 'DB_USER',     'QandA');    //If using this data in multiple files,
define ( 'DB_PASSWORD', 'QandAForCS');    //  I recommend putting it in a sepearate file
define ( 'DB_DB',       'QandA');    //  and 'require()'-ing it.
if ( !class_exists( 'DALi' ) ) {
  class DALi {
    protected function dbconnect() {
      return new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DB);
    }
    public function query($query) {
      $db = $this->dbconnect();
      $result = $db->query($query);

      while ($row = $result->fetch_array() ) {
        $results[] = $row;
      }

      return $results;
    }
}
/*
	This file needs to be imported into which ever file is using it:
	require_once('DALi.php');
	Then the class needs to be called
	$dali = new DALi();

	Now you utilize DALi to query the database
	$result = $dali->query("SELECT * FROM table");
	echo var_dump($result);
*/
?>
