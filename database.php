<?php
$db = new PDO("mysql:host=localhost;dbname=trip", "root", "123");
$statement = $db->prepare("SELECT * FROM adress_list");
$statement->execute();
// handle row results, one at a time
while($row = $statement->fetch()) {
    print_r($row);
// ... or probably do something more meaningful with each returned row
}
/*
$statement = $db->prepare("INSERT INTO books (authorid, title, ISBN,
pub_year)"
    . "VALUES (:authorid, :title, :ISBN, :pub_year)");
$statement->execute(array(
    'authorid' => 4,
    'title' => "Foundation",
    'ISBN' => "0-553-80371-9",
    'pub_year' => 1951),
);

$statement = $db->prepare("INSERT INTO books (authorid, title, ISBN,
pub_year)"
. "VALUES (?, ?, ?, ?)");
$statement->execute(array(4, "Foundation", "0-553-80371-9", 1951));


*/
$statement = null;


try {
// connection successful
    $db = new PDO("mysql:host=localhost;dbname=trip", "root",
        "123");
} catch (Exception $error) {
    die("Connection failed: " . $error->getMessage());
}
try {
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->beginTransaction();
    $db->exec("insert into accounts (account_id, amount) values (23, '5000')"
    );
    $db->exec("insert into accounts (account_id, amount) values (27, '-5000')"
    );
    $db->commit();
} catch (Exception $error) {
    $db->rollback();
    echo "Transaction not completed: " . $error->getMessage();
}


$db = new mysqli("localhost", "root", "123", "trip");
$sql = "SELECT * from adress_list";
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "{$row['street']} is the author of: {$row['state']}<br />";
}
$result->close();
$db->close();

/*
$db = new SQLiteDatabase("library.sqlite");
$sql = "CREATE TABLE 'authors' ('authorid' INTEGER PRIMARY KEY, 'name' TEXT)";
if (!$db->queryExec($sql, $error)) {
    echo "Create Failure - {$error}<br />";
} else {
    echo "Table Authors was created <br />";
}
$sql = <<<SQL
INSERT INTO 'authors' ('name') VALUES ('J.R.R. Tolkien');
INSERT INTO 'authors' ('name') VALUES ('Alex Haley');
INSERT INTO 'authors' ('name') VALUES ('Tom Clancy');
INSERT INTO 'authors' ('name') VALUES ('Isaac Asimov');
SQL;
if (!$db->queryExec($sql, $error)) {
    echo "Insert Failure - {$error}<br />";
} else {
    echo "INSERT to Authors - OK<br />";
}

*/

$i=1;