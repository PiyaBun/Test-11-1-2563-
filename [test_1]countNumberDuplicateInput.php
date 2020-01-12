<form method="POST" action="">
    <input type="text" name="value">
    <input type="Submit" name="enter">
</form>
<?php
    if($_POST['value']){
        $str = $_POST['value'];
        $arr = str_split($str);
        $vals = array_count_values($arr);
        echo "num of duplicate item :".count($vals)."<br><vr>";
        print_r ($vals);
    }
?>