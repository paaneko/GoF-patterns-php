<?php

namespace App\Structural\Bridge\Structure\Report;

use App\Structural\Bridge\Structure\ReportTransformerInterface;

class MediumReport extends Report
{
    protected string $header;
    protected string $title;
    protected string $content;
    protected string $table;

    public function __construct(
        ReportTransformerInterface $transformer,
        string $header,
        string $title,
        string $content,
        string $table,
    )
    {
        parent::__construct($transformer);
        $this->header = $header;
        $this->title = $title;
        $this->content = $content;
        $this->table = $table;
    }

    public function transform(): string
    {
        return $this->transformer->renderParts([
            $this->transformer->transformTitle($this->title),
            $this->transformer->transformContent($this->content),
            $this->transformer->transformTable($this->table),
        ]);
    }
}