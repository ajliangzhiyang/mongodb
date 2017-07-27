<?php
echo '<pre>';
//print_r(get_extension_funcs('mongodb'));


$con    = new MongoDB\Driver\Manager('mongodb://127.0.0.1:27017');

// print_r($con);

// $query  = new MongoDB\Driver\Query(['show dbs']);
// $cursor = $con->executeQuery('databaseName.collectionName',$query);
// $it     = new IteratorIterator($cursor);
// $it->rewind();
// while ($doc=$it->current()) {
//     print_r($doc);
//     $it->next();
//     echo '<br/>';
// }


// 查询数据
$query = new MongoDB\Driver\Query([]);
$cursor = $con->executeQuery('longzhu-log.api_log_20170712', $query);

//print_r($query);

foreach ($cursor as $document) {
    print_r($document);
}

$cmd = new MongoDB\Driver\Command($param);
return $this->_conn->executeCommand($this->_db, $cmd);
 