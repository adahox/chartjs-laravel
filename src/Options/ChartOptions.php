<?php

namespace Olharacessivel\ChartjsLaravel\Options;

use Olharacessivel\ChartjsLaravel\Options\Enums\ChartsOptionsTypes;
use Illuminate\Support\Str;
class ChartOptions implements \JsonSerializable
{

    protected string $type;

    private string $sign;

    protected array $data;

    protected array $options = [];

    protected array $plugins = [];


    public function __construct(ChartsOptionsTypes $type, $labels, $datasets)
    {
        $this->sign = Str::uuid();
        $this->type = $type->value;

        $this->data['labels'] = $labels;
        $this->data['datasets'] = $datasets;

        $this->options = [
            'aspectRatio' => 2,
            'scales' => [
                'y' => [
                    'beginAtZero' => true
                ]
            ]
        ];

    }


    public function sign()
    {
        return $this->sign;

    }


    public function jsonSerialize()
    {
        return [
            'sign' => $this->sign,
            'type' => $this->type,
            'data' => $this->data,
            'options' => $this->options,
            'plugins' => $this->plugins
        ];

    }


}
