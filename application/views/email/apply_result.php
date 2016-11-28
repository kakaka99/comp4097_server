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


    <div style="margin: 20px auto; background: #FFFFFF;width:800px; padding: auto;">
        <div style="margin: auto;width:650px;">
            <br><br>
            <?php echo "Dear " . $order['order_person'] . " " ?> <br><br>
            您好！<br><br>

            感謝您的申請！<br><br>

            很高興地通知您，您的訂單 ID#<?php echo $order['id'] ?>已經完成處理程序<br><br>

            敬請參閱以下的訂單詳情。<br><br>

            敬祝安康<br><br>

            <div style="float: right"> AUVisa</div>
            <br class="clear">
            <br>

            <br class="clear">
            <br>
        </div>

        <div style="margin: auto;width:650px;">
            <br><br>
            <?php echo "Dear " . $order['order_person'] . " " ?> <br><br>
            Hello！<br><br>

            Thank you for your application！<br><br>

            We are happy to info you that you order ID#<?php echo $order['id'] ?>has been completed<br><br>

            Details are showed by the following。<br><br>

            Regards<br><br>

            <div style="float: right"> AUVisa</div>
            <br class="clear">
            <br>

            <br class="clear">
            <br>
        </div>

        <div style="width:700px; text-align: center"> 訂單編號 Order Code #<?php echo $order['id'] ?></div>
        <br>

        <div style="width:700px; text-align: center"> 訂購時間 Time： <?php echo date("Y-m-d H:i:s") ?></div>


        <table style="width:700px;margin: 40px auto;">
            <tbody>
            <tr style="background: #e1f0f8;">
                <th style="border-bottom: 1px solid #DDDDDD; padding: 8px;">護照 Passport</th>
                <th style="border-bottom: 1px solid #DDDDDD; padding: 8px;">類別 Type</th>
                <th style="border-bottom: 1px solid #DDDDDD; padding: 8px;">編號 ID</th>
                <th style="border-bottom: 1px solid #DDDDDD; padding: 8px;">姓 Family Name</th>
                <th style="border-bottom: 1px solid #DDDDDD; padding: 8px;">名 Last Name</th>
                <th style="border-bottom: 1px solid #DDDDDD; padding: 8px;">狀態 Status</th>
                <th style="border-bottom: 1px solid #DDDDDD; padding: 8px;">結果 Result</th>
            </tr>


            <?php foreach ($application as $item) { ?>
                <tr>
                    <td style="text-align: center; border-bottom: 1px solid #DDDDDD; padding: 8px;"><?php if ($order['form_type'] == 'hk') {
                            echo "香港特區護照HKSAR PASSPORT<br>英國國民（海外）BON PASSPORT<br>其他國家護照 ETAELIGIBLE PASSPORT";
                        } else if ($order['form_type'] == 'di') {
                            echo "香港特區簽證身份DI PASSPORT";
                        } else {
                            echo "澳門特區護照MSAR PASSPORT";
                        } ?></td>
                    <td style="text-align: center; border-bottom: 1px solid #DDDDDD; padding: 8px;"><?php echo $order['passport_type'] == 'fast' ? '特快處理 FAST' : '一般 GENERAL' ?></td>

                    <td style="text-align: center; border-bottom: 1px solid #DDDDDD;"># <?php echo $item->id ?></td>
                    <td style="text-align: center; border-bottom: 1px solid #DDDDDD;"><?php echo htmlspecialchars($item->family_name) ?></td>
                    <td style="text-align: center; border-bottom: 1px solid #DDDDDD;"><?php echo htmlspecialchars($item->last_name) ?></td>
                    <?php if ($item->status == 'pending') { ?>
                        <td style="color: red;text-align: center; border-bottom: 1px solid #DDDDDD;"><?php echo '等待中 PENDING' ?></td>
                    <?php } else if ($item->status == 'processing') { ?>
                        <td style="color: green;text-align: center; border-bottom: 1px solid #DDDDDD;"><?php echo '處理中 PROCESSING' ?></td>
                    <?php } else if ($item->status == 'done') { ?>
                        <td style="color: green;text-align: center; border-bottom: 1px solid #DDDDDD;"><?php echo '成功 DONE' ?></td>
                    <?php } else if ($item->status == 'fail') { ?>
                        <td style="color: #EE7D00;text-align: center; border-bottom: 1px solid #DDDDDD;"><?php echo '失敗 FAIL' ?></td>
                    <? } ?>

                    <?php if ($item->pdf_result == '') { ?>
                        <td style="color: red;text-align: center; border-bottom: 1px solid #DDDDDD;"><?php echo 'N/A' ?></td>
                    <?php } else { ?>
                        <td style="text-align: center; border-bottom: 1px solid #DDDDDD;">
                            <a href="<?php echo base_url($item->pdf_result) ?>"
                               class="btn btn-info"
                               target="_blank">
                                View </a>
                        </td>
                    <?php } ?>
                </tr>

            <?php } ?>


            </tbody>
        </table>

        <div style="width: 650px; margin: auto">
            <div style="margin-top: 20px; width: 40%">
                地址 ADDRESS：
                <?php echo $order['address'] ?>
                <br>H: 852-<?php echo $order['home_phone'] ?>
                <br>T: 852-<?php echo $order['mobile_phone'] ?>
            </div>
        </div>

        <div style="width: 650px; margin: auto">
            <div style="margin-top: 25px;">
                支付方式 PAYMENT：
                <?php echo 'PayPal Express Checkout' ?>
                <br> $ <?php echo $order['amount'] ?>
            </div>
        </div>


        <div style="width: 650px; margin: 20px auto">
            <div style="margin: 10px 0 0 0 ;text-align: center">
                Thank you for shopping at ETA Visa.<br>
            </div>
        </div>


    </div>
</div>

</body>
</html>
