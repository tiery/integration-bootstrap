<?php
$mydir = './'; 
if ($dir = @opendir($mydir)) {
	while (($file = readdir($dir)) !== false) {
		if($file != ".." && $file != "." && $file != ".DS_Store") {
			$filelist[] = $file;
		}
	}
	closedir($dir);
}
if(sizeof($filelist) != '0') {
?>
<dl id="templates">
	<dt>TPL
	<?php
	function lastIndexOf($string,$item){  
	    $index=strpos(strrev($string),strrev($item));  
	    if ($index){  
	        $index=strlen($string)-strlen($item)-$index;  
	        return $index;  
	    }  
	        else  
	        return -1;  
	}
	$currentPos = lastIndexOf($_SERVER['SCRIPT_NAME'],'/');
	$currentCount = count($_SERVER['SCRIPT_NAME']) - 5;
	$currentName = substr($_SERVER['SCRIPT_NAME'], $currentPos + 5, $currentCount);
	?></dt>
	<dd>
		<ul>
		<?php
		
		sort($filelist);
		foreach ($filelist as $value) {
			$count = count($value) - 5;
			$name = substr($value, 4, $count);
			$klass = 'template';
			if ($name == $currentName) {
				$klass .= ' current';
			}
			echo '<li class="' . $klass . '"><a href="'.$mydir.$value.'">'.$name.'</a></li>';
		}
		?>
		</ul>
	</dd>
</dl>
<?php
}			
?>