// MySQL table's name
$tableName = 'my_table';
// Get JSON file and decode contents into PHP arrays/values
$jsonFile = '/path/to/file.json';
$jsonData = json_decode(file_get_contents($jsonFile), true);

// Iterate through JSON and build INSERT statements
foreach ($jsonData as $id=>$row) {
    $insertPairs = array();
    foreach ($row as $key=>$val) {
        $insertPairs[addslashes($key)] = addslashes($val);
    }
    $insertKeys = '`' . implode('`,`', array_keys($insertPairs)) . '`';
    $insertVals = '"' . implode('","', array_values($insertPairs)) . '"';

    echo "INSERT INTO `{$tableName}` ({$insertKeys}) VALUES ({$insertVals});" . "\n";
}
