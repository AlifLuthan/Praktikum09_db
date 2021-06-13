<h2>Data Pasien #ID:<?=$bmi->id?></h2>
<div>
    <table class="table table-striped table-hover">
        <tr>
            <td>Kode_Pasien</td>
            <td>:</td>
            <td><?=$bmi->pasien_id?></td> 
        </tr>
        <tr>
            <td>Tanggal_Periksa</td>
            <td>:</td>
            <td><?=$bmi->tanggal?></td>
        </tr>
        <tr>
            <td>Berat (Kg)</td>
            <td>:</td>
            <td><?=$bmi->berat?></td>
        </tr>
        <tr>
            <td>Tinggi (Cm)</td>
            <td>:</td>
            <td><?=$bmi->tinggi?></td>
        </tr>
        <tr>
            <td>BMI</td>
            <td>:</td>
            <td><?=$bmi->bmi?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><?=$bmi->status_bmi?></td>
        </tr>
        <tr>
            <td>Catatan</td>
            <td>:</td>
            <td><?=$bmi->catatan?></td>
        </tr>
    </table>
</div>