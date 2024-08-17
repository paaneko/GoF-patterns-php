<?php

namespace App\Structural\Bridge\Structure\Report;

use App\Structural\Bridge\Structure\ReportTransformerInterface;

abstract class Report
{
    protected ReportTransformerInterface $transformer;

    public function __construct(ReportTransformerInterface $transformer)
    {
        $this->transformer = $transformer;
    }

    public function changeTransformer(ReportTransformerInterface $transformer): void
    {
        $this->transformer = $transformer;
    }

    abstract public function transform(): string;
}