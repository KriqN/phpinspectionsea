<?php

abstract class CasesHolder {
    const BOOL_CONST = true;

    abstract function returnsBool(): bool;

    public function method(?bool $first, bool $second = null, stdClass $third, bool $boolean) {
        return [
            /* correct usage */
            $first === true,
            $first !== true,
            $second === false,
            $second !== false,

            /* target cases */
            <warning descr="[EA] Makes no sense, because it's always false according to resolved type. Ensure the parameter is not reused.">$third === false</warning>,
            <warning descr="[EA] Makes no sense, because it's always true according to resolved type. Ensure the parameter is not reused.">$third !== false</warning>,
            <warning descr="[EA] Makes no sense, because it's always false according to resolved type. Ensure the parameter is not reused.">$third === self::BOOL_CONST</warning>,
            <warning descr="[EA] Makes no sense, because it's always true according to resolved type. Ensure the parameter is not reused.">$third !== self::BOOL_CONST</warning>,
            <warning descr="[EA] Makes no sense, because it's always false according to resolved type. Ensure the parameter is not reused.">$third === $this->returnsBool()</warning>,
            <warning descr="[EA] Makes no sense, because it's always true according to resolved type. Ensure the parameter is not reused.">$third !== $this->returnsBool()</warning>,

            /* weakly typed comparison is not handled */
            $third == false,
            $third != false,

            is_bool($first),
            is_bool($second),
            <warning descr="[EA] Makes no sense, because it's always false according to resolved type. Ensure the parameter is not reused.">is_bool($third)</warning>,
            <warning descr="[EA] Makes no sense, because of parameter type declaration.">is_bool($boolean)</warning>,
        ];
    }
}