<?php

namespace Application\Services\Formula\Node;

class Greater_or_equal extends Formula
{
    public function evaluate(): float
    {
        // TODO: Implement evaluate() method.
        return 0;
    }
    
    public function toString(): string
    {
        return "( " . $this->left->toString() . " >= " .$this->right->toString() . " )";
    }
}