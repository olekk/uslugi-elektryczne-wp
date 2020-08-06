<?php
/*
Template Name: messages
Template Post Type: page
*/

global $wpdb;

$parts = explode('/',$_SERVER['REQUEST_URI']);
$dir = 'http://'.$_SERVER['HTTP_HOST'];
for ($i = 0; $i < count($parts) - 2; $i++) $dir .= $parts[$i] . "/";

echo '<style>table {border-collapse: collapse;} td,th {border: 1px solid black; padding: 10px;} </style> <a href="'.$dir.'">Wróć</a> <br> <br>';

echo 'Wiadomości: <br>';
echo '<table><tr> <th>Id</th> <th>Autor</th> <th>Email</th> <th>IP</th> <th>Data</th> <th>Treść</th> </tr> ';
$rows = $wpdb->get_results("SELECT * FROM ".$wpdb->base_prefix."messages");
foreach($rows as $row) {
    echo '<tr> <td>'.$row->id.'</td>';
    echo '<td>'.$row->autor.'</td>';
    echo '<td>'.$row->email.'</td>';
    echo '<td><a href="https://iplocation.com/?ip='.$row->ip.'" target="_blank">'.$row->ip.'<a/></td>';
    echo '<td>'.$row->data.'</td>';
    echo '<td>'.$row->tresc.'</td> </tr>';
}
echo '</table> <br> <br>';

echo ' <br> Odwiedziny: <br>';

echo '<table><tr> <th>Id</th> <th>Data</th> <th>IP</th></tr> ';
$rows = $wpdb->get_results("SELECT * FROM ".$wpdb->base_prefix."visitorsip");

$last = (object) array('qty'=>1);
foreach($rows as $row) {
    if(abs(strtotime($last->date) - strtotime($row->date)) > 3600 || $last->ip!=$row->ip) {
        echo '<tr> <td>'.$row->id.'</td>';
        echo '<td>'.$row->date.'</td>';
        echo '<td><a href="https://iplocation.com/?ip='.$row->ip.'" target="_blank">'.$row->ip.'<a/></td>';
        echo '</tr>';
    }
    $last = clone $row;
}
echo '</table>';
?>