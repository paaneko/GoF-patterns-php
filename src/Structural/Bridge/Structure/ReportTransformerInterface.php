<?php

namespace App\Structural\Bridge\Structure;

interface ReportTransformerInterface
{
    public function transformLogo(string $logo): string;

    public function transformHeader(string $header): string;

    public function transformTitle(string $content): string;

    public function transformContent(string $content): string;

    public function transformTable(string $table): string;

    public function transformMetrics(string $metrics): string;

    public function renderParts(array $parts): string;
}