<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Result</title>
</head>
<body>

<div style="    font-family: Verdana,Arial;
    font-weight: normal;
    border-collapse: collapse;
    vertical-align: top;
    padding: 5px 0;
    margin: 0;
    width: 100%;
    background: #f1f1f1;
    ">

    <div style="margin: 20px auto; background: #FFFFFF;width:700px; padding: auto;">
        <div style="margin: auto;width:650px;">
            <br><br>
            Dear <?php echo $title.' '.$first_name?>,<br><br>

            Please click on below URL or paste into your browser to verify your Email Address
            <?php echo base_url('member/verify/'.$verified_id)?> <br><br>

            Thank you<br><br>

            Gourmet Team<br><br>

            <div style="float: right"> Gourmet</div>
            <br class="clear">
            <br>

            <div style="float: right"><a href="http://www.gourmet.com.hk/"> http://www.gourmet.com.hk/</a></div>
            <br class="clear">
            <br>
        </div>


        <div style="width: 650px; margin: auto">
            <div style="margin: 20px 0;text-align: center">
                Thank you for shopping at Gourmet Online Food Store.<br>
                <a href="http://www.gourmet.com.hk/"> http://www.gourmet.com.hk/</a>
            </div>
        </div>


    </div>
</div>

</body>
</html>
