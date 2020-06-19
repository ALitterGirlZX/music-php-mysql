<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>题库</title>
    <style type="text/css">
        *{list-style: none;margin:0px;padding: 0px;}
        #tiku{
            width: 300px;
            margin:10px auto;
        }
        #tiku ul li{
            float: left;
        }
    </style>
</head>
<body>
	<?php
		//获取数据库配置
		require_once("config.php");
		
		//或者配置文件 - BY TANKING
		$tb = "pop_songs";
		$tb1 = "shop";
		
		//连接数据库
		$con = mysql_connect("localhost","root","root")or die("连接数据库失败");
		
		//设置数据库字符集  
		mysql_query("SET NAMES UTF8");
		
		//查询数据库
		mysql_select_db($db, $con);
		
		//查询数据库
		//获取最新的1条数据
		$all = mysql_num_rows(mysql_query("select * from $tb1"));
		
		$sql="select * from $tb1  where id = 1";
		$rest=mysql_query($sql);
// 		while($row = mysql_fetch_assoc($rest)){
// 			$id = $row["id"];
// 			$songName = $row["songName"];
// 			$singer = $row["singer"];
// 			$playTime = $row["playTime"];
// 			$createTime = $row["createTime"];
// 			$lyric = $row["lyric"];
// 		}
		
		//mysql_fetch_row（）函数在每一次遍历后会将指针向后自动移动一个单位
		
	?>

	<p id="tiku">
		<!-- <?php
			echo "<ul>";
				echo "<li>'$id'</a></li>";
				echo "<li>'$songName'</a></li>";
				echo "<li>'$singer'</a></li>";
				echo "<li>'$playTime'</a></li>";
				echo "<li>'$createTime'</a></li>";
				echo "<li>'$lyric'</a></li>";
			echo "</ul>";
		?> -->
		<?php
			$array = array(1, 2, 3, 4, 5, 6, 7);
			foreach ($array as $value) {
		?>
		<tr>
			<td>
				<?php echo $value; ?>
			</td>
		</tr>
		<?php
			}
		?>
		<?php
			$rest=mysql_query($sql5);
			while($row=mysql_fetch_row($rest)){
				$id = $row[0];
				$songName = $row[1];
				$img = $row[6];
		?>
		<?php
			echo "<li>";
			echo "	<div id='$id'>";
			echo "		<img src='$img'>";
			echo "	</div>";
			echo "	<a title='$songName' href='shopDetail.php?id=$id'>$songName</a>";
			echo "</li>";
			}
		?>
	</p>
    <br/>
</body>
</html>