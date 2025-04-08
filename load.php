<?php
include 'conect.php';

$sql = "SELECT * FROM `data`";
$result = mysqli_query($conn, $sql);
$output = '';

if (mysqli_num_rows($result) > 0) {
    $output = '<table width="100%" cellspacing="0" cellpadding="10">
                <tr>
                    <th width="50px">ID</th>
                    <th width="200px">Name</th>
                    <th width="200px">Email</th>
                    <th width="200px">Images</th>
                    <th width="100px">Edit</th>
                    <th width="100px">Delete</th>
                </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "
            <tr>
                <td>{$row['sno']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td><img src='{$row['file']}' width='50px' height='50px'></td>
                <td><button class='btn btn-outline-success edit-btn' data-id='{$row['sno']}'>Edit</button></td>
                <td><button class='btn btn-outline-danger delete-btn' data-id='{$row['sno']}'>DELETE</button></td>
            </tr>";
    }

    $output .= '</table>';
    mysqli_close($conn);
    echo $output;

} else {
    echo "No records found.";
}
?>