<?php

namespace Tensor\Benchmarks\LinearAlgebra;

use Tensor\Vector;

class VectorDotProductBench
{
    /**
     * @var \Tensor\Vector
     */
    protected $a;

    /**
     * @var \Tensor\Vector
     */
    protected $b;

    public function setUp() : void
    {
        $this->a = Vector::uniform(250000);

        $this->b = Vector::uniform(250000);
    }

    /**
     * @Subject
     * @Iterations(5)
     * @BeforeMethods({"setUp"})
     * @OutputTimeUnit("seconds", precision=3)
     */
    public function dot() : void
    {
        $this->a->dot($this->b);
    }
}