<?php

function cases_holder() {
    <weak_warning descr="[EA] Wrap constructs' body within a block (PSR-12 recommendations).">if</weak_warning> ($a) ;
    <weak_warning descr="[EA] Wrap constructs' body within a block (PSR-12 recommendations).">elseif</weak_warning> ($b) ;
    <weak_warning descr="[EA] Wrap constructs' body within a block (PSR-12 recommendations).">else</weak_warning> ;

    <weak_warning descr="[EA] Wrap constructs' body within a block (PSR-12 recommendations).">if</weak_warning> ($a) ;
    <weak_warning descr="[EA] Wrap constructs' body within a block (PSR-12 recommendations).">elseif</weak_warning> ($b) ;
    else <weak_warning descr="[EA] Wrap constructs' body within a block (PSR-12 recommendations).">if</weak_warning> ($c) ;
    else /** doc block */ <weak_warning descr="[EA] Wrap constructs' body within a block (PSR-12 recommendations).">if</weak_warning> ($d) ;

    <weak_warning descr="[EA] Wrap constructs' body within a block (PSR-12 recommendations).">foreach</weak_warning> ($x as $v) ;
    <weak_warning descr="[EA] Wrap constructs' body within a block (PSR-12 recommendations).">for</weak_warning> (;;) ;
    <weak_warning descr="[EA] Wrap constructs' body within a block (PSR-12 recommendations).">while</weak_warning> ($y) ;
    <weak_warning descr="[EA] Wrap constructs' body within a block (PSR-12 recommendations).">do</weak_warning> ; while($z);
}