<?php

function mongoUpdate ( $url, $date, $type, $data, $sm, $db, $lang ) {
    try {

        $mng = new MongoDB\Driver\Manager("mongodb://127.0.0.1:27017");
        $bulk = new MongoDB\Driver\BulkWrite;
        
        $filter = [ 'url' => $url, 'field' => $sm, 'date' => $date, 'lang' => $lang ]; 
        $query = new MongoDB\Driver\Query($filter);

        $res = $mng->executeQuery('pageperformance.' . $db, $query);
        $result = current($res->toArray());
    
        if ( !empty($result) ) {
            $upd = $bulk->update($filter, ['$set' => [$type => $data]]);
            $mng->executeBulkWrite('pageperformance.' . $db, $bulk);
        } else {
                $ins = [
                    '_id' => new MongoDB\BSON\ObjectID,
                    'url' => $url,
                    'date' => $date,
                    'field' => $sm,
                    'lang' => $lang,
                    $type => $data
                ];

            $bulk->insert($ins);
            $mng->executeBulkWrite('pageperformance.' . $db, $bulk);
        }

    }  catch (MongoDB\Driver\Exception\Exception $e) {

        $filename = basename(__FILE__);
        
        $arr = array('error' => "The " . $filename . " script has experienced an error and has failed with the following exception\nException:" . $e->getMessage() . "\n
            In file:" . $e->getFile() . "\n
            On line:" . $e->getLine() . "\n" );
        return (json_encode( $arr )); 
    }

}

?>