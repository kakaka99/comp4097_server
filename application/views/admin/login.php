
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login | INDZZ Admin Panel</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link rel="stylesheet" href=" <?php echo base_url() ?>/public/admin/css/guest.css">

    <link rel="icon" href="<?php echo base_url() ?>/public/admin/favicon/128x128.png" sizes="128x128" type="image/png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>/public/admin/favicon/favicon.ico">

    <link href="<?php echo base_url() ?>/public/admin/favicon/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />
    <link href="<?php echo base_url() ?>/public/admin/favicon/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
    <link href="<?php echo base_url() ?>/public/admin/favicon/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
    <link href="<?php echo base_url() ?>/public/admin/favicon/apple-touch-icon.png" rel="apple-touch-icon" />

    <meta name="theme-color" content="#00796b" />
</head>

<body>

<div class="container">
    <div class="box">
        <div id="header">
            <h1 class="logo">INDZZ Admin Panel</h1>
        </div>

        <div id="msg">
            <h1 class="main-container-padding"><?php
                if (isset($error_message)) {
    echo '<div class="alert alert-error">' . $error_message . '</div>';
}?></h1>
        </div>

        <div id="main">
                
    <form action="<?php echo base_url()?>index.php/admin/get_session" method="post" id="login-form" onsubmit="showLoading();" autocomplete="off">
        <fieldset>
            <legend>Login</legend>
            <div class="form-group">
                <label for="username" class="label-username">Username</label>
                <input type="text" id="username" name="_username" value="" class="form-control" placeholder="Username"/>
            </div>
            <div class="form-group">
                <label for="password" class="label-password">Password</label>
                <input type="password" id="password" name="_password" class="form-control" placeholder="Password" />
            </div>
            <input type="hidden" name="_csrf_token" value="y2nkMw7663d1jr4NXTjwrxPcZ4DRRP_LbN3B8bB9gD8"/>
            <button type="submit" class="submit-button">
                Login
            </button>
        </fieldset>
    </form>

    <script>
        function showLoading() {
            document.getElementById('loading').className = 'playing';
        }
        (function ()  {
            document.getElementById('username').focus();
        })();
    </script>
        </div>

        <div id="footer">
            Developed by <a href="http://www.indzz.com">INDZZ.COM</a>
        </div>
    </div>
</div>
<div id="loading"></div>

</body>
</html>
