<?php


$math = $_POST['MATH'];
$eng = $_POST['ENG'];
$sci = $_POST['SCIENCE'];
$sst = $_POST['SST'];
$hindi = $_POST['HINDI'];

$output = (($math >= 36) and ($eng >= 36) and ($sci >= 36) and ($sst >= 36) and ($hindi >= 36));
if ($output) {
    $result = "PASS";
    $total = $math + $eng + $sci + $sst + $hindi;

    $per = ($total * 100 / 500);

    if ($per >= 60) {
        $div = '1st';
    } elseif ($per >= 45) {
        $div = "2nd";

    } else {
        $div = '3rd';
    }

} else {
    $result = 'FAIL';
    $div = '';
    $total = '';
    $per = '';
}


?>

<table>
    <thead>
        <th>Math</th>
        <th>ENGLISH</th>
        <th>SCIENCE</th>
        <th>SST</th>
        <th>HINDI</th>
        <th>Result</th>
        <th>total</th>
        <th>percentage</th>
        <th>division</th>
    </thead>
    <tbody>
        <td>
            <?php echo $math ?>
        </td>
        <td>
            <?php echo $eng ?>
        </td>
        <td>
            <?php echo $sci ?>
        </td>
        <td>
            <?php echo $sst ?>
        </td>
        <td>
            <?php echo $hindi ?>
        </td>
        <td>
            <?php echo $result ?>
        </td>
        <td>
            <?php echo $total ?>
        </td>
        <td>
            <?php echo $per ?>
        </td>
        <td>
            <?php echo $div ?>
        </td>
    </tbody>