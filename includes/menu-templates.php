<div class="dummy">
    <dl id="templates">
        <dt>Templates</dt>
        <dd>
            <ul>
            <?php
            $mydir = './'; 
            if ($dir = @opendir($mydir)) {
                while (($file = readdir($dir)) !== false) {
                    if($file != ".." && $file != "." && $file != ".DS_Store" && $file != "000_boot.php") {
                        $filelist[] = $file;
                    }
                }
                closedir($dir);
            }
            if(sizeof($filelist) != '0') {
                sort($filelist);
            }
            foreach ($filelist as $value) {
                $count = count($value) - 5;
                $name = substr($value, 4, $count);
                echo '<li class="template"><a href="'.$mydir.$value.'">'.$name.'</a></li>';
            }            
            ?>
            </ul>
        </dd>
    </dl>
</div>