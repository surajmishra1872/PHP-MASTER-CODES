<?php

//static form


$data=array(

'Name'=>'Suraj',
'Class'=>'B.Tech',
'RollNo'=>'46',

);
echo<<<'FORM'
<h1>Student Form</h1>
<hr/>
<form>
<p>
Name:<input type="text" value="{$data['Name']}">
</p>
<p>
Class:<input type="text" value="{$data['Class']}">
</p>
<p>
RollNO:<input type="text" value="{$data['RollNo']}">
</p>
</form>

FORM;
?>