<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">	
     	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    </head>
    <body>
        <h1 class="display-4">Board Delete Form</h1>
        <?php
            $board_no = $_GET["board_no"];
            // echo $board_no."번째 글 삭제 페이지<br>";
        ?>
        <form action="/board_delete_action.php" method="post">
            <table class="table table-bordered" style="width:10%">
                <tr>
                    <td>
                        <?php echo $board_no."번째 글을 삭제합니다."?>
			<input type="hidden" name="board_no" value="<?php echo $board_no ?>">
                    </td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary" type="submit">글 삭제 버튼</td>
                </tr>
            </table>
        </form>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </body>
</html>

