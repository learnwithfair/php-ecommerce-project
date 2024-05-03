<?php
if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] == "mgs_dlt" ) {
        $dlt_id  = $_GET['id'];
        $dlt_mgs = $obj->mgs_dlt( $dlt_id );
    }
}
$message_data = $obj->display_message();
?>
<h2>Manage Comments:</h2>
<h6 style = "color:red"><?php if(isset($dlt_mgs)){ echo $dlt_mgs;}?></h6>
<br>

<div></div>
<table class="table">
    <thead>
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Email</th>
            <th>Message</th>
            <th>Time</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
    <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Email</th>
            <th>Message</th>
            <th>Time</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
        <?php $count = 1;while ( $info = mysqli_fetch_assoc( $message_data ) ) {?>
        <tr>
            <td><?php echo $count++; ?></td>
            <td><?php echo $info['message_name']; ?></td>
            <td><?php echo $info['message_subject']; ?></td>
            <td><a href="mailto:<?php echo $info['message_email']; ?>"><?php echo $info['message_email']; ?></a></td>
            <td style="text-align:justify;"><?php echo $info['message_content']; ?></td>
            <td><?php echo $info['message_date']; ?></td>
            <td method='post'>
                <a href="?status=mgs_dlt&&id=<?php echo $info['message_id']; ?>" class="btn btn-danger"
                    name="mgs_dlt_btn">Delete</a>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>