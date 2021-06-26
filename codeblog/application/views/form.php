<!DOCTYPE html>
<html>
<head>
    <title>Upload form in Codeigniter</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css'); ?>">
    <script src=<?php  echo base_url('js/jquery-3.5.1.js'); ?>></script>
    <script src=<?php echo base_url('js/main.js'); ?> ></script>
    <script src=<?php echo base_url('js/bootstrap.js'); ?>></script>
</head>

<body>
    <form method="post">
        <h5>Name</h5>
        <input type="text" name="name" value="<?php echo set_value('name') ?>" />
        <?php if(form_error('name')){
            echo "<span style='color:red'>".form_error('name')."</span>";
        }
        ?>

        <h5>Email</h5>
        <input type="email" name="email" value="<?php echo set_value('email') ?>" />
        <?php if(form_error('email')){
            echo "<span style='color:red'>".form_error('email')."</span>";
        }
        ?>

        <div><input type="submit" value="Submit"/></div>
    </form>
    </body>
    </html>