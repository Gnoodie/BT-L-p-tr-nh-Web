<?php 
    $sach=[];
    for($i=1;$i<=100;$i++){
        $sach[]=[
            'stt'=>$i,
            'ten'=>"Tên sách $i",
            'nd'=>"Nội dung $i",
        ];
    }
    $sach_moi_trang=10;
    $so_sach=count($sach);
    $so_trang=$so_sach/$sach_moi_trang;
    $trang_hien_tai=isset($_GET['page'])?(int)$_GET['page'] :1;
    if($trang_hien_tai <1){
        $trang_hien_tai=1;
    }elseif($trang_hien_tai >$so_trang){
        $trang_hien_tai=$so_trang;
    }
    $vtri_dau=($trang_hien_tai-1)*$sach_moi_trang;
    $sach_trang_htai=array_slice($sach,$vtri_dau,$sach_moi_trang);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .pagination {
            text-align: center;
            margin: 20px 0;
        }
        .pagination a {
            margin: 0 5px;
            text-decoration: none;
            color: #000;
        }
        .pagination a.active {
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên sách</th>
        <th>Nội dung sách</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($sach_trang_htai as $sach): ?>
            <tr>
                <td><?= $sach['stt']?></td>
                <td><?= $sach['ten']?></td>
                <td><?= $sach['nd']?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="pagination">
    <?php if($trang_hien_tai > 1): ?>
        <a href="?page =<?= $trang_hien_tai -1?>">Trước</a>
    <?php endif; ?>

    <?php for($i=1;$i<=$so_trang;$i++) : ?>
        <a href="?page=<?= $i ?>" class="<?=$i == $trang_hien_tai ? 'active':''?>"><?= $i?></a>
        <?php endfor; ?>

    <?php if($trang_hien_tai <$so_trang) :?>
        <a href="?page=<?= $trang_hien_tai +1 ?>">Tiếp</a>
        <?php endif; ?>    
</div>
</body>
</html>
