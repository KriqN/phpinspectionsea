<?php

class CasesHolder {
    public function one(int $int, string $fqn, object $object) {
        return [
            <warning descr="[EA] Makes no sense, because it's always false according to resolved type. Ensure the parameter is not reused.">is_object($int)</warning>,
            <warning descr="[EA] Makes no sense, because it's always false according to resolved type. Ensure the parameter is not reused.">is_object($fqn)</warning>,
            is_object($object),
        ];
    }
    public function two(int $int, string $fqn, object $object) {
        return [
            <warning descr="[EA] Makes no sense, because it's always false according to resolved type. Ensure the parameter is not reused.">is_subclass_of($int, '...')</warning>,
            is_subclass_of($fqn, '...'),
            is_subclass_of($object, '...'),

            <warning descr="[EA] Makes no sense, because it's always false according to resolved type. Ensure the parameter is not reused.">is_a($int, '...')</warning>,
            is_a($fqn, '...'),
            is_a($object, '...'),
        ];
    }
}