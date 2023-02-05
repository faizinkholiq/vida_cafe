<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=ucwords($profile['name']); ?></title>
    <style></style>
</head>
<body>
 
<div id="container">
    <div class="title" style="width: 100%; text-align: center;">
        <img height="15mm" style="margin-bottom:5px;" src="<?=base_url('assets/images/profile/').$profile['logo'] ?>" />
        <h4>RESTAURANT BOOKING FORM <br/> <?=strtoupper($profile['name']); ?></h4>
    </div><br/>
    <div id="body">
        <table>
            <tr>
                <td>Form Code</td>
                <td width="20px">:</td>
                <td><?=$detail['code']; ?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td width="20px">:</td>
                <td><?=$detail['name']; ?></td>
            </tr>
            <tr>
                <td>Booking Date</td>
                <td width="20px">:</td>
                <td><?=$detail['book_date']; ?></td>
            </tr>
            <tr>
                <td>Time of Arrival</td>
                <td width="20px">:</td>
                <td><?=$detail['time']; ?></td>
            </tr>
            <tr>
                <td>Number of Guests</td>
                <td width="20px">:</td>
                <td><?=$detail['people']; ?></td>
            </tr>
            <tr>
                <td>Type</td>
                <td width="20px">:</td>
                <td><?=$detail['type']; ?></td>
            </tr>
        </table><br/>
        <p style="text-indent: 20px;">
            Untuk mengkonfirmasi pemesanan silahkan dapat dilanjutkan dengan 
            menghubungi Nomor Whatsapp Vida Café <b>(+62 812-1341-7778)</b>, 
            dengan menyertakan nama dan kode pemesanan.
        </p>
        <p>Terima Kasih.</p> 
    </div>
 
</div>
 
</body>
</html>