<?php
class a { public function return_static() { return new static(); } }
class b extends a { }
$c = new b();
$d = $c->return_static();
assert( get_class($d) == 'b');
