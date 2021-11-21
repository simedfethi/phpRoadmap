<?php

$mongo = new Mongo();
$db = $mongo->library;
$authors = $db->authors;
$author = array('authorid' => 1, 'name' => "J.R.R. Tolkien");
$authors->insert($author);
$author = array('authorid' => 2, 'name' => "Alex Haley");
$authors->insert($author);
$author = array('authorid' => 3, 'name' => "Tom Clancy");
$authors->save($author);
$author = array('authorid' => 4, 'name' => "Isaac Asimov");
$authors->save($author);

$data = $authors->findone(array('authorid' => 4));
echo "Generated Primary Key: {$data['_id']}<br />";
echo "Author name: {$data['name']}";

$authors->update(
    array('name' => "Isaac Asimov"),
    array('$set' =>
        array('books' =>
            array(
                "0-425-17034-9" => "Foundation",
                "0-261-10236-2" => "I, Robot",
                "0-440-17464-3" => "Second Foundation",
                "0-425-13354-0" => "Pebble In The Sky",
            )
        )
    )
);
