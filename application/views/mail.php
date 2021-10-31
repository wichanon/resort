<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Resort</title>
    <?php $this->load->view('_config'); ?>
</head>

<body>
</body>
<script>
    $(document).ready(function() {
        let email = getUrlParameter('email')
        console.log(email)
        $.ajax({
                url: base_url + '../plugin/_sendEmail.php',
                type: 'post',
                dataType: 'json',
                data: {
                    email :email
                },
            })
            .done(function() {
                console.log("success");
            })
            .fail(function() {

            })
            .always(function(data) {
                alert('ส่งเมลเรียบร้อย')
            });
    });

    function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
        return false;
    };
</script>

</html>