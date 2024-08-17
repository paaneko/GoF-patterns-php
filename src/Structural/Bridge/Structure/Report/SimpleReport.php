<?php

namespace App\Structural\Bridge\Structure\Report;

use App\Structural\Bridge\Structure\ReportTransformerInterface;

class SimpleReport extends Report
{
    protected string $title;
    protected string $content;

    public function __construct(
        ReportTransformerInterface $transformer,
        string $title,
        string $content,
    )
    {
        parent::__construct($transformer);
        $this->title = $title;
        $this->content = $content;
    }

    public function transform(): string
    {
        return $this->transformer->renderParts([
            $this->transformer->transformTitle($this->title),
            $this->transformer->transformContent($this->content),
        ]);
    }
}