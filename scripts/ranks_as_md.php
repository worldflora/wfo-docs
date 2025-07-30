<?php

// generates the ranks as a mark down table for inclusion in docs


$url = 'https://list.worldfloraonline.org/gql.php';
$query = 'query {
            ranks{
            id
            title
            abbreviation
            plural
            aka
            index
            children{
                id
            }
            }
        }';

$data = array('query' => $query);
$options = [
    'http' => [
        'method' => 'POST',
        'header' => [
            "Content-Type: application/json"
        ],
        'content' => json_encode($data),
    ],
];

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

$response = json_decode($response);

//print_r($response); exit;

$out = fopen('../docs/ranks_table.md', 'w');

fwrite($out, "---\n");
fwrite($out, "title: Ranks Table\n");
fwrite($out, "---\n\n");

fwrite($out, "The table below shows the ranks accepted by Rhakhis. All names provided should have one of these ranks. 
The value in the 'Name' column should be used to denote the rank in data submitted for import.
Values in other columns are used to maintain data integrity and in parsing name strings during matching.
\n");

fwrite($out, "## Ranks\n\n");

fwrite($out, "| Level | Name | Abbreviation | Plural | Aliases | Can contain |\n");
fwrite($out, "| ----- | ---- | ------------ | ------ | ------- | ----------- |\n");

foreach ($response->data->ranks as $rank) {
    
    $aliases = implode(', ', $rank->aka);
    
    $children = array();
    foreach($rank->children as $kid) $children[] = $kid->id; 
    $children = implode(', ', $children);
    
    fwrite($out, "| {$rank->index} | {$rank->id} | {$rank->abbreviation} | {$rank->plural} | {$aliases} | {$children} |\n");
}



fclose($out);


