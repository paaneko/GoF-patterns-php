<?php

namespace App\Structural\Bridge\Structure\Report;

use App\Structural\Bridge\Structure\ReportTransformerInterface;

class ExtendedReport extends Report
{
    protected string $logo;
    protected string $header;
    protected string $title;
    protected string $content;
    protected string $table;
    protected string $metrics;

    public function __construct(
        ReportTransformerInterface $transformer,
        string $logo,
        string $header,
        string $title,
        string $content,
        string $table,
        string $metrics,
    )
    {
        parent::__construct($transformer);
        $this->logo = $logo;
        $this->header = $header;
        $this->title = $title;
        $this->content = $content;
        $this->table = $table;
        $this->metrics = $metrics;
    }

    public function transform(): string
    {
        return $this->transformer->renderParts([
            $this->transformer->transformLogo($this->logo),
            $this->transformer->transformHeader($this->header),
            $this->transformer->transformTitle($this->title),
            $this->transformer->transformContent($this->content),
            $this->transformer->transformTable($this->table),
            $this->transformer->transformMetrics($this->metrics)
        ]);
    }
}