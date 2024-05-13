<?php

namespace Olharacessivel\ChartjsLaravel\Charts;

use Olharacessivel\ChartjsLaravel\Options\ChartOptions;
use Olharacessivel\ChartjsLaravel\Options\Enums\ChartsOptionsTypes;
class ChartPolar
{ 
    private $options;
    public function __construct(array $labels, array $datasets)
    {
        $this->options = new ChartOptions(ChartsOptionsTypes::POLAR, $labels, $datasets);
    }

    public function sign() {
        return $this->options->sign();
    }
    public function getOptions(){
        return $this->options;
    }

}
