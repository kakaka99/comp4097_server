<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Application Detail</h2>
    </div>

    <table class="table table-hover">
        <thead>
        </thead>
        <tbody>


        <!--  row -->
        <tr>
            <td>ETA type</td>
            <td><?php echo htmlspecialchars($order->eta_type) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->

        <!--  row -->
        <tr>
            <td>Passport type</td>
            <td><?php echo htmlspecialchars($type) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->


        <!--  row -->
        <tr>
            <td>Family name</td>
            <td><?php echo htmlspecialchars($order->family_name) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->

        <!--  row -->
        <tr>
            <td>Last name</td>
            <td><?php echo htmlspecialchars($order->last_name) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->


        <!--  row -->
        <tr>
            <td>Address</td>
            <td><?php echo htmlspecialchars($order->address) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->


        <!--  row -->
        <tr>
            <td>City</td>
            <td><?php echo htmlspecialchars($order->city) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->


        <!--  row -->
        <tr>
            <td>Country</td>
            <td><?php echo htmlspecialchars($order->country) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->

        <!--  row -->
        <tr>
            <td>Country Code</td>
            <td><?php echo htmlspecialchars($order->country_code) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->

        <!--  row -->
        <tr>
            <td>Mobile Phone</td>
            <td><?php echo htmlspecialchars($order->mobile_phone) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->

        <!--  row -->
        <tr>
            <td>Home Phone</td>
            <td><?php echo htmlspecialchars($order->home_phone) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->

        <!--  row -->
        <tr>
            <td>Email</td>
            <td><?php echo htmlspecialchars($order->email) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->


        <!--  row -->
        <tr>
            <td>Type ( fast / general )</td>
            <td><?php echo htmlspecialchars($order->passport_type) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->

        <!--  row -->
        <tr>
            <td>Price</td>
            <td><?php echo "$ " . htmlspecialchars($order->price) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->

        <!--  row -->
        <tr>
            <td>Criminal</td>
            <td><?php echo htmlspecialchars($order->criminal) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->

        <!--  row -->
        <tr>
            <td>Passport Nationality</td>
            <td><?php echo htmlspecialchars($order->nationality) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->

        <!--  row -->
        <tr>
            <td>Other citizenship</td>


            <?php

            if ($order->other_citizenship != '') { ?>

                <td><?php echo htmlspecialchars($order->other_citizenship) ?></td>


            <?php } else { ?>

                <td><?php echo "N/A" ?></td>


            <?php }
            ?>

            <td>
            </td>
        </tr>
        <!--  row -->

        <!--  row -->
        <tr>
            <td>Other Passport</td>
            <?php

            if ($order->other_passport != '') { ?>

                <td><?php echo htmlspecialchars($order->other_passport) ?></td>


            <?php } else { ?>

                <td><?php echo "N/A" ?></td>


            <?php }
            ?>

            <td>
            </td>
        </tr>
        <!--  row -->

        <form action="<?php echo base_url() ?>admin/eta_detail/<?php echo $type . '/' ?><?php echo $order->id ?>"
              method="post" enctype="multipart/form-data">

            <!--  row -->
            <tr>
                <td>Birthday</td>
                <td><input class="form-control" type="text" name="birthday"
                           value="<?php echo htmlspecialchars($order->birthday) ?>"></td>
                <td>
                </td>
            </tr>
            <!--  row -->


            <!--  row -->
            <tr>
                <td>Birth Place</td>
                <td><input class="form-control" type="text" name="birth_place"
                           value="<?php echo htmlspecialchars($order->birth_place) ?>"></td>
                <td>
                </td>
            </tr>
            <!--  row -->


            <!--  row -->
            <tr>
                <td>Passport Country</td>
                <td><input class="form-control" type="text" name="passport_country"
                           value="<?php echo htmlspecialchars($order->passport_country) ?>"></td>
                <td>
                </td>
            </tr>
            <!--  row -->


            <!--  row -->
            <tr>
                <td>Passport Number</td>
                <td><input class="form-control" type="text" name="passport_number"
                           value="<?php echo htmlspecialchars($order->passport_number) ?>"></td>

                <td>
                </td>
            </tr>
            <!--  row -->


            <!--  row -->
            <tr>
                <td>Passport Issue Date</td>
                <td><input class="form-control" type="text" name="passport_issue_date"
                           value="<?php echo htmlspecialchars($order->passport_issue_date) ?>"></td>

                <td>
                </td>
            </tr>
            <!--  row -->

            <!--  row -->
            <tr>
                <td>Passport Expiry Date</td>
                <td><input class="form-control" type="text" name="passport_expiry_date"
                           value="<?php echo htmlspecialchars($order->passport_expiry_date) ?>"></td>
                <td>
                </td>
            </tr>
            <!--  row -->


            <!--  row -->
            <tr>
                <td>Result PDF</td>

                <td><input class="form-control" type="file" name="pdf_result" style="width: auto"
                           value="<?php echo htmlspecialchars($order->pdf_result) ?>"></td>

                <?php if ($order->pdf_result != '') { ?>
                <td>
                    <a href="<?php echo $order->pdf_result != '' ? base_url($order->pdf_result) : '' ?>"
                       class="btn btn-info"
                       target="_blank">
                        View </a>
                <td>
                    <?php } ?>

                </td>
            </tr>
            <!--  row -->

            <!--  row -->
            <tr>
                <td>Status</td>


                <td><select class="form-control" name="status">
                        <option value="pending" <?php echo $order->status == 'pending' ? 'selected' : '' ?>>Pending
                        </option>
                        <option value="processing"<?php echo $order->status == 'processing' ? 'selected' : '' ?>>
                            Processing
                        </option>
                        <option value="done"<?php echo $order->status == 'done' ? 'selected' : '' ?>>Done</option>
                        <option value="fail" <?php echo $order->status == 'fail' ? 'selected' : '' ?>>Fail
                        </option>
                    </select></td>
                <td>
                    <button type="submit" name="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>
                        Submit
                    </button>
                </td>
            </tr>
            <!--  row -->
        </form>


        <?php
        foreach ($file as $item) {
            ?>

            <!--  row -->
            <tr>
                <td><?php echo $item->name ?> </td>
                <td>
                    <?php if ($item->link != 'resubmit') { ?>
                        <a href="<?php echo base_url($item->link) ?>"
                           class="btn btn-default"
                           target="_blank">
                            View </a>
                        <span style="margin-left: 20px"> (SUBMIT TIME : <?php echo $item->insert_time ?>)</span>
                    <?php } else { ?>

                        Waiting For Resubmission

                    <?php } ?>
                </td>
                <td>
                </td>
            </tr>
            <!--  row -->


        <?php }
        ?>


        </tbody>
    </table>


</div>