<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>号卡管理系统</title>
</head>

<body>
    <table width="900" border="1" align="center">
        <tr>
            <td>
                <?php
                $id = $_POST["id"];
                $name = $_POST['name'];
                $jieshao = $_POST['jieshao'];
                $yys = $_POST['yys'];
                $ltime = $_POST['ltime'];
                $zhutu = $_POST['zhutu'];
                $link = $_POST['link'];
                include_once("../untils/conn.php");
                if ($con) {
                    mysqli_query($con, "set names utf8");
                    $data = $con->query("UPDATE list  SET name ='" . $name . "',jieshao='" . $jieshao . "',yys='" . $yys . "',ltime='" . $ltime . "',zhutu='" . $zhutu . "' ,link='" . $link . "'where id=" . $id);
                    if ($data > 0) {
                        echo "<script>alert('修改信息成功');location.href='list.php'</script> ";
                    } else {
                        echo ("<script>alert('修改失败');</script>");
                    }
                }
                $con->close();
                ?>
            </td>

        </tr>

    </table>
</body>

</html>