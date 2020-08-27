<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/qrcode.min.js') }}"></script>
    <title>Document</title>
</head>
<body>
    <div style="width: 100%; display: inline-block;">
    <?php
        foreach($data_aset as $aset)
        {
    ?>
        <div style="width: 50%; border: 1px solid black;padding: 10px; border-radius: 5px;">
            <table>
                <tr>
                    <td style="width: 25%;"><span id="qrcode_<?=$aset['id']?>"></span></td>
                    <td style="width: 75%;font-weight: bold;text-align:center;">
                        <?=$aset['id_lokasi']?> <br>
                        <?=$aset['kode_aset']?> <br>
                        <?=date("l, d F Y", strtotime($aset['created_at']))?> <br>
                    </td>
                </tr>
            </table>

            <script>
                new QRCode(document.getElementById('qrcode_<?=$aset['id']?>'), {text: 'contoh', width: 75, height: 75});
            </script>
        </div>
        <?php
        }
        ?>
        </div>
</body>
</html>