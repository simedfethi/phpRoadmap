<?php
$user_validated=true;
$active =true;
if ($user_validated)
    echo "Welcome!";
else
    echo "Access Forbidden!";

if ($user_validated) {
    echo "Welcome!";
    $greeted = 1;
} else {
    echo "Access Forbidden!";
    exit;
}
?>

<?php if ($user_validated) : ?>
    <table>
        <tr>
            <td>First Name:</td><td>Sophia</td>
        </tr>
        <tr>
            <td>Last Name:</td><td>Lee</td>
        </tr>
    </table>
<?php else: ?>
    Please log in.
<?php endif ?>

<td><?php if($active) { echo "yes"; } else { echo "no"; } ?></td>
<td><?php echo $active ? "true":"false" ?></td>
<td> <?php echo $active ? "good": "not good"  ?> </td>
<?php

switch ($active):
    case true:
        echo 'switch true';
        break;
    case false:
        echo 'switch false';
        break;
    default:
        echo 'default switch  true';
        break;
endswitch;
$active=false;
print "\r\n";
switch ($active) {
    case true:
        echo 'switch true';
        break;
    case false:
        echo 'switch false';
        break;
    default:
        echo 'default switch  true';
        break;
}

$total = 0;
$i = 1;
while ($i <= 10) {
    $total += $i;
    $i++;
}

$total = 0;
$i = 1;
while ($i <= 10):
    $total += $i;
    $i++;
endwhile;

$total = 0;
$i = 1;
while ($i <= 10) {
    if ($i == 5) {
        break; // breaks out of the loop
    }
    $total += $i;
    $i++;
}
