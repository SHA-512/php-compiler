--TEST--
Test compilation of binary ops
--FILE--
<?php

compile {
    $result = $left + $right;
    $result = $left - $right;
    $result = $left * $right;
    $result = $left / $right;
    $result = $left % $right;
    $result = $left & $right;
    $result = $left | $right;
    $result = $left < $right;
    $result = $left <= $right;
    $result = $left > $right;
    $result = $left >= $right;
    $result = $left == $right;
    $result = $left != $right;
}


compile {
    $result = $left + 0;
    $result = $left - 1;
    $result = $left * 2;
    $result = $left / 3;
    $result = $left % 4;
    $result = $left & 5;
    $result = $left | 6;
    $result = $left < 7;
    $result = $left <= 8;
    $result = $left > 9;
    $result = $left >= 10;
    $result = $left == 11;
    $result = $left != 12;
}

?>
--EXPECTF--
<?php

%s
$__right = $right;
$result = $this->context->builder->add($left, $__right);
$__right = $right;
$result = $this->context->builder->sub($left, $__right);
$__right = $right;
$result = $this->context->builder->mul($left, $__right);
$__right = $right;
$result = $this->context->builder->unsignedDiv($left, $__right);
$__right = $right;
$result = $this->context->builder->unsignedRem($left, $__right);
$__right = $right;
$result = $this->context->builder->bitwiseAnd($left, $__right);
$__right = $right;
$result = $this->context->builder->bitwiseOr($left, $__right);
$__right = $right;
$result = $this->context->builder->icmp(PHPLLVM\Builder::INT_ULT, $left, $__right);
$__right = $right;
$result = $this->context->builder->icmp(PHPLLVM\Builder::INT_ULE, $left, $__right);
$__right = $right;
$result = $this->context->builder->icmp(PHPLLVM\Builder::INT_UGT, $left, $__right);
$__right = $right;
$result = $this->context->builder->icmp(PHPLLVM\Builder::INT_UGE, $left, $__right);
$__right = $right;
$result = $this->context->builder->icmp(PHPLLVM\Builder::INT_EQ, $left, $__right);
$__right = $right;
$result = $this->context->builder->icmp(PHPLLVM\Builder::INT_NE, $left, $__right);


$__right = $left->typeOf()->constInt(0, false);
$result = $this->context->builder->add($left, $__right);
$__right = $left->typeOf()->constInt(1, false);
$result = $this->context->builder->sub($left, $__right);
$__right = $left->typeOf()->constInt(2, false);
$result = $this->context->builder->mul($left, $__right);
$__right = $left->typeOf()->constInt(3, false);
$result = $this->context->builder->unsignedDiv($left, $__right);
$__right = $left->typeOf()->constInt(4, false);
$result = $this->context->builder->unsignedRem($left, $__right);
$__right = $left->typeOf()->constInt(5, false);
$result = $this->context->builder->bitwiseAnd($left, $__right);
$__right = $left->typeOf()->constInt(6, false);
$result = $this->context->builder->bitwiseOr($left, $__right);
$__right = $left->typeOf()->constInt(7, false);
$result = $this->context->builder->icmp(PHPLLVM\Builder::INT_ULT, $left, $__right);
$__right = $left->typeOf()->constInt(8, false);
$result = $this->context->builder->icmp(PHPLLVM\Builder::INT_ULE, $left, $__right);
$__right = $left->typeOf()->constInt(9, false);
$result = $this->context->builder->icmp(PHPLLVM\Builder::INT_UGT, $left, $__right);
$__right = $left->typeOf()->constInt(10, false);
$result = $this->context->builder->icmp(PHPLLVM\Builder::INT_UGE, $left, $__right);
$__right = $left->typeOf()->constInt(11, false);
$result = $this->context->builder->icmp(PHPLLVM\Builder::INT_EQ, $left, $__right);
$__right = $left->typeOf()->constInt(12, false);
$result = $this->context->builder->icmp(PHPLLVM\Builder::INT_NE, $left, $__right);
?>