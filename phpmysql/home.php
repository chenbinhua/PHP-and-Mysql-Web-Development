<?php
require ('header.php');
require ('classname.php');
$a=new classname('called');
$b=new classname('second');
?>
<p>Welcome to the home of TLA Consulting.
Please take some time to get to know us.<br></p>
<p>We specialize in serving your business nedds and hope to hear from you son.</p>
<?php
function feedback($name)
{
    echo 'My function was called '.$name;
}
feedback('test');
require ('footer.php');
?>