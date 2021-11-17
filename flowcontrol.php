<?php
declare(encoding ='UTF-8');
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
function ln(){
    print "\r\n";
}
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

ln();

$i = 0;
$j = 0;
while ($i < 10) {
    while ($j < 10) {
        if ($j == 5) {
            break 2; // breaks out of two while loops
        }
        $j++;
    }
    $i++;
}
echo "{$i}, {$j}";
ln();


while ($i < 10) {
    $i++;
    while ($j < 10) {
        if ($j == 5) {
            continue 2; // continues through two levels
        }
        $j++;
    }
}

$total = 0;
$i = 1;
do {
    $total += $i++;
} while ($i <= 10);
ln();

for ($counter = 0; $counter < 10; $counter++) {
    echo "Counter is $counter ";
    ln();
}
$total = 0;
for ($i = 1; $i <= 10; $i++):
    $total += $i;
endfor;

$total = 0;
for ($i = 0, $j = 1; $i <= 10; $i++, $j *= 2) {
    $total += $j;
}
for (;;) {
    echo "Can't stop me!";
    ln();
    break;
}

try {

} catch (
PDOException $error) {
    print "Error!: " . $error->getMessage() ;
    die();
}



