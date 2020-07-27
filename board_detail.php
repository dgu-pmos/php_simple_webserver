<!DOCTYPE html>  
<html>
    <head>
        <meta charset="utf-8" />
        <title>Board Detail</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <style>
            table {
                table-layout: fixed;
                word-wrap: break-word;
            }
        </style>
    </head>
    <body>
        <h1 class="display-4">Board Detail</h1>
        <?php
 	    $conn = mysqli_connect("10.41.208.181", "c3e_pmos", "wjstks@004","ncp");
            // $conn = mysqli_connect("localhost", "root", "wjstks@004","ncp");
            if($conn) {
                // echo "연결 성공<br>";
            } else {
                // die("연결 실패 : " .mysqli_error());
            }
            $board_no = $_GET["board_no"];
            // echo $board_no."번째 글 내용<br>";
            $sql = "SELECT * FROM board WHERE id = '".$board_no."'";
            $result = mysqli_query($conn,$sql);
            if($result) {
                // echo "조회 성공";
            } else {
                // echo "결과 없음: ".mysqli_error($conn);
            }
        ?>
        <table class="table table-bordered" style="width:50%">
            <?php
                if($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td style="width:15%">작성자</td>
                <td style="width:35%">
                    <?php
                        echo $row["author"];
                    ?>
                </td>
            </tr>
            <tr>
                <td style="width:10%">제목</td>
                <td style="width:15%">
                    <?php
                        echo $row["title"];
                    ?>
                </td>
                <td style="width:5%">번호</td>
                <td style="width:3%">
                        <?php
                            echo $row["id"];
                        ?>
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <?php
                        echo $row["content"];
                    ?>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
        <br>
        &nbsp;&nbsp;&nbsp;
        <a class="btn btn-primary" href="/board_list.php"> 리스트로 돌아가기</a>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </body>
</html>
